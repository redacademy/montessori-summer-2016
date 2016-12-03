<?php
/**
 * The template for displaying the footer.
 *
 * @package Montessori_Theme
 */
?>
       <!-- Footer Section -->
     <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="footer-blocks head-footer-container">
                 <div class="footer-block-item1 ">
            <ul>
                <li>
                <a href="#">Disclaimer</a></li><li >
                <a href="<?php
echo get_page_link(get_page_by_title(about)->ID); ?>">About</a>
                </li>
                <li ><a href="<?php
echo get_page_link(get_page_by_title(contact)->ID); ?>">Contact us</a>
                </li>
                <li>
                <a href="
<?php the_permalink(17); ?>">Get involved</a>
                </li>
                <li>
                  <a href="https://www.facebook.com/pages/Vancouver-Montessori-School/219470428069793?hc_ref=SEARCH">Follow us </a><i class="fa fa-facebook desktop-footer" aria-hidden="true"></i>
                </li>
            </ul>
                </div>
                 <div class="footer-block-item2">
             <p><i class="fa fa-facebook " aria-hidden="true"></i>
             <a href="https://www.facebook.com/pages/Vancouver-Montessori-School/219470428069793?hc_ref=SEARCH">Follow us</a>
            <a href="info@newwestmontessori.ca">info@newwestmontessori.ca</a>
            </p>
                 </div>
                <div class="footer-block-item3">
                <p> &copy 2016 New Westminster Montessri Socity. All right reserved</p>
              </div>
<div class="desktop-add-block">
<ul>
  <li>
    <span>Suite 379, 104-1015 Columbia Street</span>
    <br>
    <span>New Westminster BC, V3M 6V3</span>
  </li>
  <li>
    <a href="info@newwestmontessori.ca">info@newwestmontessori.ca</a>
  </li>
</ul>
</div>
        <!-- site-info -->
            </div><!-- #page -->

</footer><!-- #colophon -->
        <?php
wp_footer(); ?>

    </body>
</html>
