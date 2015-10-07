<?php include('../includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">

		<div class="grid_9 alpha">

			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo;
					<a href="<?php echo BASEURL;?>/guide/index.php" title="QUID ~ Guide">Guide</a> &raquo;
					Buttons
				</h1>
				<p class="fontsize_5">
					Use the classes below to create pure-CSS buttons.
					Classes for standard QUID form input elements can be found in the <a href="<?php echo BASEURL;?>/guide/forms.php">forms section</a>.
				</p>
			</div>

			<p class="background_2 border_2 padding_2 margin_bottom_4">
				<b>NOTE:</b> QUID does not address the handling of form data.
				For data handling, you must use a server-side language such as C#, Java, or PHP.
			</p>

			<h3 class="fontsize_5">{ new button }</h3>
			<div class="padding_2">
				<p>

				</p>
			</div>

			<div class="border_2 padding_2 margin_bottom_6">

				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<a href="#" class="newbutton">
	<span class="background_1">New Button</span>
</a>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<a href="#" class="button">
					<span>New Button</span>
				</a>

				<a href="#" class="button_dark background_1">
					<span>New Button Dark</span>
				</a>

				<input class="button" type="submit" value="Submit" />

				<button class="button_dark" type="button"><span>New Button Dark</span></button>

				<input class="button button_3" type="submit" value="Submit" />
			</div>


			<h3 class="fontsize_6">{ basic buttons }</h3>
			<div class="padding_2">
				<p>
					The button classes below create basic buttons on submit input, button, and anchor elements.
				</p>
			</div>

			<h3 class="fontsize_5">button</h3>
			<div class="padding_2">
				<p>
					This class creates a basic white/light gray button.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="grid_3 alpha">
					<div class="font_2 margin_bottom_1">Display</div>
				</div>
				<div class="grid_9 omega">
					<div class="font_2 margin_bottom_1">HTML</div>
				</div>
				<div class="clear"></div>

				<div class="grid_3 alpha">
					<input class="button" type="submit" value="Submit" />
				</div>
				<div class="grid_9 omega">
<?php
$content = '<input class="button" type="submit" value="Submit" />';
echo convert_code($content);
?>
				</div>
				<div class="clear"></div>

				<div class="grid_3 alpha">
					<button class="button" type="button">Submit</button>
				</div>
				<div class="grid_9 omega">
<?php
$content = '<button class="button" type="button">Submit</button>';
echo convert_code($content);
?>
				</div>
				<div class="clear"></div>

				<div class="grid_3 alpha">
					<a class="button" href="#">Submit</a>
				</div>
				<div class="grid_9 omega">
<?php
$content = '<a class="button" href="#">Submit</a>';
echo convert_code($content);
?>
				</div>
				<div class="clear"></div>

			</div>

			<h3 class="fontsize_5">button_XX</h3>
			<div class="padding_2">
				<p>
					The classes below create buttons in five colors - black, orange, red, blue, and green.
				</p>
			</div>

			<p class="margin_top_2 background_2 padding_2 border_2">
				<b>NOTE:</b>
				The <i>button</i> class must also be used in the element.
			</p>

			<div class="border_2 padding_2 margin_bottom_6">
				<div class="grid_3 alpha">
					<div class="font_2 margin_bottom_1">Display</div>
				</div>
				<div class="grid_9 omega">
					<div class="font_2 margin_bottom_1">HTML</div>
				</div>
				<?php for($i=1;$i<=5;$i++): ?>

					<div class="margin_top_2">
						<div class="grid_3 alpha">
							<div class="margin_bottom_2">
								<input class="button button_<?php echo $i;?>" type="submit" value="Submit" />
							</div>
						</div>
						<div class="grid_9 omega">

<?php
$content = '<input class="button button_' . $i . '" type="submit" value="Submit" />';
echo convert_code($content);
?>
						</div>

						<div class="clear"></div>
					</div>

				<?php endfor; ?>

			</div>

			<h3 class="fontsize_5">rounded_XX</h3>
			<div class="padding_2">
				<p>
					The classes below create buttons with rounded corners.
				</p>
			</div>


			<p class="background_2 border_2 padding_2">
				<b>NOTE</b>: Rounded corners do not work correctly in Internet Explorer when mixed with gradients, so buttons in IE will be square corners by default.
			</p>

			<div class="border_2 padding_2 margin_bottom_6">

				<?php for($i=1;$i<=3;$i++): ?>

					<div class="margin_top_2">
						<div class="grid_3 alpha">
							<div class="margin_bottom_2">
								<input class="button rounded_<?php echo $i;?>" type="submit" value="Submit" />
							</div>
						</div>
						<div class="grid_9 omega">

<?php
$content = '<input class="button rounded_' . $i . '" type="submit" value="Submit" />';
echo convert_code($content);
?>
						</div>
						<div class="clear"></div>
					</div>
				<?php endfor; ?>

			</div>

			<h3 class="fontsize_5">{ different-sized buttons }</h3>
			<div class="padding_2">
				<p>
					Since the size of the button is controlled by the size of the font, use the font classes to create larger and smaller QUID buttons.
				</p>
			</div>

			<h3 class="fontsize_5">{ padding }</h3>
			<div class="padding_2">
				<p>
					The padding classes change the size and dimensions of a button.  Read more about padding in the <a href="<?php echo BASEURL;?>/guide/structure.php">Structure section</a>.
				</p>
			</div>

			<div class="border_2 padding_2 margin_bottom_6">

				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<input class="button padding_3" type="submit" value="Submit" />';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<input class="button padding_3" type="submit" value="Submit" />

			</div>

			<div class="border_2 padding_2 margin_bottom_6">

				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<input class="button padding_left_8 padding_right_8" type="submit" value="Submit" />';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<input class="button padding_left_8 padding_right_8" type="submit" value="Submit" />

			</div>

			<h3 class="fontsize_5">fontsize_XX</h3>
			<div class="padding_2">
				<p>
					The fontsize class changes the size of the button.
					Read more about fonts in the <a href="<?php echo BASEURL;?>/guide/fonts.php">Fonts section</a>.
				</p>
			</div>

			<div class="border_2 padding_2 margin_bottom_6">

				<?php for($i=2;$i<=7;$i++): ?>

					<div class="margin_top_2">
						<div class="grid_3 alpha">
							<div class="margin_bottom_2">
								<input class="button fontsize_<?php echo $i;?>" type="submit" value="Submit" />
							</div>
						</div>
						<div class="grid_9 omega">

<?php
$content = '<input class="button fontsize_' . $i . '" type="submit" value="Submit" />';
echo convert_code($content);
?>
						</div>
						<div class="clear"></div>
					</div>

				<?php endfor; ?>
			</div>

			<h3 class="fontsize_5">{ practical example }</h3>
			<div class="padding_2">
				<p>
					Below is a nice example of a compound <i>Join Now</i> button.
				</p>
			</div>

			<div class="border_2 padding_2 margin_bottom_6">

				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<a href="#" class="button button_5 fontsize_6 rounded_2 padding_right_4 padding_left_4">
	<b>JOIN NOW</b><br />
	<span class="fontsize_3">Register for FREE!</span>
</a>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<a href="#" class="button button_5 fontsize_6 rounded_2 padding_right_4 padding_left_4">
					<b>JOIN NOW</b><br />
					<span class="fontsize_3">Register for FREE!</span>
				</a>
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
