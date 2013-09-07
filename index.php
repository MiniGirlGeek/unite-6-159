<?php get_header();

while (have_posts()):
	the_post(); ?>
	<article>
		<div class="date"><?php echo get_the_date(); echo " at " . get_the_time(); ?></div>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php the_content(); ?>
	</article>
<?php endwhile;

get_footer();