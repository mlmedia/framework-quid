<?php include('../includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">

		<div class="grid_9 alpha">
		
			<div class="border_bottom_2 margin_bottom_3">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo; 
					Guide
				</h1>
				<p class="fontsize_5">
					This page gives a quick overview of the Guide to the QUID elements and classes. 
				</p>
			</div>
			
			<h2 class="fontsize_7 margin_bottom_2">{ how to use this guide }</h2>
			<div class="background_2 border_2 margin_bottom_6">
				<div class="padding_2 gradient_0">
					<p>
						The Guide to QUID is broken into three main sections: 
						(1) basic HTML and structure classes, 
						(2) style elements such as backgrounds, borders, and fonts, and 
						(3) JavaScript elements that add client-side effects such as slides, lightboxes, and scroll-to functions.
						This is the recommended order to follow when building a site.
					</p>
				</div>
			</div>
			
			<h3 class="fontsize_6 margin_bottom_1" title="Basic HTML and structure">{ basic HTML and structure }</h3>
			<div class="padding_2">
				<ul class="list_1">
					<li class="margin_bottom_1"><a href="<?php echo BASEURL;?>/guide/structure.php" title="QUID ~ Structure">Structure</a> - Horizontal and vertical structure elements.  This section should be used first to create a skeleton frame for a web page.</li>
					<li class="margin_bottom_1"><a href="<?php echo BASEURL;?>/guide/headings.php" title="QUID ~ Headings">Headings</a> - Heading elements - H1, H2, H3, etc.</li>
					<li class="margin_bottom_1"><a href="<?php echo BASEURL;?>/guide/text.php" title="QUID ~ Text">Text</a> - Paragraphs, basic text alignment and floating elements.</li>
					<li class="margin_bottom_1"><a href="<?php echo BASEURL;?>/guide/links.php" title="QUID ~ Links">Links</a> - Link (anchor) elements.</li>
					<li class="margin_bottom_1"><a href="<?php echo BASEURL;?>/guide/lists.php" title="QUID ~ Lists">Lists</a> - Basic HTML ordered and unordered list elements - OL, UL, LI, etc.</li>
					<li class="margin_bottom_1"><a href="<?php echo BASEURL;?>/guide/tables.php" title="QUID ~ Tables">Tables</a> - Basic HTML tables and table elements.</li>
					<li class="margin_bottom_1"><a href="<?php echo BASEURL;?>/guide/forms.php" title="QUID ~ Forms">Forms</a> - Input fields, text areas, dropdown select elements, radio buttons, checkboxes, and other form elements.</li>
					<li class="margin_bottom_1"><a href="<?php echo BASEURL;?>/guide/buttons.php" title="QUID ~ Buttons">Buttons</a> - Image-free HTML buttons, including submit inputs and anchor buttons.</li>
				</ul>
			</div>
			
			<h3 class="fontsize_6 margin_bottom_1" title="Style">{ style }</h3>
			<div class="padding_2">
				<ul class="list_1">
					<li class="margin_bottom_1"><a href="<?php echo BASEURL;?>/guide/backgrounds.php" title="QUID ~ Backgrounds">Backgrounds</a> - Basic backgrounds.</li>
					<li class="margin_bottom_1"><a href="<?php echo BASEURL;?>/guide/background_images.php" title="QUID ~ Background Images">Background Images</a> - Background images.</li>
					<li class="margin_bottom_1"><a href="<?php echo BASEURL;?>/guide/gradients.php" title="QUID ~ Gradients">Gradients</a> - Gradients on background elements.</li>
					<li class="margin_bottom_1"><a href="<?php echo BASEURL;?>/guide/borders.php" title="QUID ~ Borders">Borders</a> - Borders and shadows.</li>
					<li class="margin_bottom_1"><a href="<?php echo BASEURL;?>/guide/fonts.php" title="QUID ~ Fonts">Fonts</a> - Font families, sizes and styles.</li>
				</ul>
			</div>
			
			<h3 class="fontsize_6 margin_bottom_1" title="JavaScript">{ javascript }</h3>
			<div class="padding_2 margin_bottom_4">
				<ul class="list_1">
					<li class="margin_bottom_1"><a href="<?php echo BASEURL;?>/guide/dynamic_menu.php" title="QUID ~ Dynamic Menu">Dynamic Menu</a> - Dynamic jQuery horizontal menu with sliding drawers.</li>
					<li class="margin_bottom_1"><a href="<?php echo BASEURL;?>/guide/showhide.php" title="QUID ~ Show/Hide Effect">Show/Hide Effect</a> - The effect to show and hide an element without re-loading the page.</li>
					<li class="margin_bottom_1"><a href="<?php echo BASEURL;?>/guide/scrollto.php" title="QUID ~ Scroll-To">Scroll-To</a> - The effect to smooth scroll from one part of a page to another.</li>
					<li class="margin_bottom_1"><a href="<?php echo BASEURL;?>/guide/lightbox.php" title="QUID ~ Lightbox">Lightbox</a> - The effect to create a lightbox overlay on a page.</li>
				</ul>
			</div>
			
			<h3 class="fontsize_6 margin_bottom_1" title="Commonalities of QUID">{ commonalities }</h3>
			<div class="padding_2">
				<p>
					The following describes common aspects of the QUID system that help you understand, predict, and code.
				</p>
			</div>
			<div class="background_2 border_2 margin_bottom_6">
				<div class="padding_2 gradient_0">
					<ul class="list_1">
						<li class="margin_bottom_2">
							<b>Class nomenclature</b>.  
							The classes used by QUID generally use the same nomenclature by using <i>class_description_XX</i>.
							This is to standardize the classes as best as possible while also taking out part of the guessing game when looking up a class.
							The <i>class_description</i> part utilizes lowercase, fully-spelled-out properties (for the most part), using underscores in place of spaces.
						</li>
						<li class="margin_bottom_2">
							<b>Underscores</b>.
							The underscores are used because they can be used universally in practically every coding language, as opposed to other non-alphanumeric characters.
							Hyphens, for example, can break a variable in PHP.
						</li>
						<li class="margin_bottom_2">
							<b><i>_0</i> suffix on color style classes</b>.
							The <i>_0</i> suffix on a class will typically be used for properties with the color white.  
							For example, <i>background_0</i> is a white background.
						</li>
						<li class="margin_bottom_2">
							<b><i>_1</i> suffix on color style classes</b>.
							The <i>_1</i> suffix on a class will typically be used for properties with the color black.  
							For example, <i>border_1</i> is a black border.
						</li>
						<li class="margin_bottom_2">
							<b>Lowercase</b>.
							Lowercase is used on all classes to avoid any problems with case-sensitivity.
						</li>
					</ul>
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