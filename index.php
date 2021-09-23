<?php get_header (); ?>
		<section>
			<?php while(have_posts()) : the_post()?>
				<h2><?php the_titel(); ?></h2>
				<p><?php the_content(); ?></p>
			<?php endwhile; ?>
		</section>
<?php get_footer (); ?>