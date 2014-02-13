<div id="sidebar" class="span-5 secondary">
	<!-- ——————————————————————————————————————————————————————————————————— NAVIGATION -->
	<div class="sidebar_title">
		<h3>Navigation</h3>
	</div>
	<div class="sidebar_content">
		<ul id="navigation">
			<?php 
			wp_list_categories(
				array(
					'include'=>'22,34,73', 
					'orderby'=>'id',
					'order'=>'ASC', 
					'title_li'=>'',
					'hide_empty'=>0
				)
			)
			?>
			<?php 
			wp_list_pages(
				array(
					'include'=>'73,202, 845', 
					'sort_column'=>'menu_order',
					'title_li'=>''
				)
			)
			?>
		</ul>
	</div>
	<!-- ——————————————————————————————————————————————————————————————————— FOLLOW -->
	<div class="sidebar_title">
		<h3>Follow Me</h3>
	</div>
	<div class="sidebar_content">
		<ul class="icons">
			<li><a href="http://feeds2.feedburner.com/artillery/Portfolio" title="Follow me via RSS">RSS <i class="icon-rss"></i></a></li>
			<li><a href="http://twitter.com/wiederkehr" title="Follow me on Twitter">Twitter <i class="icon-twitter"></i></a></li>
			<li><a href="http://facebook.com/benjamin.wiederkehr" title="Follow me on Facebook">Facebook <i class="icon-facebook"></i></a></li>
			<li><a href="http://wiederkehr.tumblr.com" title="Follow me on Tumblr">Tumblr <i class="icon-tumblr"></i></a></li>
			<li><a href="https://pinterest.com/wiederkehr" title="Follow me on Pinterest">Pinterest <i class="icon-pinterest"></i></a></li>
		</ul>
	</div>
	<!-- ——————————————————————————————————————————————————————————————————— WORK -->
	<div class="sidebar_title">
		<h3>Work with me</h3>
	</div>
	<div class="sidebar_content">
		<ul class="icons">
			<li><a href="http://interactivethings.com" title="Work with Interactive Things">Interactive Things <i class="icon-cross"></i></a></li>
			<li><a href="http://datavisualization.ch" title="Work with Datavisualization.ch">Datavisualization.ch <i class="icon-plus"></i></a></li>
		</ul>
	</div>
	<!-- ——————————————————————————————————————————————————————————————————— NOTES -->
	<!-- <?php if(is_home()){ ?>
	<div class="sidebar_title">
		<h3>Notes</h3>
	</div>
	<div class="sidebar_content">
		<?php
			//rewind_posts();
			//$tb_query = new WP_Query('cat=20&showposts=1');
			//if ($tb_query->have_posts()) : while ($tb_query->have_posts()) : $tb_query->the_post();
			?>
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title()?>"><?php the_date(); ?></a></h2>
			<?php
			//echo the_content('more…');
		//endwhile;
		//endif;
		?>
	</div>
	<?php }; ?> -->
</div>