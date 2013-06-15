	<?php get_header(); ?>
	<?php get_sidebar();?>
	<!-- ——————————————————————————————————————————————————————————————————— Content -->
<div id="content" class="span-18 last">
	<h3 class="ui">Details</h3>
	<div class="span-18 last">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- ——————————————————————————————————————————————————————————————————— Post -->
		<div class="span-18 last post">
			<div class="span-6 post_title">
				<h2><a href="<?php print(trackback_url(false)); ?>" rel="trackback" title="Trackback URL for <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<dl>
					<dt>Date</dt><dd><?php the_time('Y-m-d'); ?></dd>
					<dt>Context</dt><dd><?php the_category(' / '); ?></dd>
					<!-- Fetch all Key - value Packages -->
					<?php 
						$meta = get_post_custom();
						$metaKeys = array_keys($meta);
						$metaValues = array_values($meta);
						for ($i = 0; $i < count($metaKeys); $i++){
							if($metaKeys[$i] == 'sociableoff'){continue; }
							if($metaKeys[$i][0] == '_'){continue; }
							echo "<dt>".$metaKeys[$i]."</dt>";
							echo "<dd>".$metaValues[$i][0]."</dd>";
						}
					?>
					<dt>Topics</dt><?php the_tags("<dd>", " / ", "</dd>"); ?>
					<!-- <dt>Trackback</dt><dd><a href="<?php print(trackback_url(false)); ?>" rel="trackback" title="Trackback URL for <?php the_title(); ?>">Link</a></dd> -->
					<?php if(in_category(7) || in_category(8)){ ?>
					<dt>Comments</dt><dd><a href="<?php comments_link(); ?>" title="To the comments"><?php comments_number('Be the first to comment', 'One comment', '% comments', 'number'); ?></a></dd>
					<?php }; ?>
					<!-- <?php //if(in_category(7)){ ?>
					<dt>Share it</dt><dd><?php //echo sociable_html(); ?></dd>
					<?php //}; ?> -->
					<?php if( current_user_can('level_10') ) { ?>
					<dt>Administer</dt><dd><?php edit_post_link('Edit', '', ''); ?></dd>
					<?php }; ?>
				</dl>
				<?php //wp23_related_posts(); ?>
			</div><!-- span-6 post-->
			<div class="span-12 last post_content single">
				<?php the_content(''); ?>
			</div><!-- span-12 last post_content -->
		</div><!-- span-18 last -->
		<!-- ——————————————————————————————————————————————————————————————————— Comments -->
		<?php if(in_category(7) || in_category(8)) comments_template(); ?>
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
	</div><!-- span-18 last -->
</div><!-- span-18 last -->
	<!-- ——————————————————————————————————————————————————————————————————— Sidebar & Footer -->
<?php get_footer(); ?>