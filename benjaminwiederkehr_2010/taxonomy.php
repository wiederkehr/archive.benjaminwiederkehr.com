	<?php
/*
Template Name: Taxonomy
*/
	?>
	<?php get_header(); ?>
	<?php get_sidebar();?>
<!-- ——————————————————————————————————————————————————————————————————— Content -->
<div id="content" class="span-18 last">
<div class="span-18 last taxonomy">
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
		<!-- ——————————————————————————————————————————————————————————————————— Taxonomy -->
		<div class="span-18 last post grid"
			<div class="span-18 last post_content">
				<?php
				$tags = get_tags();
				$counter = 1;
				$max = 0;
				foreach ($tags as $tag) {
					if($tag->count >$max){
						$max = $tag->count;
					};
				};
				foreach ($tags as $tag) {
					$percentage = 100/$max*$tag->count;
					$string = '';
					if($counter == 4){
						$string .= '<span class="tag span-4 last">';
						$counter = 1;
					}else{
						$string .= '<span class="tag span-4">';
						$counter += 1;
					}
					$string .= '<span class="count" style="width:'.$percentage.'%">';
					$string .= $percentage.'</span>';
					$string .= '<a href="/?tag='.$tag->name.'" title="Content about '.$tag->name.' ('.$tag->count.')">';
					$string .= $tag->name;
					$string .= '</a>';
					$string .= '</span> ';
					print($string);
				}
				?>
			</div><!-- span-18 last post_content -->
			<br class="clearer"/>
		</div><!-- span-18 last post-->
		<!-- ——————————————————————————————————————————————————————————————————— No Content -->
</div><!-- span-18 last -->
</div><!-- span-18 last -->
<!-- ——————————————————————————————————————————————————————————————————— Sidebar & Footer -->
<?php get_footer(); ?>