<?php include('../includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">
		
		<div class="grid_9 alpha">
		
			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo; 
					<a href="<?php echo BASEURL;?>/guide/index.php" title="QUID ~ Guide">Guide</a> &raquo; 
					Borders
				</h1>
				<p class="fontsize_5">
					Use the classes below to distinguish elements on a page with borders.  
					Use the CUSTOM.CSS stylesheet to add any different color border.
				</p>
			</div>
			
			<h3 class="fontsize_5">border_0</h3>
			<div class="padding_2">
				<p>
					This class creates a one-pixel, solid, white border.  This border can only be seen with a dark parent background.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<div class="border_0 padding_3">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</div>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_1 padding_1">
					<div class="border_0 padding_3">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.				
					</div>
				</div>
				<p class="margin_top_2 background_2 padding_1 border_2">
					<strong>NOTE:</strong>
					A black parent background is used above for illustration only.
				</p>
			</div>
			
			<h3 class="fontsize_5">border_1</h3>
			<div class="padding_2">
				<p>
					This class creates a one-pixel, solid, black border.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<div class="border_1 padding_3">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
</div>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="border_1 padding_3">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				</div>
			</div>
			
			<h3 class="fontsize_5">border_2</h3>
			<div class="padding_2">
				<p>
					This class creates a one-pixel, solid, light gray border.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<div class="border_2 padding_3">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
</div>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="border_2 padding_3">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				</div>
			</div>
			
			<h3 class="fontsize_5">border_top_XX</h3>
			<div class="padding_2">
				<p>
					Top border in the respective color.  
					The _XX values above correspond to the same respective color as in the basic border classes above. 
					Black (i.e. border_1) is used in the example below. 
				</p>
			</div>
			
			<h3 class="fontsize_5">border_bottom_XX</h3>
			<div class="padding_2">
				<p>
					Bottom border in the respective color.
				</p>
			</div>
			
			<h3 class="fontsize_5">border_right_XX</h3>
			<div class="padding_2">
				<p>
					Right border in the respective color.
				</p>
			</div>

			
			<h3 class="fontsize_5">border_left_XX</h3>
			<div class="padding_2">
				<p>
					Left border in the respective color.
				</p>
			</div>

			
			<h3 class="fontsize_5">rounded_1</h3>
			<div class="padding_2">
				<p>
					Borders rounded to a radius of 0.5 em.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<div class="border_1 rounded_1 padding_3">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
</div>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="border_1 rounded_1 padding_3">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				</div>
			</div>
			
			<h3 class="fontsize_5">rounded_2</h3>
			<div class="padding_2">
				<p>
					Borders rounded to a radius of 1.0 em.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<div class="border_1 rounded_2 padding_3">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
</div>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="border_1 rounded_2 padding_3">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				</div>
			</div>
			
			<h3 class="fontsize_5">rounded_3</h3>
			<div class="padding_2">
				<p>
					Borders rounded to a radius of 1.5 em.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<div class="border_1 rounded_3 padding_3">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
</div>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="border_1 rounded_3 padding_3">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				</div>
			</div>
			
			<h3 class="fontsize_5">bordersize_1</h3>
			<div class="padding_2">
				<p>
					Thick three-pixel border.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<div class="border_1 bordersize_1 padding_3">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
</div>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="border_1 bordersize_1 padding_3">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				</div>
			</div>
			
			<h3 class="fontsize_5">bordersize_2</h3>
			<div class="padding_2">
				<p>
					Thicker five-pixel border.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<div class="border_1 bordersize_2 padding_3">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
</div>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="border_1 bordersize_2 padding_3">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				</div>
			</div>

	
			<h3 class="fontsize_5">bordersize_3</h3>
			<div class="padding_2">
				<p>
					Thickest ten-pixel border.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<div class="border_1 bordersize_3 padding_3">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
</div>';
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="border_1 bordersize_3 padding_3">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
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