<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<head>
	<link rel="shortcut icon" href="flat-ico.png" type="image/png">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class('index'); ?>>

<?php /*if(ale_get_option('sitelogo')){
    echo "<img src='".ale_get_option('sitelogo')."' />";
}*/ ?>
<?php ale_option('sitelogo'); ?>





	<?php /* -------- New Website -------- */ ?>
	<div class="cap-zone">
		<div class="dark-theme">
			<div class="main-tab-list">
				<div class="mtl-field">
					<ul class="mtl-list">
						<li class="mtl-identify mtl-sitename hidden">Liana</li>
						<li class="mtl-identify mtl-sitelogo hidden"></li>
						<li class="mtl-element-i mtl-default">Home</li>
						<li class="mtl-element-i mtl-unactive">Resume</li>
						<li class="mtl-element-i mtl-unactive">Contacts</li>
						<li class="mtl-element-i mtl-unactive">About</li>
					</ul>
				</div>
			</div>
			<div align="center" class="cap-box">
				<div class="cap-n-line"></div>
				<div align="center" class="cb-padder">
					<div class="first-level-cap"><?php echo ale_get_option('whoose') ?></div>
					<div class="second-level-cap">
						<?php echo ale_get_option('watitle') ?>
					</div>
				</div>
				<div class="cap-n-line"></div>
				<div class="cap-b-line"></div>
			</div>
			<div align="center" class="me-info-field">
				<div class="me-inf-pl">
					<div align="center" class="me-inf-txt">
						<?php echo ale_get_option('totalinfo') ?>
					</div>
				</div>
			</div>
			<div class="ct-links-fields">
				<div class="ctl-place">
					<ul align="center" class="tl-list">
					<center>
						<li class="tl-cap-black">
							<div class="tl-list-cap">SOCIAL PROFILES</div>
						</li>
						<li class="tl-element-i tl-element-fb-black">
							<div class="tl-fb"></div>
						</li>
						<li class="tl-element-i tl-element-tw-black">
							<div class="tl-tw"></div>
						</li>
						<li class="tl-element-i tl-element-gp-black">
							<div class="tl-gp"></div>
						</li>
					</center>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<script>

	jQuery(function($) {
		$(document).ready(function() {
			$(window).on('scroll', function() {

		        if (Math.round($(window).scrollTop()) > 90) {
		        	$('.main-tab-list').addClass('scrolled');
		        	$('.mtl-identify').removeClass('hidden');
		        } 
		        else {
		        	$('.main-tab-list').removeClass('scrolled');
		        	$('.mtl-identify').addClass('hidden');
		        }

		    });
		});
	});
    </script>