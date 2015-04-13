<?php include('../includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">
	
		<div class="grid_9 alpha">
			
			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo; 
					<a href="<?php echo BASEURL;?>/guide/index.php" title="QUID ~ Guide">Guide</a> &raquo; 
					Fonts
				</h1>
				<p class="fontsize_5">
					Use the classes below to set font families, styles, and sizes for your site. 
				</p>
			</div>
			
			<h3 class="fontsize_6">{ font families }</h3>
			<div class="padding_2">
				<p>
					The font family classes below include the most common web-safe font families.  
					To use other fonts, <a href="#" class="scrollto_trigger" rel="custom_fonts">skip to the section below on using Google Fonts</a>. 
				</p>
			</div>
			
			<h3 class="fontsize_5">font_XX</h3>
			<div class="padding_2">
				<p>
					The classes below correspond to the respective font families.  
				</p>
			</div>
			
			<div class="font_2 margin_bottom_1">HTML (change <i>font_XX</i> with the classes below)</div>
<?php
$content = '<span class="font_XX">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>';
echo convert_code($content);
?>
			<h3 class="fontsize_5">font_1</h3>
			<div class="padding_2">
				<p>
					Arial / Helvetica font family.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_3">
				<span class="font_1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			</div>
			
			<h3 class="fontsize_5">font_2</h3>
			<div class="padding_2">
				<p>
					Courier New font family.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_3">
				<span class="font_2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			</div>
			
			<h3 class="fontsize_5">font_3</h3>
			<div class="padding_2">
				<p>
					Georgia font family.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_3">
				<span class="font_3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			</div>
			
			<h3 class="fontsize_5">font_4</h3>
			<div class="padding_2">
				<p>
					Lucida Sans / Lucida Grande font family.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_3">
				<span class="font_4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			</div>
			
			<h3 class="fontsize_5">font_5</h3>
			<div class="padding_2">
				<p>
					Tahoma / Geneva font family.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_3">
				<span class="font_5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			</div>
			
			<h3 class="fontsize_5">font_6</h3>
			<div class="padding_2">
				<p>
					Times font family.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_3">
				<span class="font_6">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			</div>
			
			<h3 class="fontsize_5">font_7</h3>
			<div class="padding_2">
				<p>
					Verdana / Geneva font family.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_3">
				<span class="font_7">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			</div>
			
			<h3 class="fontsize_5">font_8</h3>
			<div class="padding_2">
				<p>
					Comic Sans font family.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_3">
				<span class="font_8">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			</div>
			
			<h3 class="fontsize_5">font_9</h3>
			<div class="padding_2">
				<p>
					Palatino / Book Antiqua font family.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_3">
				<span class="font_9">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			</div>
			
			<h3 class="fontsize_5">font_10</h3>
			<div class="padding_2">
				<p>
					Trebuchet MS font family.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_6">
				<span class="font_10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			</div>
			
			<div class="margin_bottom_10"></div>
			
			<h3 class="fontsize_6">{ font styles }</h3>
			<div class="padding_2">
				<p>
					Use standard HTML tags to create bold, underline, and italic text. 
				</p>
			</div>
			
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = 'Use standard HTML tags to create <b>bold</b>, <u>underline</u>, and <i>italic</i> text.';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					Use standard HTML tags to create <b>bold</b>, <u>underline</u>, and <i>italic</i> text.
				</div>
			</div>
			
			<div class="margin_bottom_10"></div>
			
			<h3 class="fontsize_6">{ font sizes }</h3>
			<div class="padding_2">
				<p>
					Use the classes below to set font sizes for individual elements of your site.
				</p>
			</div>
			
			<h3 class="fontsize_5">fontsize_XX</h3>
			<div class="padding_2">
				<p>
					The classes below change the size of an element's font.
				</p>
			</div>
			
			<div class="font_2 margin_bottom_1">HTML (change <i>fontsize_XX</i> with the classes below)</div>
<?php
$content = '<span class="fontsize_XX">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>';

echo convert_code($content);
?>
			<h3 class="fontsize_5">fontsize_1</h3>
			<div class="padding_2">
				<p>
					Eight-pixel (8px) font size.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_3">
				<span class="fontsize_1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			</div>
			
			<h3 class="fontsize_5">fontsize_2</h3>
			<div class="padding_2">
				<p>
					Ten-pixel (10px) font size.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_3">
				<span class="fontsize_2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			</div>
			
			<h3 class="fontsize_5">fontsize_3</h3>
			<div class="padding_2">
				<p>
					Twelve-pixel (12px) font size.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_3">
				<span class="fontsize_3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			</div>
			
			<h3 class="fontsize_5">fontsize_4</h3>
			<div class="padding_2">
				<p>
					Fourteen-pixel (14px) font size.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_3">
				<span class="fontsize_4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			</div>
			
			<h3 class="fontsize_5">fontsize_5</h3>
			<div class="padding_2">
				<p>
					Sixteen-pixel (16px) font size.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_3">
				<span class="fontsize_5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			</div>
			
			<h3 class="fontsize_5">fontsize_6</h3>
			<div class="padding_2">
				<p>
					Eighteen-pixel (18px) font size.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_3">
				<span class="fontsize_6">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			</div>
			
			<h3 class="fontsize_5">fontsize_7</h3>
			<div class="padding_2">
				<p>
					Twenty-four-pixel (24px) font size.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_3">
				<span class="fontsize_7">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			</div>
			
			<h3 class="fontsize_5">fontsize_8</h3>
			<div class="padding_2">
				<p>
					Thirty-six-pixel (36px) font size.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_3">
				<span class="fontsize_8">Lorem ipsum dolor sit amet, consect ...</span>
			</div>
			
			<h3 class="fontsize_5">fontsize_9</h3>
			<div class="padding_2">
				<p>
					Fourty-eight-pixel (48px) font size.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_3">
				<span class="fontsize_9">Lorem ipsum dolor sit ...</span>
			</div>
			
			<h3 class="fontsize_5">fontsize_10</h3>
			<div class="padding_2">
				<p>
					Seventy-two-pixel (72px) font size.
				</p>
			</div>
			<div class="background_2 padding_2 margin_bottom_6">
				<span class="fontsize_10">Lorem ipsum dolor</span>
			</div>
			
			<div class="margin_bottom_10"></div>
			
			<h3 class="fontsize_7" id="custom_fonts">{ custom fonts using Google Web Fonts }</h3>
			<div class="padding_2">
				<p>
					Custom fonts have been historically tricky for web developers.  
					<a href="http://cufon.shoqolate.com/generate/" target="_blank" title="Cufon">Cufon, <a href="https://typekit.com/fonts" target="_blank" title="Typekit">Typekit</a>, 
					and <a href="http://www.fontsquirrel.com/fontface/generator" target="_blank" title="@font-face kits from FontSquirrel">@font-face CSS declarations</a> work, 
					but have some limitations, and are not ideal for QUID standardization.  
					<a href="http://www.google.com/webfonts" title="Google Web Fonts" target="_blank">Google Web Fonts</a>, on the other hand, works perfectly with the QUID kit.  
					It does not require JavaScript and does not require downloading font files and setting custom CSS properties on individual elements. 
				</p>
			</div>
			
			<h3 class="fontsize_6">{ how to use }</h3>
			<div class="padding_2">
				<p>
					Simply <a href="http://www.google.com/webfonts" title="Google Web Fonts" target="_blank">choose a font</a>, click the "Quick-use" link, and follow the instructions.  
					Use the example below as a guide, if necessary.
				</p>
			</div>
			
			<div class="font_2 margin_bottom_1">Example using the Oleo Script font</div>
			<div class="background_2 border_2 margin_bottom_6">
			
				<div class="gradient_0 padding_3">
				
					<ol>
						<li class="margin_bottom_2">
							Add the following code in the <b><i>&lt;HEAD&gt;</i></b> element of your page:<br /><br />
	<?php
	$code = '<link href="http://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet" type="text/css">
	<style type="text/css">
	.font_custom { 
		font-family:font-family: "Oleo Script", cursive;
	}
	</style>';
	echo convert_code($code);
	?>
						</li>
						<li>
							Add the "font_custom" class to an element you would like to use that font:<br /><br />
	<?php
	$code = '<div class="font_custom fontsize_8">
		The quick brown fox jumps over the lazy dog.
	</div>';
	echo convert_code($code);
	?>
							Displays as...<br /><br />
							<p class="font_custom fontsize_8">
								The quick brown fox jumps over the lazy dog.
							</p>
						</li>
					</ol>
				</div>
			</div>
			
			<div class="margin_bottom_10"></div>
			
		</div>
		
		<div class="grid_3 omega">
			<?php include(BASEPATH . '/includes/sidebar.php'); ?>
		</div>

	</div>
</div>

<?php include(BASEPATH . '/includes/footer.php');?>