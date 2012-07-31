<?php include('../includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">

		<div class="grid_9 alpha">
		
			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo; 
					<a href="<?php echo BASEURL;?>/guide/index.php" title="QUID ~ Guide">Guide</a> &raquo; 
					Tables
				</h1>
				<p class="fontsize_5">
					Use the code below to create standard QUID tables.
				</p>
			</div>
			
			<h3 class="fontsize_5">{ default }</h3>
			<div class="padding_2">
				<p>
					Table with no QUID classes. The standard table is un-styled. 
				</p>
			</div>
			

			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<table>
	<thead>
		<tr>
			<th colspan="5">Table Header</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Heading</th>
			<th>Heading</th>
			<th>Heading</th>
			<th>Heading</th>
			<th>Heading</th>
		</tr>
		<tr>
			<td>123</td>
			<td>123</td>
			<td>123</td>
			<td>123</td>
			<td>123</td>
		</tr>
		<tr>
			<td>123</td>
			<td>123</td>
			<td>123</td>
			<td>123</td>
			<td>123</td>
		</tr>
		<tr>
			<td>123</td>
			<td>123</td>
			<td>123</td>
			<td>123</td>
			<td>123</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="5">Table Footer</td>
		</tr>
	</tfoot>
</table>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<table>
						<thead>
							<tr>
								<th colspan="5">Table Header</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Heading</th>
								<th>Heading</th>
								<th>Heading</th>
								<th>Heading</th>
								<th>Heading</th>
							</tr>
							<tr>
								<td>123</td>
								<td>123</td>
								<td>123</td>
								<td>123</td>
								<td>123</td>
							</tr>
							<tr>
								<td>123</td>
								<td>123</td>
								<td>123</td>
								<td>123</td>
								<td>123</td>
							</tr>
							<tr>
								<td>123</td>
								<td>123</td>
								<td>123</td>
								<td>123</td>
								<td>123</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="5">Table Footer</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
			
			<h3 class="fontsize_5">{ styled }</h3>
			<div class="padding_2">
				<p>
					To style a table, use the classes for <a href="<?php echo BASEURL;?>/guide/backgrounds.php" title="QUID Backgrounds">backgrounds</a> and <a href="<?php echo BASEURL;?>/guide/borders.php" title="QUID Borders">borders</a>.   
				</p>
			</div>
			
			<p class="padding_2 background_2 border_2 margin_bottom_4">
				<strong>NOTE:</strong>
				Due to limitations of IE7, classes applied to the <i><b>&lt;TR&gt;</b></i> elements will not display properly.
				Style classes should be applied to the <i><b>&lt;TD&gt;</b></i> and <i><b>&lt;TH&gt;</b></i> elements instead. 
				It is more tedious but also more granular - which allows for more intricate styling patterns. 
				See the example below.
			</p>

			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<table class="background_0 border_2">
	<thead>
		<tr>
			<th colspan="5" class="background_1 border_1">Table Header</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th class="background_3 border_right_1">Heading</th>
			<th class="background_2 border_bottom_2">Heading</th>
			<th class="background_2 border_bottom_2">Heading</th>
			<th class="background_2 border_bottom_2">Heading</th>
			<th class="background_2 border_bottom_2">Heading</th>
		</tr>
		<tr>
			<td class="background_3 border_right_1">123</td>
			<td class="border_bottom_2">123</td>
			<td class="border_bottom_2">123</td>
			<td class="border_bottom_2">123</td>
			<td class="border_bottom_2">123</td>
		</tr>
		<tr>
			<td class="background_3 border_right_1">123</td>
			<td class="background_2 border_bottom_2">123</td>
			<td class="background_2 border_bottom_2">123</td>
			<td class="background_2 border_bottom_2">123</td>
			<td class="background_2 border_bottom_2">123</td>
		</tr>
		<tr>
			<td class="background_3 border_right_1">123</td>
			<td>123</td>
			<td>123</td>
			<td>123</td>
			<td>123</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="5" class="background_4 border_1">Table Footer</td>
		</tr>
	</tfoot>
</table>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<table class="background_0 border_2">
						<thead>
							<tr>
								<th colspan="5" class="background_1 border_1">Table Header</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th class="background_3 border_right_1">Heading</th>
								<th class="background_2 border_bottom_2">Heading</th>
								<th class="background_2 border_bottom_2">Heading</th>
								<th class="background_2 border_bottom_2">Heading</th>
								<th class="background_2 border_bottom_2">Heading</th>
							</tr>
							<tr>
								<td class="background_3 border_right_1">123</td>
								<td class="border_bottom_2">123</td>
								<td class="border_bottom_2">123</td>
								<td class="border_bottom_2">123</td>
								<td class="border_bottom_2">123</td>
							</tr>
							<tr>
								<td class="background_3 border_right_1">123</td>
								<td class="background_2 border_bottom_2">123</td>
								<td class="background_2 border_bottom_2">123</td>
								<td class="background_2 border_bottom_2">123</td>
								<td class="background_2 border_bottom_2">123</td>
							</tr>
							<tr>
								<td class="background_3 border_right_1">123</td>
								<td>123</td>
								<td>123</td>
								<td>123</td>
								<td>123</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="5" class="background_4 border_1">Table Footer</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
			
			<div class="margin_bottom_6">&nbsp;</div>
			
		</div>
		
		<div class="grid_3 omega">
			<?php include(BASEPATH . '/includes/sidebar.php'); ?>
		</div>
		<div class="clear"></div>
		
	</div>
</div>

<?php include(BASEPATH . '/includes/footer.php');?>