	<?php
/*
Template Name: Elsewhere
*/
	?>
	<?php get_header(); ?>
	<?php get_sidebar();?>
<!-- ——————————————————————————————————————————————————————————————————— Content -->
<div id="content" class="span-18 last">
<div class="span-18 last page elsewhere">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<!-- ——————————————————————————————————————————————————————————————————— Page -->
		<div class="span-18 last post">
			<div class="span-6 page_title">
				<h2><?php the_title(); ?></h2>
			</div><!-- span-6 post_title-->
			<div class="span-12 last post_content">
				<?php the_content("", false); ?>
			</div><!-- span-12 last post_content -->
		</div><!-- span-18 last post-->
		<?php endwhile; ?>
		<?php else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
		<!-- ——————————————————————————————————————————————————————————————————— Elsewhere -->
		<div class="span-18 last">
			<div>
				<?php lifestream(); ?>
			</div>
		</div>
</div><!-- span-18 last -->
</div><!-- span-18 last -->
<!-- ——————————————————————————————————————————————————————————————————— Sidebar & Footer -->
<?php get_footer(); ?>