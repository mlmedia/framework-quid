<?php include('../includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">

		<div class="grid_9 alpha">

			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo;
					<a href="<?php echo BASEURL;?>/guide/index.php" title="QUID ~ Guide">Guide</a> &raquo;
					Headings
				</h1>
				<p class="fontsize_5">
					The following markup is used to create heading elements.
				</p>
			</div>

			<h3 class="fontsize_5">{ default }</h3>
			<div class="padding_2">
				<p>
					By default all of the heading elements are bold and the same size as the base font.
					This is consistent with the QUID standards of using granular classes to apply style, as opposed to ad hoc styling of each element with CSS based on page position or type.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">

				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
					<?php
$content = '<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<h1>Heading 1</h1>
					<h2>Heading 2</h2>
					<h3>Heading 3</h3>
					<h4>Heading 4</h4>
					<h5>Heading 5</h5>
					<h6>Heading 6</h6>
				</div>
			</div>

			<h3 class="fontsize_5">{ styled }</h3>
			<div class="padding_2">
				<p>
					To style the headings use the classes from the { style } sections - such as the <a href="<?php echo BASEURL;?>/guide/fonts.php">font styles</a>.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">

				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
					<?php
$content = '<h1 class="font_5 fontsize_9 margin_bottom_1">Heading 1</h1>
<h2 class="font_6 fontsize_8 margin_bottom_1">Heading 2</h2>
<h3 class="font_7 fontsize_7 margin_bottom_1">Heading 3</h3>
<h4 class="font_8 fontsize_6 margin_bottom_1">Heading 4</h4>
<h5 class="font_9 fontsize_5 margin_bottom_1">Heading 5</h5>
<h6 class="font_10 fontsize_4 margin_bottom_1">Heading 6</h6>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<h1 class="font_5 fontsize_9 margin_bottom_1">Heading 1</h1>
					<h2 class="font_6 fontsize_8 margin_bottom_1">Heading 2</h2>
					<h3 class="font_7 fontsize_7 margin_bottom_1">Heading 3</h3>
					<h4 class="font_8 fontsize_6 margin_bottom_1">Heading 4</h4>
					<h5 class="font_9 fontsize_5 margin_bottom_1">Heading 5</h5>
					<h6 class="font_10 fontsize_4 margin_bottom_1">Heading 6</h6>
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
