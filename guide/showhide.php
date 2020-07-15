<?php include('../includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">

		<div class="grid_9 alpha">

			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo;
					<a href="<?php echo BASEURL;?>/guide/index.php" title="QUID ~ Guide">Guide</a> &raquo;
					Show/Hide Effect
				</h1>
				<p class="fontsize_5">
					Use the code below to create a show/hide effect that shows or hides a target element.
				</p>
			</div>

			<h3 class="fontsize_5">show_trigger + show_target</h3>
			<div class="padding_2">
				<p>
					The <i>show_trigger</i> and <i>show_target</i> classes can be used on two counterpart elements to create a simple show / hide effect.
				</p>
			</div>

			<h3 class="fontsize_5">{ <i>REL</i> attribute on trigger element + <i>ID</i> on the target element }</h3>
			<div class="padding_2">
				<p>
					The <i>REL</i> attribute on the trigger element must match the <i>ID</i> on the target element.
				</p>
				<p>
					The target element <i>ID</i> can be anything alpha-numeric and must be unique on the page.
					For example, so should only use an <i>ID</i> of <i>example_1</i> once.
				</p>
				<p>
					Multiple trigger elements can be used with the same <i>REL</i>.
				</p>
			</div>

			<h3 class="fontsize_5">shown</h3>
			<div class="padding_2">
				<p>
					By default, the <i>show_target</i> element is hidden.
					Add the <i>shown</i> class to show the target element by default.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">

				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
					<?php
$content = '<h3 class="show_trigger" rel="example_1">Trigger Element (click to toggle display)</h3>
<div class="show_target shown margin_top_2" id="example_1">
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
</div>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<h3 class="show_trigger" rel="example_1">Trigger Element (click to toggle display)</h3>
					<div class="show_target shown margin_top_2" id="example_1">
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
			</div>


		</div>

		<div class="grid_3 omega">
			<?php include(BASEPATH . '/includes/sidebar.php'); ?>
		</div>
		<div class="clear"></div>

	</div>
</div>

<?php include(BASEPATH . '/includes/footer.php');?>
