<?php include('../includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">

		<div class="grid_9 alpha">

			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo;
					<a href="<?php echo BASEURL;?>/guide/index.php" title="QUID ~ Guide">Guide</a> &raquo;
					Links
				</h1>
				<p class="fontsize_5">
					The following classes should be used to create anchor links.
				</p>
			</div>

			<h3 class="fontsize_5">{ default }</h3>
			<div class="padding_2">
				<p>
					The default links on a white background are a web-safe blue with a slightly lighter shade of blue for the hover state.
					Links on a black background (<i>background_1</i>) use an even lighter shade of blue for the sake of visibility.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">

				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
					<?php
$content = 'Lorem ipsum dolor sit amet with an <a href="#">example link</a> and another lorem ipsum dolor an <a href="#">example link</a>.';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2 margin_bottom_4">
					Lorem ipsum dolor sit amet with an <a href="#">example link</a> and another lorem ipsum dolor an <a href="#">example link</a>.
				</div>

				<div class="font_2 margin_bottom_1">Display (with a black background)</div>
				<div class="background_1 padding_2">
					Lorem ipsum dolor sit amet with an <a href="#">example link</a> and another lorem ipsum dolor an <a href="#">example link</a>.
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
