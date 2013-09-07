<?php

if (is_user_logged_in()) {
	get_template_part('index');
} else {
	get_template_part('404');
}
