<?php include('../includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">

		<div class="grid_9 alpha">
		
			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo; 
					<a href="<?php echo BASEURL;?>/guide/index.php" title="QUID ~ Guide">Guide</a> &raquo; 
					Text
				</h1>
				<p class="fontsize_5">
					The following describes the elements relating to text, including alignment and floats.  
				</p>
			</div>

			<h3 class="fontsize_5">{ default paragraphs }</h3>
			<div class="padding_2">
				<p>
					The <b><i>&lt;P&gt;</i></b> element creates a paragraph with a standard, one-em (1em) margin on the bottom.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<p>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</p>
<p>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</p>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
				</div>
			</div>

			<h3 class="fontsize_5">align_left</h3>
			<div class="padding_2">
				<p>
					Aligns text to the left.  
					This is the default for text in the absence of a class. 
					However, it can be used when a parent class utilizes another alignment.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<p class="align_left">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</p>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<p class="align_left">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
				</div>
			</div>
			
			<h3 class="fontsize_5">align_right</h3>
			<div class="padding_2">
				<p>
					Aligns text to the right.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<p class="align_right">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</p>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<p class="align_right">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
				</div>
			</div>
			
			<h3 class="fontsize_5">align_center</h3>
			<div class="padding_2">
				<p>
					Aligns text to the center.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<p class="align_center">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</p>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<p class="align_center">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
				</div>
			</div>
			
			<h3 class="fontsize_5">align_full</h3>
			<div class="padding_2">
				<p>
					Justifies text to align to the sides of the parent element - as in a newspaper column.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<p class="align_full">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</p>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<p class="align_full">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
				</div>
			</div>

			<h3 class="fontsize_5">float_left</h3>
			<div class="padding_2">
				<p>
					Floats an element to the left of any sibling elements or text.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<p>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
</p>
<div class="float_left">
	<img src="../images/sample.jpg" width="100" height="100" alt="image" />
</div>
<p>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</p>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
					</p>
					<div class="float_left">
						<img src="../images/sample.jpg" width="100" height="100" alt="image" />
					</div>
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
				</div>
			</div>
			
			<h3 class="fontsize_5">float_right</h3>
			<div class="padding_2">
				<p>
					Floats an element to the right of any sibling elements or text.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<p>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
</p>
<div class="float_right">
	<img src="../images/sample.jpg" width="100" height="100" alt="image" />
</div>
<p>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</p>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
					</p>
					<div class="float_right">
						<img src="../images/sample.jpg" width="100" height="100" alt="image" />
					</div>
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
				</div>
			</div>

			<h3 class="fontsize_5">float_center</h3>
			<div class="padding_2">
				<p>
					Although technically not a float, this class centers an element to the middle of the parent element and clears sibling elements and text around it. 
				</p>
			</div>
			<p class="padding_2 background_2 border_2 margin_bottom_4">
				<b>NOTE:</b>
				The child element inside must have a set width in order to center horizontally (e.g. the image in the example below is a 100-pixel square).
			</p>
			
			<div class="border_2 padding_2 margin_bottom_10">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<p>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
</p>
<div class="float_center">
	<img src="../images/sample.jpg" width="100" height="100" />
</div>
<p>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</p>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
					</p>
					<div class="float_center">
						<img src="../images/sample.jpg" width="100" height="100" />
					</div>
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
				</div>
			</div>
			<div class="margin_10"></div>
		</div>
		
		<div class="grid_3 omega">
			<?php include(BASEPATH . '/includes/sidebar.php'); ?>
		</div>
		<div class="clear"></div>
		
	</div>
</div>

<?php include(BASEPATH . '/includes/footer.php');?>