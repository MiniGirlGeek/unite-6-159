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
				<?php
					$menu = is_user_logged_in() ? 'nav_bar_logged_in' : 'nav_bar_logged_out';
					wp_nav_menu(array('theme_location' => $menu, 'menu_id' => 'navigation'));
				?>
			</div>
			<div id="content">