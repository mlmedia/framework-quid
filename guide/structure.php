<?php include('../includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">

		<div class="grid_9 alpha">

			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo;
					<a href="<?php echo BASEURL;?>/guide/index.php" title="QUID ~ Guide">Guide</a> &raquo;
					Structure
				</h1>
				<p class="fontsize_5">
					Use the classes below to create markup for the website structure.
				</p>
			</div>

			<h2 class="fontsize_7">{ horizontal structure }</h2>
			<div class="padding_2">
				<p>
					The horizontal structure for QUID is based primarily on the <a href="http://www.designinfluences.com/fluid960gs/12/" target="_blank" title="Fluid Grid System">12-column
						fluid 960 grid system</a>, derived from the <a href="http://960.gs/" target="_blank" title="960 Grid System">960 grid system</a>. The creators put together a
					demo that illustrates how the 960 grid system works at <a href="http://960.gs/demo.html" target="_blank" title="960 Grid System Demo">http://960.gs/demo.html</a>.
					You can easily learn the system by reading the above links and studying the markup in the demo and the examples below.
				</p>
			</div>

			<div class="background_2 border_2 margin_bottom_6">
				<div class="gradient_0 padding_3">
					<h3 class="margin_bottom_2 fontsize_6">{ why the 12-column fluid grid? }</h3>
					<ul class="list_1">
						<li class="margin_bottom_2"><strong>Nesting</strong>. The fluid system can be used to nest grids inside of grids so higher grids are not necessary.</li>
						<li class="margin_bottom_2"><strong>Fluid-or-Fixed</strong>. A fluid grid can be made fixed by wrapping it within a 960-pixel fixed-width (or any other fixed-width) container. A fixed grid cannot be made fluid.</li>
						<li><strong>Divisible by 3</strong>. The 12-column grid system was used instead of the 16-column system because 12 is evenly divisible by three.</li>
					</ul>
				</div>
			</div>


			<h3 class="fontsize_5">container_12</h3>
			<div class="padding_2">
				<p>
					The parent class that must be used for the grid system.
					It can be used multiple times, but only has be used once on the highest level parent element (i.e. <i><b>&lt;BODY&gt;</b></i>).
				</p>
			</div>


			<h3 class="fontsize_5">grid_XX</h3>
			<div class="padding_2">
				<p>
					The standard class for horizontal units.
					A grid unit is 6.333% times the grid number plus two-percent margin for the grid number minus one.
					For example, <i>grid_2</i> is equal to 14.666% (6.333% x 2 + 2%); <i>grid_3</i> is equal to 23% (6.333% x 3 + 4%).
				</p>
			</div>

			<h3 class="fontsize_5">prefix_XX</h3>
			<div class="padding_2">
				<p>
					The prefix class adds a left margin to a grid unit equal the size of the _XX value for an equivalent grid_XX item.
				</p>
			</div>

			<h3 class="fontsize_5">suffix_XX</h3>
			<div class="padding_2">
				<p>
					The suffix class adds a right margin to a grid unit equal the size of the _XX value for an equivalent grid_XX item.
				</p>
			</div>


			<h3 class="fontsize_5">alpha + omega</h3>
			<div class="padding_2">
				<p>
					The <i>alpha</i> class removes the leading left margin for a grid item, typically on the first (most left) <i>grid_XX</i> item in a row.
					The <i>omega</i> class removes the trailing right margin for a grid item, typically on the last (most right) <i>grid_XX</i> item in a row.
					This is typically used for the first (most left) item.
				</p>
			</div>
			<p class="padding_2 background_2 border_2 margin_bottom_4">
				<strong>NOTE:</strong>
				Without the alpha and omega classes, the layout may break, especially in older versions of IE.
			</p>

			<h3 class="fontsize_5">clear</h3>
			<div class="padding_2">
				<p>
					This class clears both the right and left margins.
					Use this class to start a new row.
				</p>
			</div>

			<h3 class="fontsize_5">wrapper_1</h3>
			<div class="padding_2">
				<p>
					This class is to contain the child elements contained to a fixed width of 960 pixels - the gold standard for website width using the 960 grid system.
					Use a custom stylesheet to create a class for other fixed-width wrappers.
				</p>
			</div>

			<div class="margin_bottom_2">&nbsp;</div>

			<h2 class="fontsize_7">{ extra structure }</h2>
			<div class="padding_2">
				<p>
					The QUID classes below add margins and padding to an element.
					They are measured in <a href="http://en.wikipedia.org/wiki/Em_%28typography%29" target="_blank" title="Em (Wikipedia)">ems</a>, which are units of measurement relative to the size of the base font.
				</p>
				<p>
					In each class, the value is equal to the <i>_XX</i> number times 0.5em.
					The maximum <i>_XX</i> value is 10, equal to 5em (10 x 0.5em).
				</p>
			</div>

			<p class="background_2 padding_2 border_2 margin_bottom_4">
				<strong>NOTE:</strong>
				Do not use these classes on the same elements as the <i>grid_XX</i> elements as described above.
				Extra horizontal structure on grid elements may break the layout.
			</p>

			<h3 class="fontsize_5">padding_XX</h3>
			<div class="padding_2">
				<p>
					Applies padding to all sides of an element.
				</p>
			</div>

			<h3 class="fontsize_5">padding_top_XX | padding_bottom_XX | padding_left_XX | padding_right_XX</h3>
			<div class="padding_2">
				<p>
					Applies padding to the top, bottom, left, and right of an element, respectively.
				</p>
			</div>


			<h3 class="fontsize_5">margin_XX</h3>
			<div class="padding_2">
				<p>
					Applies a margin to all sides of an element
				</p>
			</div>

			<h3 class="fontsize_5">margin_top_XX | margin_bottom_XX | margin_left_XX | margin_right_XX</h3>
			<div class="padding_2">
				<p>
					Applies margin to the top, bottom, left, and right of an element, respectively.
				</p>
			</div>

			<div class="margin_bottom_2">&nbsp;</div>

			<h2 class="fontsize_7">{ practical examples }</h2>
			<div class="padding_2">
				<p>
					Below is a group of practical examples of QUID structure.
				</p>
			</div>

			<h3 class="fontsize_5 margin_bottom_2">Two-column, left-sidebar layout</h3>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
					<?php
$content = '<div class="container_12">
	<div class="grid_12 alpha omega margin_bottom_1">
		<div class="background_2 padding_3 align_center">
			Header
		</div>
	</div>
	<div class="clear"></div>
	<div class="grid_4 alpha">
		<div class="background_2 padding_6 align_center">
			Sidebar
		</div>
	</div>
	<div class="grid_8 omega">
		<div class="background_2 padding_6 align_center">
			Content
		</div>
	</div>
	<div class="clear"></div>
	<div class="grid_12 alpha omega margin_top_1">
		<div class="background_2 padding_3 align_center">
			Footer
		</div>
	</div>
</div>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="container_12">
					<div class="grid_12 alpha omega margin_bottom_1">
						<div class="background_2 padding_3 align_center">
							Header
						</div>
					</div>
					<div class="clear"></div>
					<div class="grid_4 alpha">
						<div class="background_2 padding_6 align_center">
							Sidebar
						</div>
					</div>
					<div class="grid_8 omega">
						<div class="background_2 padding_6 align_center">
							Content
						</div>
					</div>
					<div class="clear"></div>
					<div class="grid_12 alpha omega margin_top_1">
						<div class="background_2 padding_3 align_center">
							Footer
						</div>
					</div>
				</div>
			</div>

			<h3 class="fontsize_5 margin_bottom_2">Two-column, right-sidebar layout</h3>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
					<?php
$content = '<div class="container_12">
	<div class="grid_12 alpha omega margin_bottom_1">
		<div class="background_2 padding_3 align_center">
			Header
		</div>
	</div>
	<div class="clear"></div>
	<div class="grid_8 alpha">
		<div class="background_2 padding_6 align_center">
			Content
		</div>
	</div>
	<div class="grid_4 omega">
		<div class="background_2 padding_6 align_center">
			Sidebar
		</div>
	</div>
	<div class="clear"></div>
	<div class="grid_12 alpha omega margin_top_1">
		<div class="background_2 padding_3 align_center">
			Footer
		</div>
	</div>
</div>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="container_12">
					<div class="grid_12 alpha omega margin_bottom_1">
						<div class="background_2 padding_3 align_center">
							Header
						</div>
					</div>
					<div class="clear"></div>
					<div class="grid_8 alpha">
						<div class="background_2 padding_6 align_center">
							Content
						</div>
					</div>
					<div class="grid_4 omega">
						<div class="background_2 padding_6 align_center">
							Sidebar
						</div>
					</div>
					<div class="clear"></div>
					<div class="grid_12 alpha omega margin_top_1">
						<div class="background_2 padding_3 align_center">
							Footer
						</div>
					</div>
				</div>
			</div>

			<h3 class="fontsize_5 margin_bottom_2">Three-column layout</h3>
			<div class="border_2 padding_2 margin_bottom_6">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
					<?php
$content = '<div class="container_12">
	<div class="grid_12 alpha omega margin_bottom_1">
		<div class="background_2 padding_3 align_center">
			Header
		</div>
	</div>
	<div class="clear"></div>

	<div class="grid_3 alpha">
		<div class="background_2 padding_6 align_center">
			Sidebar
		</div>
	</div>
	<div class="grid_6">
		<div class="background_2 padding_6 align_center">
			Content
		</div>
	</div>
	<div class="grid_3 omega">
		<div class="background_2 padding_6 align_center">
			Sidebar
		</div>
	</div>
	<div class="clear"></div>

	<div class="grid_12 alpha omega margin_top_1">
		<div class="background_2 padding_3 align_center">
			Footer
		</div>
	</div>
</div>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="container_12">
					<div class="grid_12 alpha omega margin_bottom_1">
						<div class="background_2 padding_3 align_center">
							Header
						</div>
					</div>
					<div class="clear"></div>

					<div class="grid_3 alpha">
						<div class="background_2 padding_6 align_center">
							Sidebar
						</div>
					</div>
					<div class="grid_6">
						<div class="background_2 padding_6 align_center">
							Content
						</div>
					</div>
					<div class="grid_3 omega">
						<div class="background_2 padding_6 align_center">
							Sidebar
						</div>
					</div>
					<div class="clear"></div>

					<div class="grid_12 alpha omega margin_top_1">
						<div class="background_2 padding_3 align_center">
							Footer
						</div>
					</div>
				</div>
			</div>

			<h3 class="fontsize_5 margin_bottom_2">Complex layout</h3>
			<div class="border_2 padding_2 margin_bottom_10">
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
					<?php
$content = '<div class="container_12 align_center">
	<div class="grid_4 alpha margin_bottom_1">
		<div class="background_2 padding_3">
			Logo
		</div>
	</div>
	<div class="grid_8 omega margin_bottom_1">
		<div class="background_2 padding_3">
			Menu
		</div>
	</div>
	<div class="clear"></div>

	<div class="grid_7 alpha margin_bottom_1">
		<div class="background_2 padding_4">
			Content
		</div>
	</div>
	<div class="grid_3 margin_bottom_1">
		<div class="background_2 padding_4">
			Sidebar
		</div>
	</div>
	<div class="grid_2 omega margin_bottom_1">
		<div class="background_2 padding_4">
			Sidebar
		</div>
	</div>
	<div class="clear"></div>

	<div class="grid_2 alpha">
		<div class="background_2 padding_3">
			Box
		</div>
	</div>
	<div class="grid_2">
		<div class="background_2 padding_3">
			Box
		</div>
	</div>
	<div class="grid_2">
		<div class="background_2 padding_3">
			Box
		</div>
	</div>
	<div class="grid_2">
		<div class="background_2 padding_3">
			Box
		</div>
	</div>
	<div class="grid_2">
		<div class="background_2 padding_3">
			Box
		</div>
	</div>
	<div class="grid_2 omega">
		<div class="background_2 padding_3">
			Box
		</div>
	</div>
	<div class="clear"></div>

	<div class="grid_12 alpha omega margin_top_1">
		<div class="background_2 padding_3">
			Footer
		</div>
	</div>
</div>';

echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="container_12 align_center">
					<div class="grid_4 alpha margin_bottom_1">
						<div class="background_2 padding_3">
							Logo
						</div>
					</div>
					<div class="grid_8 omega margin_bottom_1">
						<div class="background_2 padding_3">
							Menu
						</div>
					</div>
					<div class="clear"></div>

					<div class="grid_7 alpha margin_bottom_1">
						<div class="background_2 padding_4">
							Content
						</div>
					</div>
					<div class="grid_3 margin_bottom_1">
						<div class="background_2 padding_4">
							Sidebar
						</div>
					</div>
					<div class="grid_2 omega margin_bottom_1">
						<div class="background_2 padding_4">
							Sidebar
						</div>
					</div>
					<div class="clear"></div>

					<div class="grid_2 alpha">
						<div class="background_2 padding_3">
							Box
						</div>
					</div>
					<div class="grid_2">
						<div class="background_2 padding_3">
							Box
						</div>
					</div>
					<div class="grid_2">
						<div class="background_2 padding_3">
							Box
						</div>
					</div>
					<div class="grid_2">
						<div class="background_2 padding_3">
							Box
						</div>
					</div>
					<div class="grid_2">
						<div class="background_2 padding_3">
							Box
						</div>
					</div>
					<div class="grid_2 omega">
						<div class="background_2 padding_3">
							Box
						</div>
					</div>
					<div class="clear"></div>

					<div class="grid_12 alpha omega margin_top_1">
						<div class="background_2 padding_3">
							Footer
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
