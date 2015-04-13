<?php include('../includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">

		<div class="grid_9 alpha">
		
			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo; 
					<a href="<?php echo BASEURL;?>/guide/index.php" title="QUID ~ Guide">Guide</a> &raquo; 
					Background Images
				</h1>
				<p class="fontsize_5">
					Use the classes below to distinguish elements on a page with background images. 
				</p>
			</div>

			<h3 class="fontsize_5">background_image_1</h3>
			<div class="padding_2">
				<p>
					Creates a background image that expands to the width and height of the window so the user can not see any blank space.
					Re-size the browser window to demonstrate the effect.
				</p>
				<p>
					The HTML <i>&lt;IMG&gt;</i> tag should be placed above the highest desired parent element.
					View the source of the demo page below with sample content to see how this element should be structured. 
					The demo also has a minimum height to illustrate how the page will vertically scroll over the background image.
				</p>
			</div>
			
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<img class="background_image_1" src="/images/sample.jpg" />';
	
echo convert_code($content);
?>
				</div>
			</div>
			
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">Display</div>
				<a href="<?php echo BASEURL; ?>/demo/background_image.php">View the effect in the demo section here</a>.
			</div>
			
			<div class="margin_bottom_10">&nbsp;</div>
			
		</div>
		
		<div class="grid_3 omega">
			<?php include(BASEPATH . '/includes/sidebar.php'); ?>
		</div>
		<div class="clear"></div>
		
	</div>
</div>

<?php include(BASEPATH . '/includes/footer.php');?>