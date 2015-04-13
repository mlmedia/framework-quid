<?php include('../includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">

		<div class="grid_9 alpha">
		
			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo; 
					Downloads
				</h1>
			</div>
			
			<h2 class="fontsize_7 margin_bottom_1">latest version - 1.0</h2>
			<div class="background_2 border_2 margin_bottom_4">
				<div class="padding_2 gradient_0">
					<p>
						Click the button below to download the latest stable version of QUID.
					</p>
					<p>
						<a class="button button_2 rounded_3 fontsize_4" href="<?php echo BASEURL;?>/download/quidkit_latest.zip" title="Download the Latest QUID Kit">Download the Latest (ZIP)</a>
					</p>
				</div>
			</div>
			
			<h2 class="fontsize_6">version notes / changelog</h2>
			<div class="padding_2">
				<p>
					The current version is the first released version.  
					It contains the core QUID features, including standardized HTML, CSS, and JavaScript markup for the most common used elements for a web user interface, including:
					backgrounds, borders, buttons, fonts, forms, headings, lightbox, links, lists, scroll-to effect, show/hide effect, structure, tables, and text.
				</p>
			</div>
			
			<h2 class="fontsize_6">past versions</h2>
			<div class="padding_2">
				<p>
					There are currently no past versions of this software.
				</p>
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