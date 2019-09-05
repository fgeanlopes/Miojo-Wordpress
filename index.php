<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );




<?php

$link_novo   = "http://localhost/dalben";
$email_admin = "gean@macfor.com.br";


$result1 = "UPDATE wp_options SET option_value = '$link_novo' WHERE option_name = 'home' OR option_name = 'siteurl'";
$resultMail = "UPDATE wp_options SET option_value = '$email_admin' WHERE option_name = 'admin_email'";

?>

<b>
	REALIZE UM UPDATE POR VEZ
	<br><br><br>
	-------------
	<br><br><br>
</b>


<br><br>
<?php echo $result1; ?>
<br><br>
-----------------------------

<br><br>
<?php echo $resultMail; ?>
<br><br>
-----------------------------
