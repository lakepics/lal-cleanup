<?php
$site_footer_property_links = array(
    array(
        'label' => 'UCLA Meyer & Renee Luskin Conference Center',
        'url' => 'https://luskinconferencecenter.ucla.edu',
    ),
    array(
        'label' => 'UCLA Lake Arrowhead Lodge',
        'url' => home_url('/'),
    ),
    array(
        'label' => 'The Inn at UCLA',
        'url' => 'https://theinn.ucla.edu',
    ),
    array(
        'label' => 'UCLA Conferences & Catering',
        'url' => 'https://conferences.ucla.edu',
    ),
);

$site_footer_utility_links = array(
    array(
        'label' => 'University of California',
        'url' => 'https://www.universityofcalifornia.edu',
    ),
    array(
        'label' => 'Privacy & Terms of Use',
        'url' => 'https://ucla.edu/terms-of-use',
    ),
    array(
        'label' => 'Accessibility',
        'url' => 'https://www.ucla.edu/accessibility',
    ),
    array(
        'label' => 'Emergency',
        'url' => 'https://bso.ucla.edu/',
    ),
    array(
        'label' => 'Report Misconduct',
        'url' => 'https://ucla-gme-advocate.symplicity.com/public_report/index.php/pid849100',
    ),
);
?>

<div class="site-footer">
    <div class="site-footer__main">
        <div class="site-footer__inner">
            <div class="site-footer__top-row">
                <div class="site-footer__brand">
                    <a class="site-footer__brand-link" href="<?php echo esc_url( home_url('/') ); ?>" aria-label="UCLA Lake Arrowhead Lodge home">
                        <img class="site-footer__brand-logo" src="<?php echo esc_url( get_template_directory_uri() . '/dist/images/LAL_Logo_White_Horiz_Arrowhead.svg' ); ?>" alt="UCLA Lake Arrowhead Lodge">
                    </a>
                </div>

                <div class="site-footer__top-actions">
                    <span class="site-footer__social-label">Follow</span>
                    <div class="site-footer__social-icons" aria-label="Social media links">
                        <a class="site-footer__social-icon" target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/uclalakearrowhead/" aria-label="Instagram">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a class="site-footer__social-icon" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/uclaarrowhead" aria-label="Facebook">
                            <i class="fa fa-facebook-f" aria-hidden="true"></i>
                        </a>
                        <a class="site-footer__social-icon" target="_blank" rel="noopener noreferrer" href="https://www.twitter.com/uclaarrowhead" aria-label="X (Twitter)">
                            <svg viewBox="0 0 24 24" aria-hidden="true" class="site-footer__social-x-icon"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path></svg>
                        </a>
                        <a class="site-footer__social-icon" target="_blank" rel="noopener noreferrer" href="https://www.tripadvisor.com/Hotel_Review-g32593-d1380050-Reviews-UCLA_Lake_Arrowhead_Conference_Center-Lake_Arrowhead_California.html" aria-label="Tripadvisor">
                            <img class="site-footer__social-tripadvisor-icon" src="<?php echo esc_url( get_template_directory_uri() . '/brand/tripadvisor-logo-svgrepo-com.svg' ); ?>" alt="" aria-hidden="true">
                        </a>
                    </div>
                    <div class="site-footer__social-cta-wrap">
                        <a class="site-footer__cta site-footer__cta--social" href="<?php echo esc_url( home_url('/email-sign-up/') ); ?>">Join Our Email List</a>
                    </div>
                </div>
            </div>

            <div class="site-footer__grid">
                <section class="site-footer__column site-footer__column--contact" aria-labelledby="site-footer-contact-heading">
                    <h4 id="site-footer-contact-heading">Contact Information</h4>
                    <div class="site-footer__contact-list">
                        <div class="site-footer__contact-item site-footer__contact-item--phone">
                            <p><a href="tel:+19093372478">Phone: (909) 337-2478</a><br><span>Fax: (909) 337-1030</span></p>
                        </div>
                        <div class="site-footer__contact-item site-footer__contact-item--email">
                            <p><a href="mailto:UCLALakeArrowhead@ha.ucla.edu">UCLALakeArrowhead@ha.ucla.edu</a></p>
                        </div>
                        <div class="site-footer__contact-item site-footer__contact-item--address">
                            <p><a target="_blank" rel="noopener noreferrer" href="https://www.google.com/maps/dir/''/ucla+lake+arrowhead+conference+center/data=!4m5!4m4!1m0!1m2!1m1!1s0x80c357e80a92254b:0xdc8a5a45759372b0?sa=X&amp;ved=0ahUKEwivtI36_9PTAhUlh1QKHQH0AjUQ9RcIlgEwDw">850 Willow Creek Road<br>P.O. Box 160<br>Lake Arrowhead, CA 92352</a></p>
                        </div>
                    </div>
                </section>

                <section class="site-footer__column site-footer__column--links" aria-labelledby="site-footer-links-heading">
                    <h4 id="site-footer-links-heading">Explore &amp; Connect</h4>
                    <div class="site-footer__widget-area site-footer__widget-area--links">
                        <h4 class="summer-jobs"><a href="<?php echo esc_url( home_url('/jobs') ); ?>">Join Our Team</a></h4>
                        <?php if ( is_active_sidebar('footer-column-3') ) { dynamic_sidebar('footer-column-3'); } ?>
                    </div>
                </section>

                <section class="site-footer__column site-footer__column--community" aria-labelledby="site-footer-community-heading">
                    <h4 id="site-footer-community-heading">Community Partners</h4>
                    <div class="site-footer__widget-area site-footer__widget-area--community">
                        <?php
                        if ( is_active_sidebar('footer-column-4') ) {
                            ob_start();
                            dynamic_sidebar('footer-column-4');
                            $site_footer_community_markup = trim( ob_get_clean() );
                            $site_footer_community_markup = preg_replace( '/^[^<]+/u', '', $site_footer_community_markup );
                            echo $site_footer_community_markup; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                        }
                        ?>
                    </div>
                </section>

                <section class="site-footer__column site-footer__column--actions" aria-label="Travelers Choice award badge">
                    <div class="footer-email">
                        <?php if ( is_active_sidebar('footer-column-5') ) { dynamic_sidebar('footer-column-5'); } ?>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="site-footer__subfooter">
        <div class="site-footer__subfooter-inner">
            <div class="site-footer__hospitality-row">
                <a class="site-footer__housing-logo-link" href="https://housingandhospitality.ucla.edu" target="_blank" rel="noopener noreferrer" aria-label="UCLA Housing and Hospitality">
                    <img class="site-footer__housing-logo" src="<?php echo esc_url( get_template_directory_uri() . '/brand/UCLA_Uxd_Wht_HousingHospitality_C.svg' ); ?>" alt="UCLA Housing and Hospitality">
                </a>

                <ul class="site-footer__property-list" aria-label="UCLA Hospitality Group properties">
                    <?php foreach ( $site_footer_property_links as $site_footer_property_link ) : ?>
                        <li><a href="<?php echo esc_url( $site_footer_property_link['url'] ); ?>"><?php echo esc_html( $site_footer_property_link['label'] ); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="site-footer__legal">
                <span class="site-footer__legal-copy">&copy; <?php echo esc_html( gmdate('Y') ); ?> Regents of the</span>
                <ul class="site-footer__legal-links" aria-label="Footer legal links">
                    <?php foreach ( $site_footer_utility_links as $site_footer_utility_link ) : ?>
                        <li><a href="<?php echo esc_url( $site_footer_utility_link['url'] ); ?>"><?php echo esc_html( $site_footer_utility_link['label'] ); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
