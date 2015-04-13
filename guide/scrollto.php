<?php include('../includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">

		<div class="grid_9 alpha">
		
			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo; 
					<a href="<?php echo BASEURL;?>/guide/index.php" title="QUID ~ Guide">Guide</a> &raquo; 
					Scroll-To Effect
				</h1>
				<p class="fontsize_5">
					Use the code below to create a scroll-to effect to vertically animate the page to line up with the top of a target element.
				</p>
			</div>
			
			<h3 class="fontsize_5">scrollto_trigger</h3>
			<div class="padding_2">
				<p>
					The <i>scrollto_trigger</i> class must be used on the trigger element and will animate the page to move to the top of the target element.  
					The target element can be above or below the trigger element - so the page can animate up or down.
				</p>
			</div>
			
			<h3 class="fontsize_5">{ <i>REL</i> attribute on trigger element + <i>ID</i> on the target element }</h3>
			<div class="padding_2">
				<p>		
					The <i>REL</i> attribute on the trigger element must match the <i>ID</i> on the target element.
				</p>
				<p>
					The target element <i>ID</i> can be anything alpha-numeric and must be unique on the page.  
					For example, only use an <i>ID</i> of <i>example_1</i> once. 
				</p>
				<p>
					Multiple trigger elements can be used with the same <i>REL</i>.
					For example, when using multiple trigger elements that scroll to the top of the page as in a <i>Back to Top</i> link.
				</p>
			</div>
			
			
			<div class="border_2 padding_2">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<h3 id="example_1">Target Element</h3>
<div class="margin_top_2">
	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
		Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	</p>
	
	{ ... }
	
	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
		Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	</p>
	<a href="#" class="scrollto_trigger" rel="example_1">Trigger element (click to scroll)</a>
</div>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<h3 id="example_1">Target element</h3>
					<div class="margin_top_2">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</p>
						<a href="#" class="scrollto_trigger" rel="example_1">Trigger element (click to scroll)</a>
					</div>
				</div>
			</div>
			<div class="margin_bottom_10"></div>
		</div>
		
		<div class="grid_3 omega">
			<?php include(BASEPATH . '/includes/sidebar.php'); ?>
		</div>
		<div class="clear"></div>
		
	</div>
</div>

<?php include(BASEPATH . '/includes/footer.php');?>