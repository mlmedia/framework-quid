<?php include('../includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">

		<div class="grid_9 alpha">
		
			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo; 
					<a href="<?php echo BASEURL;?>/guide/index.php" title="QUID ~ Guide">Guide</a> &raquo; 
					Gradients
				</h1>
				<p class="fontsize_5">
					Use the classes below to distinguish elements on a page with gradients.  These gradients work in conjunction with any background.
				</p>
			</div>
			
			<h3 class="fontsize_5">gradient_0</h3>
			<div class="padding_2">
				<p>
					The <i>gradient_0</i> class adds a vertical gradient that fades light to dark from top to bottom, creating a convex effect. 
					The gradient must be used on a child element of an element with a solid color or image for the effect to be visible.
				</p>
			</div>
			<p class="padding_2 background_2 border_2 margin_bottom_4">
				<b>NOTE:</b>
				This class is more useful when the parent background is a <i>lighter</i> color (e.g. the parent background below is light gray).
			</p>
			
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<div class="background_2 border_2 margin_bottom_2">
	<div class="gradient_0 padding_10"> 

	</div>
</div>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 border_2 margin_bottom_2">
					<div class="gradient_0 padding_10"> 

					</div>
				</div>
			</div>


			<h3 class="fontsize_5">gradient_1</h3>
			<div class="padding_2">
				<p>
					The <i>gradient_1</i> class adds a vertical gradient that fades light to dark from top to bottom, creating a convex effect. 
					The gradient must be used on a child element of an element with a solid color or image for the effect to be visible.
				</p>
			</div>
			<p class="padding_2 background_2 border_2 margin_bottom_4">
				<b>NOTE:</b>
				This class is more useful when the parent background is a <i>darker</i> background color (e.g. the parent background below is black).
			</p>
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<div class="background_1 border_1 margin_bottom_2">
	<div class="gradient_1 padding_10"> 

	</div>
</div>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_1 border_1 margin_bottom_2">
					<div class="gradient_1 padding_10"> 

					</div>
				</div>
			</div>
				
			<h3 class="fontsize_5">gradient_2</h3>
			<div class="padding_2">
				<p>
					The <i>gradient_2</i> class adds a horizontal gradient that fades dark to light from left to right.  
					The gradient must be used on a child element of an element with a solid color or image for the effect to be visible.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<div class="background_1 border_1 margin_bottom_2">
	<div class="gradient_2 padding_10"> 

	</div>
</div>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_1 border_1 margin_bottom_2">
					<div class="gradient_2 padding_10"> 

					</div>
				</div>
			</div>
			
			<h3 class="fontsize_5">gradient_3</h3>
			<div class="padding_2">
				<p>
					The <i>gradient_3</i> class adds a radial gradient that fades light to dark from the inside out.  
					The gradient must be used on a child element of an element with a solid color or image for the effect to be visible.
				</p>
			</div>
			<p class="padding_2 background_2 border_2 margin_bottom_4">
				<b>NOTE:</b>
				Unfortunately, this gradient will not work in Internet Explorer.
				It will default to transparency and therefore display the flat background of the parent element.
				The only option for IE is to use a background image with a radial gradient.
				Background images do not fit into the granular nature of QUID.
			</p>
			
			<div class="border_2 padding_2 margin_bottom_10">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<div class="background_1 border_1 margin_bottom_2">
	<div class="gradient_3 padding_10"> 

	</div>
</div>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_1 border_1 margin_bottom_2">
					<div class="gradient_3 padding_10"> 

					</div>
				</div>
			</div>
			
		</div>
		
		<div class="grid_3 omega">
			<?php include(BASEPATH . '/includes/sidebar.php'); ?>
		</div>
		<div class="clear"></div>
		
	</div>
</div>

<?php include(BASEPATH . '/includes/footer.php');?>