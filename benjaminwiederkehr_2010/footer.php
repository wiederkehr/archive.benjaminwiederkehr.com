</div><!-- .container -->
<div id="footer" class="secondary">
	<div class="container">
		<a href="#" title="Toggle Archive Panel" id="panel_toggle">
			<i class="fas fa-fw fa-caret-right"></i>
			<i class="fas fa-fw fa-caret-down"></i>
			Browse</a>
		<div id="archive_panel">
			<!-- ——————————————————————————————————————————————————————————————————— Search -->
			<div class="span-5 append-1">
				<div class="span-5">
					<h3>Search</h3>
					<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>"><input class="text" type="text" value="To search, type and hit enter" name="s" id="s" onfocus="if (this.value == 'To search, type and hit enter') {this.value = '';}" onblur="if (this.value == '') {this.value = 'To search, type and hit enter';}"/></form>
				</div>
			</div>
			<!-- ——————————————————————————————————————————————————————————————————— Context -->
			<div class="span-6">
				<h3>Browse by context</h3>
				<ul>
					<?php
					wp_list_categories(
						array(
							'exclude'=>'2,3,4',
							'title_li'=>'',
							'hide_empty'=>0,
							'hierarchical'=>0
						)
					)
					?>
				</ul>
			</div>
			<!-- ——————————————————————————————————————————————————————————————————— Date -->
			<div class="span-6">
				<h3>Browse by date</h3>
				<ul>
					<?php
					wp_get_archives(
						array(
							'type'=>'monthly',
							'format'=>'html'
						)
					)
					?>
				</ul>
			</div>
			<!-- ——————————————————————————————————————————————————————————————————— Topic -->
			<div class="span-6 last">
				<h3>Browse by topic</h3>
				<?php wp_tag_cloud('smallest=1&largest=1&unit=em&number=24&format=list&orderby=count&order=ASC&exclude=&include='); ?>
			</div>
		</div><!-- #archive_panel -->
	</div><!-- .container -->
</div><!-- #footer -->
<div id="credits" class="secondary">
	<div class="container">
			<!-- ——————————————————————————————————————————————————————————————————— Acknowledgement -->
		<div class="span-18 last prepend-6">
			<h3>Acknowledgement</h3>
			<p>&copy; <?php print date("Y"); ?> by <a href="<?php echo get_bloginfo('home'); ?>" rel="me" title="Portfolio of Benjamin Wiederkehr">Benjamin Wiederkehr</a>. Built with <a href="http://wordpress.org" title="Official Wordpress Website">Wordpress</a><?php echo "&nbsp;".get_bloginfo('version'); ?> and running smoothly on a <a href="http://hostpoint.ch" title="">Hostpoint</a> Server.</p>
		</div>
	</div><!-- .container -->
</div><!-- #credits -->
<!-- ——————————————————————————————————————————————————————————————————— JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets/js/script.js'; ?>"></script>
	<?php do_action('wp_footer'); ?>
</body>
</html>
