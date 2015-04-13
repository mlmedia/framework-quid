<?php include('../includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">

		<div class="grid_9 alpha">
		
			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo; 
					<a href="<?php echo BASEURL;?>/guide/index.php" title="QUID ~ Guide">Guide</a> &raquo; 
					Lightbox
				</h1>
				<p class="fontsize_5">
					Use the code below to create a lightbox effect to generate an overlay layer fixed on a centered position over the page.
				</p>
			</div>
			
			<h3 class="fontsize_5">lightbox_trigger + lightbox_target</h3>
			<div class="padding_2">
				<p>
					The <i>lightbox_trigger</i> and <i>lightbox_target</i> classes can be used on two counterpart elements to create a lightbox effect. 
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
					For example, when using multiple trigger elements that create a contact form lightbox overlay.
				</p>
			</div>
			
			<h3 class="fontsize_5">{ set width on the target element }</h3>
			<div class="padding_2">
				<p>		
					The target element should use a set width so that it does not expand too far to the size of the window.  
				</p>
				<p>
					In the example below, a width is set on the target element with an inline style of <i>width:800px</i>.
					This is for illustration purposes only.  Inline styles are generally discouraged.  
					A better method is to set the width using a CSS property in your <i>CUSTOM.CSS</i> file.
				</p>
			</div>
			
			<h3 class="fontsize_5">lightbox_close</h3>
			<div class="padding_2">
					By default, clicking outside the lightbox will close it. 
					However, the <i>lightbox_close</i> class can also be used on any element inside the target element to close the lightbox. 
					In the example below, it is used on an <i>X</i> - a good standard for a close control.
				</p>
			</div>
			
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<a class="button lightbox_trigger" href="#" rel="example_1">Lightbox Trigger Element</a>
<div class="lightbox_target background_0 border_2" id="example_1" style="width:800px;">
	<div class="padding_2">
		<div class="align_right">
			<a href="#" class="lightbox_close fontsize_7" title="Close">X</a>
		</div>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
			Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
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
	</div>
</div>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
				
					<a class="button lightbox_trigger" href="#" rel="example_1">Lightbox Trigger Element</a>
					<div class="lightbox_target background_0 border_2" id="example_1" style="width:800px;">
						<div class="padding_2">
							<div class="align_right">
								<a href="#" class="lightbox_close fontsize_7" title="Close">X</a>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
								Nam tempus velit sed metus suscipit et aliquam nisl mollis. 
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
						</div>
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