<?php
/**
 * The template for displaying the footer.
 *
 * @package Montessori_Theme
 */
?>
       <!-- Footer Section -->
     <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="footer-blocks ">
                 <div class="footer-block-item1 ">
            <ul>
                <li>
                <a href="#">Disclaimer</a></li><li class="boarder1" >
                <a href="<?php
echo get_page_link(get_page_by_title(about)->ID); ?>">About</a>
                </li>
                <li class="boarder2"><a href="<?php
echo get_page_link(get_page_by_title(contact)->ID); ?>">Contact us</a>
                </li>
                <li>
                <a href="<?php
echo get_page_link(get_page_by_title(get - involved)->ID); ?>">Get involved</a>
                </li>
            </ul>
                </div>
                 <div class="footer-block-item2">
             <p><i class="fa fa-facebook" aria-hidden="true"></i>
             <a href="">Follow us </a>
            <a href="info@newwestmontessori.ca">info@newwestmontessori.ca</a>
            </p>
                 </div>
                <div class="footer-block-item3">
                <p> &copy 2016 New Westminster Montessri Socity. All right reserved</p>
                </div><!-- .site-info -->
            </div>
        </div><!-- #page -->
</footer><!-- #colophon -->
        <?php
wp_footer(); ?>

    </body>
</html>
