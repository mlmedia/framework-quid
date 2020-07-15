<?php include('../includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">

		<div class="grid_9 alpha">

			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo;
					<a href="<?php echo BASEURL;?>/guide/index.php" title="QUID ~ Guide">Guide</a> &raquo;
					Forms
				</h1>
				<p class="fontsize_5">
					Use the code below to create standard QUID form input elements.
					Classes for standard QUID buttons can be found in the <a href="<?php echo BASEURL;?>/guide/buttons.php">buttons section</a>.
				</p>
			</div>

			<p class="background_2 border_2 padding_2 margin_bottom_4">
				<b>NOTE:</b>
				QUID does not address the handling of form data.
				For data handling, you must use a server-side language such as C#, Java, or PHP.
			</p>

			<h3 class="fontsize_6">{ text + password inputs }</h3>
			<div class="padding_2">
				<p>
					Use the markup below to create text and password inputs for single-line text input.
					Inputs and labels have a width that stretches to the width of the parent element, so they will force a line break by default.
					To create inline inputs and labels, use the grid system and/or other structure elements.
				</p>
			</div>

			<h3 class="fontsize_5 margin_bottom_2">{ top label text input }</h3>

			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
					<?php
$content = '<label for="example">Top Label</label>
<input type="text" name="example" />';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="margin_bottom_2 background_2 padding_2">
					<label for="example">Top Label</label>
					<input type="text" name="example" />
				</div>
			</div>

			<h3 class="fontsize_5 margin_bottom_2">{ inline label text input }</h3>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
					<?php
$content = '<div class="grid_3 alpha">
	<label for="example">Label</label>
</div>
<div class="grid_9 omega">
	<input type="text" name="example" />
</div>
<div class="clear"></div>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="margin_bottom_2 background_2 padding_2">
					<div class="grid_3 alpha">
						<label for="example">Label</label>
					</div>
					<div class="grid_9 omega">
						<input type="text" name="example" />
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<h3 class="fontsize_5 margin_bottom_2">{ multiple inputs }</h3>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
					<?php
$content = '<label for="example1">Label</label>
<input type="text" class="margin_bottom_2" name="example1" />
<input type="text" name="example2" />';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="margin_bottom_2 background_2 padding_2">
					<label for="example1">Label</label>
					<input type="text" class="margin_bottom_2" name="example1" />
					<input type="text" name="example2" />
				</div>
			</div>

			<h3 class="fontsize_5 margin_bottom_2">{ multiple inline inputs }</h3>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
					<?php
$content = '<div class="grid_2 alpha">
	<label for="example1">Label</label>
</div>
<div class="grid_3">
	<input type="text" name="example1" />
</div>
<div class="grid_3">
	<input type="text" name="example2" />
</div>
<div class="grid_3 omega">
	<input type="text" name="example3" />
</div>
<div class="clear"></div>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="margin_bottom_2 background_2 padding_2">

					<div class="grid_2 alpha">
						<label for="example1">Label</label>
					</div>
					<div class="grid_3">
						<input type="text" name="example1" />
					</div>
					<div class="grid_3">
						<input type="text" name="example2" />
					</div>
					<div class="grid_3 omega">
						<input type="text" name="example3" />
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<h3 class="fontsize_5 margin_bottom_2">{ inline password input }</h3>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
					<?php
$content = '<div class="grid_3 alpha">
	<label for="example">Label</label>
</div>
<div class="grid_9 omega">
	<input type="password" name="example" />
</div>
<div class="clear"></div>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="margin_bottom_2 background_2 padding_2">
					<div class="grid_3 alpha">
						<label for="example">Label</label>
					</div>
					<div class="grid_9 omega">
						<input type="password" name="example" />
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<h3 class="fontsize_6">{ textarea elements }</h3>
			<div class="padding_2">
				<p>
					Use the markup below to create standard QUID textarea elements for multiple line text input.
				</p>
			</div>

			<h3 class="fontsize_5 margin_bottom_2">{ top label textarea element }</h3>

			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
					<?php
$content = '<label for="example">Textarea</label>
<textarea name="example" rows="6"></textarea>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="margin_bottom_2 background_2 padding_2">
					<label for="example">Label</label>
					<textarea name="example" rows="6"></textarea>
				</div>
			</div>

			<h3 class="fontsize_5 margin_bottom_2">{ inline label textarea element }</h3>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
					<?php
$content = '<div class="grid_3">
	<label for="example">Label</label>
</div>
<div class="grid_9">
	<textarea name="example" rows="6"></textarea>
</div>
<div class="clear"></div>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="margin_bottom_2 background_2 padding_2">
					<div class="grid_3">
						<label for="example">Label</label>
					</div>
					<div class="grid_9">
						<textarea name="example" rows="6"></textarea>
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<h3 class="fontsize_6">{ select inputs }</h3>
			<div class="padding_2">
				<p>
					Use the markup below to create standard QUID select inputs.
				</p>
			</div>

			<h3 class="fontsize_5 margin_bottom_2">{ default }</h3>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
					<?php
$content = '<div class="grid_3 alpha">
	<label for="example">Label</label>
</div>
<div class="grid_6 omega">
	<select name="example">
		<option value="1">Option 1</option>
		<option value="2">Option 2</option>
		<option value="3">Option 3</option>
		<option value="4">Option 4</option>
	</select>
</div>
<div class="clear"></div>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="margin_bottom_2 background_2 padding_2">
					<div class="grid_3 alpha">
						<label for="example">Label</label>
					</div>
					<div class="grid_6 omega">
						<select name="example">
							<option value="1">Option 1</option>
							<option value="2">Option 2</option>
							<option value="3">Option 3</option>
							<option value="4">Option 4</option>
						</select>
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<h3 class="fontsize_5 margin_bottom_2">{ multiple select element }</h3>
			<div class="padding_2">
				<p>This element is useful for selecting more than one option (i.e. by holding CTRL)</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
					<?php
$content = '<div class="grid_3 alpha">
	<label for="example">Label</label>
</div>
<div class="grid_6 omega">
	<select name="example" multiple="multiple">
		<option value="1">Option 1</option>
		<option value="2">Option 2</option>
		<option value="3">Option 3</option>
		<option value="4">Option 4</option>
	</select>
</div>
<div class="clear"></div>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="margin_bottom_2 background_2 padding_2">
					<div class="grid_3 alpha">
						<label for="example">Label</label>
					</div>
					<div class="grid_6 omega">
						<select name="example" multiple="multiple">
							<option value="1">Option 1</option>
							<option value="2">Option 2</option>
							<option value="3">Option 3</option>
							<option value="4">Option 4</option>
						</select>
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<h3 class="fontsize_6">{ checkbox + radio inputs }</h3>
			<div class="padding_2">
				<p>
					Use the markup below to create standard QUID checkbox and radio elements.
				</p>
			</div>

			<h3 class="fontsize_5 margin_bottom_2">{ checkboxes }</h3>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
					<?php
$content = '<div class="grid_3 alpha">
	<label for="example">Label</label>
</div>
<div class="grid_6">
	<input type="checkbox" name="example" />Checkbox 1<br />
	<input type="checkbox" name="example" />Checkbox 2<br />
	<input type="checkbox" name="example" />Checkbox 3
</div>
<div class="clear"></div>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="margin_bottom_2 background_2 padding_2">
					<div class="grid_3 alpha">
						<label for="example">Label</label>
					</div>
					<div class="grid_6">
						<input type="checkbox" name="example" />Checkbox 1<br />
						<input type="checkbox" name="example" />Checkbox 2<br />
						<input type="checkbox" name="example" />Checkbox 3
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<h3 class="fontsize_5 margin_bottom_2">{ radio buttons }</h3>

			<div class="border_2 padding_2 margin_bottom_10">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
					<?php
$content = '<div class="grid_3 alpha">
	<label>Label</label>
</div>
<div class="grid_6">
	<input type="radio" name="sample" />1
	<input type="radio" name="sample" />2
	<input type="radio" name="sample" />3
</div>
<div class="clear"></div>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="margin_bottom_2 background_2 padding_2">
					<div class="grid_3 alpha">
						<label>Label</label>
					</div>
					<div class="grid_6">
						<input type="radio" name="sample" />1
						<input type="radio" name="sample" />2
						<input type="radio" name="sample" />3
					</div>
					<div class="clear"></div>
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
