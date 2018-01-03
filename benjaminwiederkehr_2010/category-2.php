<!-- ABOUT -->
	<?php get_header(); ?>
	<?php get_sidebar();?>
<!-- ——————————————————————————————————————————————————————————————————— Content -->
<div id="content" class="span-18 last">
<div class="span-18 last page">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<!-- ——————————————————————————————————————————————————————————————————— Post -->
		<div class="span-18 last post">
			<div class="span-6 page_title">
				<h2><?php the_title(); ?></h2>
			</div><!-- span-6 post_title-->
			<div class="span-12 last page_content">
				<?php the_content("", false); ?>
			</div><!-- span-12 last post_content -->
		</div><!-- span-18 last post-->
	<?php endwhile; ?>
	<?php else: ?>
		<!-- ——————————————————————————————————————————————————————————————————— No Content -->
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</div><!-- span-18 last -->
</div><!-- span-18 last -->
<!-- ——————————————————————————————————————————————————————————————————— Sidebar & Footer -->
<?php get_footer(); ?>