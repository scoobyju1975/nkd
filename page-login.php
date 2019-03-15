<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
    <meta content="True" name="HandheldFriendly" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="<?php echo esc_url( get_template_directory_uri() ) ?>/images/favicon.ico" rel="shortcut icon">
    
    <?php wp_head(); ?>

<!--[if lte IE 8]>
	<link href="http://nkd.co.uk/css/bootstrap-ie7.css" rel="stylesheet">
<![endif]-->

</head>

<body data-width="lg" data-check="" <?php body_class(); ?>>

  <div id="skrollr-body">
        <div class="main">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<?php
	
	$login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;
	
	if ( $login === "failed" ) {
    echo '<p class="login-msg"><strong>ERROR:</strong> Invalid username and/or password.</p>';
} elseif ( $login === "empty" ) {
    echo '<p class="login-msg"><strong>ERROR:</strong> Username and/or Password is empty.</p>';
} elseif ( $login === "false" ) {
    echo '<p class="login-msg"><strong>ERROR:</strong> You are logged out.</p>';
}
?>

<div class="login-branding">
     <h1 class="logo"><i class="icon-nkd" style="color: black;"></i><span class="text-hide">NKD</span></h1>
    <p class="login-desc">
       Ready to unleash the power of people-fuelled brands?
    </p>
</div>
<div class="login-form">
<?php
$args = array(
    'redirect' => home_url(), 
    'id_username' => 'user',
    'id_password' => 'pass',
   ) 
;?>
<?php wp_login_form( $args ); ?>
</div>

<?php wp_footer(); ?>
<script type="text/javascript">
if (typeof jQuery !== "undefined") {
    NKD.init();
    $("div").removeClass("nojs"); // Need to pull this into main.js
}
</script>

		</main>
	</div>
	
	        </div>
  </div>

</body>
</html>