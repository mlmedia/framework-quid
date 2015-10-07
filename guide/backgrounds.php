<?php include('../includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">

		<div class="grid_9 alpha">

			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo;
					<a href="<?php echo BASEURL;?>/guide/index.php" title="QUID ~ Guide">Guide</a> &raquo;
					Backgrounds
				</h1>
				<p class="fontsize_5">
					Use the classes below to distinguish elements on a page with backgrounds.
				</p>
			</div>

			<h3 class="fontsize_5">{ default }</h3>
			<div class="padding_2">
				<p>
					If no background class is used, the default is white.
				</p>
			</div>

			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">Common HTML (replace <i>background_XX</i> with a class below)</div>
				<div class="margin_bottom_1">
<?php
$content = '<div class="background_XX padding_3">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Nam tempus velit sed metus suscipit et aliquam nisl mollis.
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</div>';

echo convert_code($content);
?>
				</div>
			</div>

			<h3 class="fontsize_5">background_0</h3>
			<div class="padding_2">
				<p>
					White background with a default black text color.
					Although the default is white, this background class is useful when the parent background is dark.
				</p>
			</div>


			<h3 class="fontsize_5">background_1</h3>
			<div class="padding_2">
				<p>
					Black background with a default white text color.
				</p>
			</div>

			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_1 padding_3 margin_bottom_2">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Nam tempus velit sed metus suscipit et aliquam nisl mollis.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
			</div>

			<h3 class="fontsize_5">background_2</h3>
			<div class="padding_2">
				<p>
					Light gray background with a default black text color.
				</p>
			</div>

			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_3 margin_bottom_2">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Nam tempus velit sed metus suscipit et aliquam nisl mollis.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
			</div>

			<h3 class="fontsize_5">background_3</h3>
			<div class="padding_2">
				<p>
					Medium gray background with a default black text color.
				</p>
			</div>

			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_3 padding_3 margin_bottom_2">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Nam tempus velit sed metus suscipit et aliquam nisl mollis.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
			</div>

			<h3 class="fontsize_5">background_4</h3>
			<div class="padding_2">
				<p>
					Dark gray background with a default white text color.
				</p>
			</div>

			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_4 padding_3 margin_bottom_2">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Nam tempus velit sed metus suscipit et aliquam nisl mollis.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
			</div>

			<h3 class="fontsize_5">background_5</h3>
			<div class="padding_2">
				<p>
					Red background with a default white text color.
				</p>
			</div>

			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_5 padding_3 margin_bottom_2">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Nam tempus velit sed metus suscipit et aliquam nisl mollis.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
			</div>

			<h3 class="fontsize_5">background_6</h3>
			<div class="padding_2">
				<p>
					Green background with a default white text color.
				</p>
			</div>

			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_6 padding_3 margin_bottom_2">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Nam tempus velit sed metus suscipit et aliquam nisl mollis.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
			</div>

			<h3 class="fontsize_5">background_7</h3>
			<div class="padding_2">
				<p>
					Blue background with a default white text color.
				</p>
			</div>

			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_7 padding_3 margin_bottom_2">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Nam tempus velit sed metus suscipit et aliquam nisl mollis.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
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
