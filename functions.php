<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// Add Default Bootstrap Nav // Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');

function register_top_nav_menu() {
  register_nav_menu('top-nav-menu',__( 'Top Nav Menu' ));
}
add_action( 'init', 'register_top_nav_menu' );


function stop_admin_forms_css_frontend() {
    if (!is_admin()) {
        wp_dequeue_style('forms');
        wp_deregister_style('forms');
    }
}
add_action('wp_enqueue_scripts', 'stop_admin_forms_css_frontend', 100);

// Add support for Luskin Gallery Template
function createSlug($string)
{
    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
    return strtolower($slug);
}

function lacc_get_gallery_caption($sources = array())
{
    foreach ((array) $sources as $source) {
        if (is_numeric($source) && (int) $source > 0) {
            $attachment_id = (int) $source;
            $attachment = get_post($attachment_id);

            if ($attachment) {
                $attachment_sources = array(
                    get_post_meta($attachment_id, '_wp_attachment_image_alt', true),
                    $attachment->post_excerpt,
                    $attachment->post_title,
                );

                $caption = lacc_get_gallery_caption($attachment_sources);
                if ('' !== $caption) {
                    return $caption;
                }
            }

            continue;
        }

        if (is_array($source)) {
            $caption = lacc_get_gallery_caption(array(
                isset($source['caption']) ? $source['caption'] : '',
                isset($source['title']) ? $source['title'] : '',
                isset($source['description']) ? $source['description'] : '',
                isset($source['alt']) ? $source['alt'] : '',
                isset($source['ID']) ? $source['ID'] : 0,
                isset($source['id']) ? $source['id'] : 0,
            ));

            if ('' !== $caption) {
                return $caption;
            }

            continue;
        }

        $caption = trim(wp_strip_all_tags((string) $source));
        if ('' !== $caption) {
            return html_entity_decode($caption, ENT_QUOTES, 'UTF-8');
        }
    }

    return '';
}

function lacc_get_gallery_caption_attributes($caption)
{
    $caption = trim((string) $caption);

    if ('' === $caption) {
        return '';
    }

    $caption_attr = esc_attr($caption);

    return ' data-caption="' . $caption_attr . '" title="' . $caption_attr . '"';
}

// dump function, for development purposes
function dump($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

//You can use WordPress preg_replace filter (in your theme functions.php file) example:
function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);        
    return $menu;      
}

add_filter('wp_nav_menu','new_submenu_class'); 

//for SVG graphics
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

//remove _empty_ p tags from AFC editor output
function my_acf_load_value( $value, $post_id, $field ) {

 $content = apply_filters('the_content',$value);
 $content = force_balance_tags( $content );
 $content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
 $content = preg_replace( '~\s?<p>(\s| )+</p>\s?~', '', $content );

 return $content;
}

add_filter('acf/load_value/type=wysiwyg', 'my_acf_load_value', 10, 3);

function lacc_get_theme_color_palette() {
    return array(
        '#51534a',
        '#9e7156',
        '#d4a441',
        '#946E29',
        '#f5b62b',
        '#f6f3ed',
        '#ffffff',
        '#8dc5db',
        '#6383a8'
    );
}

function lacc_get_default_surface_gradient() {
    return 'linear-gradient(180deg, rgba(246,243,237,0.92) 0%, rgba(255,255,255,0.92) 100%)';
}

function lacc_is_pattern_sandbox_page() {
    return function_exists( 'is_page_template' ) && is_page_template( 'template-sandbox.php' );
}

function lacc_is_component_demo_page() {
    return ( function_exists( 'is_page' ) && is_page( 'flex' ) ) || lacc_is_pattern_sandbox_page();
}

function lacc_should_strip_component_inline_styles() {
    return function_exists( 'is_page' ) && is_page( 'flex' );
}

function lacc_strip_component_inline_styles( $html ) {
    if ( ! lacc_should_strip_component_inline_styles() || ! is_string( $html ) || '' === $html ) {
        return $html;
    }

    return (string) preg_replace( '/\sstyle=("|\').*?\1/i', '', $html );
}

function lacc_get_design_system_route_paths() {
    return array( 'design-system', 'design-system-library', 'design-system-test-strip' );
}

