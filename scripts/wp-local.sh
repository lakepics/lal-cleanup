#!/usr/bin/env bash

set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
SITE_PATH="${LOCAL_SITE_PATH:-$(cd "$SCRIPT_DIR/../../../.." && pwd)}"
SITE_URL="${LOCAL_SITE_URL:-https://lal.local}"
LOCAL_RUN_ROOT="${LOCAL_RUN_ROOT:-$HOME/Library/Application Support/Local/run}"
WP_CLI_PHAR="${LOCAL_WP_CLI_PHAR:-/Applications/Local.app/Contents/Resources/extraResources/bin/wp-cli/wp-cli.phar}"

detect_socket() {
    local matched_file=""
    local relative_path=""
    local runtime_id=""

    matched_file="$(grep -R -l --fixed-strings "$SITE_PATH" "$LOCAL_RUN_ROOT" 2>/dev/null | head -n 1 || true)"

    if [[ -z "$matched_file" ]]; then
        matched_file="$(grep -R -l --fixed-strings "$SITE_URL" "$LOCAL_RUN_ROOT" 2>/dev/null | head -n 1 || true)"
    fi

    if [[ -n "$matched_file" ]]; then
        relative_path="${matched_file#"$LOCAL_RUN_ROOT/"}"
        runtime_id="${relative_path%%/*}"

        if [[ -S "$LOCAL_RUN_ROOT/$runtime_id/mysql/mysqld.sock" ]]; then
            printf '%s\n' "$LOCAL_RUN_ROOT/$runtime_id/mysql/mysqld.sock"
            return 0
        fi
    fi

    find "$LOCAL_RUN_ROOT" -type s -path '*/mysql/mysqld.sock' 2>/dev/null | head -n 1
}

if [[ ! -f "$WP_CLI_PHAR" ]]; then
    printf 'Local WP-CLI phar not found at %s\n' "$WP_CLI_PHAR" >&2
    exit 1
fi

SOCKET_PATH="${LOCAL_MYSQL_SOCKET:-$(detect_socket)}"

if [[ -z "$SOCKET_PATH" || ! -S "$SOCKET_PATH" ]]; then
    printf 'Unable to find a Local MySQL socket for %s\n' "$SITE_URL" >&2
    printf 'Set LOCAL_MYSQL_SOCKET explicitly or inspect %s\n' "$LOCAL_RUN_ROOT" >&2
    exit 1
fi

exec php \
    -d error_reporting='E_ALL & ~E_DEPRECATED' \
    -d display_errors=0 \
    -d mysqli.default_socket="$SOCKET_PATH" \
    -d pdo_mysql.default_socket="$SOCKET_PATH" \
    "$WP_CLI_PHAR" \
    --path="$SITE_PATH" \
    --url="$SITE_URL" \
    "$@"