<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
            <!-- start newsletter modal -->                
		    <div class="modal fade subscribe" id="subscribe-modal" tabindex="-1" role="dialog" aria-labelledby="newsletter">
		        <div class="modal-dialog" role="document">
		            <div class="modal-content">
		                <div class="modal-header">
		                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                    <h2 class="modal-title" id="modal-label">Newsletter</h2>
		                </div>
		                <div class="modal-body">
			                <div class="form-group">

								<?php
									$page = get_page_by_name('newsletter');
									if (!empty($page)) {
									// page exists and is in $page
									$page_slug ='newsletter';
									$page_data = get_page_by_path($page_slug);
									$page_id = $page_data->ID;
									echo apply_filters('the_content', $page_data->post_content);
									} else {
									// page does not exist
									printf( '<p>Please create a page and name it "Newsletter" and embedded the appropriate form. Ensure that you have the Gravity Forms plug-in installed before creating the page.</p>', esc_url( get_permalink() ), esc_html( get_the_title() ) );
									}
								?>
			                </div>
		                    
		                </div>
		            </div>
		        </div>
		    </div>
			<!-- end newsletter modal -->
            
        <!-- end page -->
        </div>

<footer>
    <section class="bg-blue text-lightest link-primary">
        <div class="container contact-address">
            <div class="row">
                <div class="content text-large">
                    <h2 class="text-pink">Address</h2>
                    <address>
                        <p><strong>NKD</strong>
                            <br> 69 Turnmill Street - 1st floor
                            <br> London EC1M 5RR,
                            <br> United Kingdom</p>
                    </address>
                    <p>T: +44 (0)203 4700 230</p>
                    <p><a href="mailto:<?php echo antispambot( 'hello@nkd.co.uk' ); ?>"><?php echo antispambot( 'hello@nkd.co.uk' ); ?></a></p>
                </div>
            </div>
        </div>
    </section>
    <div id="footer-nav" class="bg-blue-dark  text-light link-white">
        <div class="container">
            <div class="mod footer-sitemap padding">
                <div class="row">
                    <nav class="sitemap-menu col-md-12">

<?php 

      $footernav = array(
        'container' => false,
        'theme_location'  => 'primary',
        'items_wrap' => '<ul class="nav desktop">%3$s
        <li><a href="/contact-us/" title="connect" class="btn-cta">Connect</a></li></ul>',
      );

      wp_nav_menu( $footernav );

    ?>
                    </nav>
                </div>
                <div class="row">
                    <nav class="sitemap-social col-md-12">
                        <ul>
                            <li><a href="https://twitter.com/helloNKD" target="_blank" title="Twitter"><i class="icon-twitter"></i><span class="text-hide">Twitter</span></a></li>
                            <li><a href="https://www.linkedin.com/company/nkd-learning" target="_blank" title="LinkedIn"><i class="icon-linkedin"></i><span class="text-hide">LinkedIn</span></a></li>
                            <li><a href="http://vimeo.com/user10419818" target="_blank" title="Vimeo"><i class="icon-vimeo"></i><span class="text-hide">Vimeo</span></a></li>
                            <li><a href="https://www.instagram.com/hellonkd/" target="_blank" title="Instagram"><i class="icon-instagram"></i><span class="text-hide">Instagram</span></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="row">
                    <div class="conditions link-gray col pull-center col-sm-12 col-xs-12">
                        <p class="text-gray-light no-margin"><a class="terms text-gray-light" href="/cookies-privacy" title="Cookies and privacy policy">Cookies &#38; Privacy</a><span class="divider">|</span><span>NKD Learning Ltd, 2017. All rights reserved.</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>

<?php wp_footer(); ?>
<script type="text/javascript">
if (typeof jQuery !== "undefined") {
    NKD.init();
    $("div").removeClass("nojs"); // Need to pull this into main.js
    $("#newsletter").attr("href", "");
}


</script>

</body>
</html>