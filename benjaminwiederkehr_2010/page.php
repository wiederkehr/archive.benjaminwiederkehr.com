	<?php get_header(); ?>
	<?php get_sidebar();?>
	<!-- ——————————————————————————————————————————————————————————————————— Content -->
<div id="content" class="span-18 last">
	<div class="span-18 last page">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- ——————————————————————————————————————————————————————————————————— Page -->
		<div class="span-18 last post">
			<div class="span-6 page_title">
				<h2><?php the_title(); ?></h2>
			</div><!-- .column span-6 post-->
			<div class="span-12 last page_content">
				<?php the_content(''); ?>
			</div><!-- .column span-12 last post_content -->
		</div><!-- .column span-18 last -->
		<!-- ——————————————————————————————————————————————————————————————————— Navigation -->
		<?php endwhile; ?>
			<div class="pagination">
				<div class="alignleft"><?php previous_post_link('&larr; %link', '%title', TRUE); ?></div>
				<div class="alignright"><?php next_post_link('%link &rarr;', '%title', TRUE); ?></div>
			</div>
		<?php else: ?>
		<!-- ——————————————————————————————————————————————————————————————————— No Content -->
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div><!-- .column span-18 last -->
</div><!-- .column span-18 last -->
	<!-- ——————————————————————————————————————————————————————————————————— Sidebar & Footer -->
<?php get_footer(); ?>