	<?php get_header(); ?>
	<?php get_sidebar();?>
<!-- ——————————————————————————————————————————————————————————————————— Content -->
<div id="content" class="span-18 last">
	<?php if(is_month()){ ?>
		<h3 class="ui">Monthly</h3>
	<?php }else{ ?>
		<h3 class="ui"><?php single_cat_title('', TRUE); ?></h3>
	<?php }; ?>
	<div class="span-18 last">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php if (in_category(22) || in_category(34)) continue; ?>
		<!-- ——————————————————————————————————————————————————————————————————— Post -->
			<div class="span-18 last post <?php //getClasses() ?>">
				<div class="span-6 post_title">
					<h2><a href="<?php the_permalink() ?>" title="<?php the_title()?>"><?php the_title(); ?></a></h2>
					<dl>
						<dt>Date</dt><dd><?php the_time('Y-m-d'); ?></dd>
						<dt>Context</dt><dd><?php the_category(' / '); ?></dd>
					</dl>
				</div><!-- span-6 post_title-->
				<div class="span-12 last post_content">
					<?php the_content("→ read on"); ?>
				</div><!-- span-12 last post_content -->
			</div><!-- span-18 last post-->
			<!-- ——————————————————————————————————————————————————————————————————— Navigation -->
			<?php endwhile; ?>
				<div class="pagination span-18 last">
					<div class="alignleft span-6"><?php next_posts_link('&larr; Previous Posts') ?></div>
					<div class="alignright span-6 last"><?php previous_posts_link('Next Posts &rarr;') ?></div>
				</div>
			<?php else: ?>
			<!-- ——————————————————————————————————————————————————————————————————— No Content -->
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div><!-- span-18 last -->
</div><!-- span-18 last -->
<!-- ——————————————————————————————————————————————————————————————————— Sidebar & Footer -->
<?php get_footer(); ?>