function lacc_get_design_system_canonical_path() {
    return 'design-system';
}

function lacc_is_design_system_test_strip_request() {
    if ( is_admin() ) {
        return false;
    }

    $request_uri = isset( $_SERVER['REQUEST_URI'] ) ? (string) $_SERVER['REQUEST_URI'] : '';
    $request_path = trim( (string) wp_parse_url( $request_uri, PHP_URL_PATH ), '/' );

    return in_array( rawurldecode( $request_path ), lacc_get_design_system_route_paths(), true );
}

function lacc_render_design_system_test_strip_route() {
    if ( ! lacc_is_design_system_test_strip_request() ) {
        return;
    }

    global $wp_query;

    if ( $wp_query ) {
        $wp_query->is_404 = false;
    }

    $request_uri = isset( $_SERVER['REQUEST_URI'] ) ? (string) $_SERVER['REQUEST_URI'] : '';
    $request_path = trim( (string) wp_parse_url( $request_uri, PHP_URL_PATH ), '/' );
    $canonical_path = lacc_get_design_system_canonical_path();

    if ( rawurldecode( $request_path ) !== $canonical_path ) {
        wp_safe_redirect( home_url( '/' . $canonical_path . '/' ), 301 );
        exit;
    }

    status_header( 200 );

    $template = locate_template( 'template-design-system-test-strip-standalone.php' );
    if ( $template ) {
        include $template;
        exit;
    }
}
add_action( 'template_redirect', 'lacc_render_design_system_test_strip_route', 0 );

function lacc_design_system_test_strip_title( $title_parts ) {
    if ( ! lacc_is_design_system_test_strip_request() ) {
        return $title_parts;
    }

    $title_parts['title'] = 'Design System';

    return $title_parts;
}
add_filter( 'document_title_parts', 'lacc_design_system_test_strip_title' );

function lacc_register_acf_color_palette() {
    ?>
    <script type="text/javascript">
        (function($) {
            if (typeof acf === 'undefined') {
                return;
            }

            acf.add_filter('color_picker_args', function(args, $field) {
                args.palettes = <?php echo wp_json_encode( lacc_get_theme_color_palette() ); ?>;
                return args;
            });
        })(jQuery);
    </script>
    <?php
}
add_action('acf/input/admin_footer', 'lacc_register_acf_color_palette');

function lacc_populate_card_gravity_forms( $field ) {
    $field['choices'] = array(
        '' => 'Select a Gravity Form'
    );

    if ( class_exists( 'GFAPI' ) ) {
        $forms = GFAPI::get_forms();

        if ( ! empty( $forms ) && is_array( $forms ) ) {
            foreach ( $forms as $form ) {
                if ( ! empty( $form['id'] ) && ! empty( $form['title'] ) ) {
                    $field['choices'][ (string) $form['id'] ] = $form['title'];
                }
            }
        }
    }

    return $field;
}
add_filter( 'acf/load_field/name=card_gravity_form_id', 'lacc_populate_card_gravity_forms' );

//Remove WPAUTOP from ACF TinyMCE Editor
function acf_wysiwyg_remove_wpautop() {
    remove_filter('acf_the_content', 'wpautop' );
}
add_action('acf/init', 'acf_wysiwyg_remove_wpautop');


remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


/***
* Open Modal on Email Signup
*/

