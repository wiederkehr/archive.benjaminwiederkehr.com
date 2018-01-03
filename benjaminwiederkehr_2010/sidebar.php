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
					'include'=>'2,3,4',
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
					'include'=>'202',
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
			<li><a href="<?php bloginfo('rss2_url'); ?>" title="Follow me via RSS">RSS <i class="fas fa-fw fa-rss"></i></a></li>
			<li><a href="http://twitter.com/wiederkehr" title="Follow me on Twitter">Twitter <i class="fab fa-fw fa-twitter"></i></a></li>
			<li><a href="http://facebook.com/benjamin.wiederkehr" title="Follow me on Facebook">Facebook <i class="fab fa-fw fa-facebook-f"></i></a></li>
			<li><a href="https://instagram.com/wiederkehr" title="Follow me on Instagram">Instagram <i class="fab fa-fw fa-instagram"></i></a></li>
			<li><a href="https://pinterest.com/wiederkehr" title="Follow me on Pinterest">Pinterest <i class="fab fa-fw fa-pinterest-p"></i></a></li>
			<li><a href="http://wiederkehr.tumblr.com" title="Follow me on Tumblr">Tumblr <i class="fab fa-fw fa-tumblr"></i></a></li>
			<li><a href="https://github.com/wiederkehr" title="Follow me on Github">Github <i class="fab fa-fw fa-github-alt"></i></a></li>
		</ul>
	</div>
	<!-- ——————————————————————————————————————————————————————————————————— WORK -->
	<div class="sidebar_title">
		<h3>Work with me</h3>
	</div>
	<div class="sidebar_content">
		<ul class="icons">
			<li><a href="http://interactivethings.com" title="Work with Interactive Things">Interactive Things <i class="fas fa-fw fa-external-link-square-alt"></i></a></li>
		</ul>
	</div>
</div>
