<!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title('| ', true, 'right'); bloginfo('title'); ?></title>
		<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css" />
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<?php wp_nav_menu(array('theme_location' => 'nav_bar', 'menu_id' => 'navigation')); ?>
			</div>
			<div id="content">