add_filter('gform_submit_button_1', 'add_onclick', 10, 2);
function add_onclick( $button, $form ) {
    $dom = new DOMDocument();
    $dom->loadHTML( $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    $onclick = $input->getAttribute( 'onclick' );
    $onclick .= " jQuery('#signupConfirmation').modal('show')";
    $input->setAttribute( 'onclick', $onclick );
    return $dom->saveHtml( $input );
}

//
// GravityForms Friends & Family Interest Form - modify list fields
//

add_filter("gform_column_input_14_19_2", "set_column", 10, 5);
function set_column($input_info, $field, $column, $value, $form_id){
    return array("type" => "select", "choices" => "Age 15+,Age 3-15,Age 0-2");
}

add_filter("gform_column_input_14_19_3", "set_column_breakfast", 10, 5);
function set_column_breakfast($input_info, $field, $column, $value, $form_id){
    return array("type" => "select", "choices" => "0,1,2,3,4,5,6,7");
}

add_filter("gform_column_input_14_19_4", "set_column_lunch", 10, 5);
function set_column_lunch($input_info, $field, $column, $value, $form_id){
    return array("type" => "select", "choices" => "0,1,2,3,4,5,6,7");
}

add_filter("gform_column_input_14_19_5", "set_column_dinner", 10, 5);
function set_column_dinner($input_info, $field, $column, $value, $form_id){
    return array("type" => "select", "choices" => "0,1,2,3,4,5,6,7");
}

//
// Change Max/Min Year on RFP form date fields
//

add_filter( 'gform_date_max_year', function ( $max_date, $form ) {
  return $form['id'] == 2 ? 2028 : $max_date;
}, 10, 3 );

add_filter( 'gform_date_min_year', function ( $min_year, $form, $field ) {
 
  return $form['id'] == 2 ? 2023 : $min_year;
}, 10, 3 );

/* *****************************************************************************
 * ADD SPECIALS CUSTOM POST TYPE
 * ****************************************************************************/
add_action( 'init', 'cptt_custom_post_types' );
function cptt_custom_post_types() {
  register_post_type( 'articles',
    array(
      'labels' => array(
        'name' => __( 'Articles' ),
        'singular_name' => __( 'Articles' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
      'menu_icon' => 'dashicons-awards',
'taxonomies'          => array('topics', 'category' )
    )
  );


register_post_type(
    'general', array(
      'labels' => array('name' => __( 'Specials' ), 'singular_name' => __( 'Specials' ) ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
'menu_icon' => 'dashicons-tag',
'taxonomies'          => array('topics', 'category' )

    )
  );


/* register_post_type(
    'family', array(
      'labels' => array('name' => __( 'Family Specials' ), 'singular_name' => __( 'Family Specials' ) ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
'menu_icon' => 'dashicons-tag',
'taxonomies'          => array('topics', 'category' )

    )
  ); */

register_post_type(
    'specials', array(
      'labels' => array('name' => __( 'New Specials' ), 'singular_name' => __( 'New Specials' ) ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
'menu_icon' => 'dashicons-tag',
'taxonomies'          => array('topics', 'category' )

    )
  );


register_post_type(
    'recipes', array(
      'labels' => array('name' => __( 'Recipes' ), 'singular_name' => __( 'Recipes' ) ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
'menu_icon' => 'dashicons-tag',
'taxonomies'          => array('topics', 'category' )

    )
  );
}

/* *****************************************************************************
 * ADD CUSTOM SIDEBARS
 * ****************************************************************************/

function limited_customizer_access() {
    $role = get_role('elevated_editor'); // or whatever role you want to grant
    if ($role && !$role->has_cap('edit_theme_options')) {
        $role->add_cap('edit_theme_options');
        $role->add_cap('gravityforms_view_forms');
        $role->add_cap('gravityforms_edit_forms');
        $role->add_cap('gravityforms_create_form');
        $role->add_cap('gravityforms_delete_forms');
        $role->add_cap('gravityforms_preview_forms');
        $role->add_cap('gravityforms_view_entries');
        $role->add_cap('gravityforms_edit_entries');
        $role->add_cap('gravityforms_delete_entries');
        $role->add_cap('gravityforms_export_entries');
        $role->add_cap('gravityforms_view_entry_notes');
        $role->add_cap('gravityforms_edit_entry_notes');
    }
}
add_action('init', 'limited_customizer_access');

function restrict_customizer_panels_for_editors( $wp_customize ) {
    if ( current_user_can('elevated_editor') && !current_user_can('manage_options') ) {
        // Remove all sections except "Additional CSS"
        //echo "fffffff=";
        foreach ( $wp_customize->sections() as $section_id => $section ) {
          //  echo $section_id." -> ";
            if ( $section_id !== 'custom_css' ) {
                if ( $section_id !== 'sidebar-widgets-sidebar-footer' ) {
                 //   $wp_customize->remove_section( $section_id );
                }
            }
        }

        // Optionally remove all panels (e.g. Menus, Widgets, Homepage Settings)
        foreach ( $wp_customize->panels() as $panel_id => $panel ) {
            if($panel_id!=='widgets'){
                $wp_customize->remove_panel( $panel_id );
            }
        }
    }
}
add_action( 'customize_register', 'restrict_customizer_panels_for_editors', 100 );


function restrict_appearance_submenus() {
    // Only run for users who can edit theme options but are NOT admins
    if ( ! current_user_can( 'edit_theme_options' ) || current_user_can( 'manage_options' ) ) {
        return;
    }

    // Remove specific submenus under Appearance (themes.php is the parent slug)
    // Keep customize.php accessible by direct URL; remove other items.
    remove_submenu_page( 'themes.php', 'themes.php' );        // Appearance -> Themes
    remove_submenu_page( 'themes.php', 'widgets.php' );       // Appearance -> Widgets
    remove_submenu_page( 'themes.php', 'theme-editor.php' );  // Appearance -> Theme File Editor
    // Some installs/plugins may add other slugs; remove them similarly if needed.
}
add_action( 'admin_menu', 'restrict_appearance_submenus', 999 );


function clone_editor_role() {
    // Get the editor role object
    $editor = get_role( 'editor' );

    // Only create the new role if it doesn't already exist
    if ( $editor && ! get_role( 'elevated_editor' ) ) {
        // Clone all capabilities
        add_role( 'elevated_editor', 'Elevated Editor', $editor->capabilities );
    }
}
add_action( 'init', 'clone_editor_role' );


function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Articles', 'your-theme-domain' ),
            'id' => 'articles-side-bar',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );


/* *****************************************************************************
 * ADD REDIRECT FOR ARTICLES ARCHIVE TO ARTICLES-HOME PAGE
 * ****************************************************************************/

add_action( 'template_redirect', 'redirect_to_external_url' );
function redirect_to_external_url() {
    $currURL = $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if ( $currURL == 'https://lakearrowheadconferencecenter.ucla.edu/articles/' ) { 
      wp_redirect( 'https://lakearrowheadconferencecenter.ucla.edu/articles-home/', 301 ); 
	  exit;
    }
}
if(isset($_SERVER['REQUEST_URL'])){
    if($_SERVER['REQUEST_URI']=="/recreation/")
    {
    wp_redirect( 'https://lakearrowheadlodge.com/play-at-lake-arrowhead-lodge/', 301 );
    exit;
    }

    if($_SERVER['REQUEST_URI']=="/recreation")
    {
    wp_redirect( 'https://lakearrowheadlodge.com/play-at-lake-arrowhead-lodge/', 301 );
    exit;
    }

    if($_SERVER['REQUEST_URI']=="/dine/")
    {
    wp_redirect( 'https://lakearrowheadlodge.com/lake-arrowhead-award-winning-dining/', 301 );
    exit;
    }

    if($_SERVER['REQUEST_URI']=="/dine")
    {
    wp_redirect( 'https://lakearrowheadlodge.com/lake-arrowhead-award-winning-dining/', 301 );
    exit;
    }

    if($_SERVER['REQUEST_URI']=="/lake-arrowhead-lodging/on-site-amenities")
    {
    wp_redirect( 'https://lakearrowheadlodge.com/lake-arrowhead-accommodations/amenities', 301 );
    exit;
    }

    if($_SERVER['REQUEST_URI']=="/lake-arrowhead-lodging/on-site-amenities/")
    {
    wp_redirect( 'https://lakearrowheadlodge.com/lake-arrowhead-accommodations/amenities', 301 );
    exit;
    }

    if($_SERVER['REQUEST_URI']=="/stay-at-ucla-lake-arrowhead-conference-center/")
    {
    wp_redirect( 'https://lakearrowheadconferencecenter.ucla.edu/lake-arrowhead-accommodations/', 301 );
    exit;
    }

    if($_SERVER['REQUEST_URI']=="/stay-at-ucla-lake-arrowhead-conference-center")
    {
    wp_redirect( 'https://lakearrowheadconferencecenter.ucla.edu/lake-arrowhead-accommodations/', 301 );
    exit;
    }

    if($_SERVER['REQUEST_URI']=="/holiday-weekends/")
    {
    wp_redirect( 'https://lakearrowheadconferencecenter.ucla.edu/winter-workation/', 301 );
    exit;
    }

    if($_SERVER['REQUEST_URI']=="/holiday-weekends")
    {
    wp_redirect( 'https://lakearrowheadconferencecenter.ucla.edu/winter-workation/', 301 );
    exit;
    }

    if($_SERVER['REQUEST_URI']=="/bruinwoods/summer-family-camp/")
    {
    wp_redirect( 'https://lakearrowheadconferencecenter.ucla.edu/bruinwoods/', 301 );
    exit;
    }

    if($_SERVER['REQUEST_URI']=="/bruinwoods/summer-family-camp")
    {
    wp_redirect( 'https://lakearrowheadconferencecenter.ucla.edu/bruinwoods/', 301 );
    exit;
    }



    if($_SERVER['REQUEST_URI']=="/bb/")
    {
    wp_redirect( 'https://lakearrowheadconferencecenter.ucla.edu/', 301 );
    exit;
    }

    if($_SERVER['REQUEST_URI']=="/bb")
    {
    wp_redirect( 'https://lakearrowheadconferencecenter.ucla.edu/', 301 );
    exit;
    }


    if($_SERVER['REQUEST_URI']=="/meetings/cmp/")
    {
    wp_redirect( 'https://lakearrowheadconferencecenter.ucla.edu/meetings/complete-meeting-package/', 301 );
    exit;
    }

    if($_SERVER['REQUEST_URI']=="/meetings/cmp")
    {
    wp_redirect( 'https://lakearrowheadconferencecenter.ucla.edu/meetings/complete-meeting-package/', 301 );
    exit;
    }


    /*
    if($_SERVER['REQUEST_URI']=="/specials/getaways/")
    {
    wp_redirect( 'https://lakearrowheadconferencecenter.ucla.edu/specials/getaways/family-and-friends/', 301 );
    exit;
    }

    if($_SERVER['REQUEST_URI']=="/specials/getaways")
    {
    wp_redirect( 'https://lakearrowheadconferencecenter.ucla.edu/specials/getaways/family-and-friends/', 301 );
    exit;
    }
    */

    if($_SERVER['REQUEST_URL']=="http://www.uclakearrowheadlodge.com")
    {
    wp_redirect( 'https://lakearrowheadconferencecenter.ucla.edu/', 301 );
    exit;
    }

    if($_SERVER['REQUEST_URL']=="http://uclakearrowheadlodge.com")
    {
    wp_redirect( 'https://lakearrowheadconferencecenter.ucla.edu/', 301 );
    exit;
    }

    if($_SERVER['REQUEST_URL']=="https://lakearrowheadlodge.com/specials")
    {
    wp_redirect( 'https://lakearrowheadlodge.com/general/', 301 );
    exit;
    }


    if($_SERVER['REQUEST_URI']=="/student-family")
    {
    wp_redirect( 'https://lakearrowheadlodge.com/lake-arrowhead-lodge-student-and-family/?utm_medium=print_paid&utm_source=db_newspaper&utm_campaign=student_family_rate', 301 );
    exit;
    }

    if($_SERVER['REQUEST_URI']=="/student-family/")
    {
    wp_redirect( 'https://lakearrowheadlodge.com/lake-arrowhead-lodge-student-and-family/?utm_medium=print_paid&utm_source=db_newspaper&utm_campaign=student_family_rate', 301 );
    exit;
    }


    /* semrush fixes */
    if($_SERVER['REQUEST_URL']=="/meetings/cmp")
    {
    wp_redirect( 'https://lakearrowheadlodge.com/meetings/complete-meeting-package', 301 );
    exit;
    }
    if($_SERVER['REQUEST_URL']=="/meetings/cmp/")
    {
    wp_redirect( 'https://lakearrowheadlodge.com/meetings/complete-meeting-package', 301 );
    exit;
    }
}

function replace_content($content)
{
$content = str_replace('Lake Arrowhead Conference Center', 'Lake Arrowhead Lodge',$content);
return $content;
}
add_filter('the_content','replace_content');





function replace_text($text) {
	$text = str_replace('Conference Center', 'lodge', $text);
	$text = str_replace('The Center', 'lodge', $text);
	return $text;
}
add_filter('the_content', 'replace_text');







