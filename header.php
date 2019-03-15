<?php
/**
 * The template for displaying the header.
 *
 * Contains the opening of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
    <meta content="True" name="HandheldFriendly" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="<?php echo esc_url( get_template_directory_uri() ) ?>/images/favicon.ico" rel="shortcut icon">
<?php 	if(strpos( $_SERVER['HTTP_HOST'], 'nkd.co.uk') !== false){ ?>
<!-- start google analytics -->
<script>
(function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-64354792-1', 'auto');
ga('send', 'pageview');
</script>
<!-- end google analytics -->
<?php	} ?>

<?php wp_head(); ?>

</head>

<body data-width="lg" data-check="" <?php body_class(); ?>>

<!--NKD TEMPORARY TRACKING CODE ADDED 20161206-->
<script type="text/javascript" src="http://www.lansrv090.com/js/90085.js" ></script>
<noscript><img alt="" src="http://www.lansrv090.com/90085.png" style="display:none;" /></noscript>
<!--END NKD TEMPORARY TRACKING CODE-->

<header class="masthead">
    <div class="container">
        <h1 class="logo"><a href="/" title="NKD"><i class="icon-nkd"></i><span class="text-hide">NKD</span></a></h1>
        <nav class="top">
	        <?php 

				$nav = wp_nav_menu( array(
					'container' => false,
					'theme_location'  => 'primary',
					'items_wrap' => '<ul class="desktop nav pull-right hidden-xs hidden-sm">%3$s<li><a href="/contact-us/" title="connect" class="btn-cta">Connect</a></li></ul>',
					'echo'            => 0,
				 ) );

				$nav = str_replace("\n", "", $nav);
				$nav = str_replace("\r", "", $nav);
				echo $nav;
			?>
            <ul id="menu-collapse" class="nav pull-right no-padding hidden-md hidden-lg">
                <li><a href="#footer-nav"><i class="icon-navicon"></i><span class="text-hide">Show Menu</span></a></li>
            </ul>
        </nav>
    </div>
    <!-- start mobile menu -->
    <nav class="mobile hidden-md hidden-lg">
	<?php 

      $mobilenav = array(
        'container' => false,
        'theme_location'  => 'primary',
        'items_wrap' => '<ul class="nav collapse">%3$s<li><a href="/contact-us/" title="connect" class="btn-cta">Connect</a></li></ul>',
      );

      wp_nav_menu( $mobilenav );

    ?>
    </nav>
    <!-- end mobile menu -->
</header>

    <div id="skrollr-body" class="nojs">
        <div class="main">