<footer>
    <div class="container">
        <div class="row columns">
            <div class="col-md-2 bottom-logo">
                <!-- logo-->
                <img src="/wp-content/themes/LACC-sage-theme-master/assets/images/lacc_logo.svg" />
            </div>
            <div class="col-md-4 contact">
                <!-- contact -->
                <h4>Contact Information</h4>
                <div class="col-xs-12 contact__phone">
                    <p><a href="tel://909 337 2478">Phone: (909) 337-2478</a>
                        <br> <a>Fax: (909) 337-1030</a></p>
                </div>
                <div class="col-xs-12 contact__email">
                    <p><a class="no-dec" href="mailto:UCLALakeArrowhead@ha.ucla.edu">UCLALakeArrowhead@ha.ucla.edu</a></p>
                </div>
                <div class="col-xs-12 contact__address">
                    <p><a target="_blank" href="https://www.google.com/maps/dir/''/ucla+lake+arrowhead+conference+center/data=!4m5!4m4!1m0!1m2!1m1!1s0x80c357e80a92254b:0xdc8a5a45759372b0?sa=X&ved=0ahUKEwivtI36_9PTAhUlh1QKHQH0AjUQ9RcIlgEwDw">850 Willow Creek Road<br>P.O. Box 160<br>Lake Arrowhead, CA 92352</a></p>
                </div>
            </div>
            <div class="col-md-3 news">
                <!-- news & community -->
                <?php if (is_active_sidebar('footer-column-3'))
                    { dynamic_sidebar('footer-column-3'); }
                ?>
            </div>
            <div class="col-md-3 social">
                <!-- email list & social -->
                <div class="community">
                    <?php if (is_active_sidebar('footer-column-4'))
                    { dynamic_sidebar('footer-column-4'); }
                ?> </div>
                <div class="footer-email">
                    <h4>Join Our Email List</h4>
                    <?php gravity_form( 'Join Our Email List', $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex, $echo = true ); ?>
                </div>

                <h4 class="social-follow">Follow Us</h4>
                <div class="social-buttons">
                <div class="social-buttons-child">
                <a target="_blank" target="_blank" href="https://www.tripadvisor.com/Hotel_Review-g32593-d1380050-Reviews-UCLA_Lake_Arrowhead_Conference_Center-Lake_Arrowhead_California.html"><i class="fa fa-tripadvisor"></i></a>
                <a target="_blank" href="https://www.instagram.com/uclalakearrowhead/"><i class="fa fa-instagram"></i></a>
                <a target="_blank" href="http://www.twitter.com/uclalakearrow"><i class="fa fa-twitter"></i></a>
                <a target="_blank" href="http://www.facebook.com/uclaarrowhead"><i class="fa fa-facebook-f"></i></a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid hhs-footer">
        <div class="col-md-12 hhs-group">
            <h5>The UCLA Hospitality Group</h5>
            <span><a href="http://luskinconferencecenter.ucla.edu">UCLA Meyer &amp; Renee Luskin Conference Center</a></span>
            <span><a href="#">UCLA Lake Arrowhead Conference Center</a></span>
            <span><a href="http://theinn.ucla.edu">The Inn at UCLA</a></span>
            <span><a href="http://conferences.ucla.edu">UCLA Conferences &amp; Catering</a></span> </div>
        <div class="row copy-tos">
            <div class="col-xs-12">
                <span class="copyright">&copy; 2017 Regents of the <a href="http://www.universityofcalifornia.edu">University of California</a></span>
                <span class="terms"><a class="terms" href="http://ucla.edu/terms-of-use">Terms of Use</a></span>
            </div>
        </div>
    </div>
           <div class="sticky-footer hidden-sm hidden-md hidden-lg">
           <div class="row">
           <div class="stick-icons">
            <div class="col-md-6">
                <div class="phone">
                <a href="tel://909 337 2478"><i  class="fa fa-phone" aria-hidden="true"></i>CALL</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="email">
                            <a href="mailto:UCLALakeArrowhead@ha.ucla.edu"><i class="fa fa-envelope-o" aria-hidden="true"></i>MAIL</a>
                </div>
            </div>
            </div>
        </div>
</footer>
