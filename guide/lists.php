<?php include('../includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">

		<div class="grid_9 alpha">
		
			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo; 
					<a href="<?php echo BASEURL;?>/guide/index.php" title="QUID ~ Guide">Guide</a> &raquo; 
					Lists
				</h1>
				<p class="fontsize_5">
					Use the classes below to create standard QUID ordered and unordered list elements.  
				</p>
			</div>

			<h3 class="fontsize_5">{ default }</h3>
			<div class="padding_2">
				<p>
					Standard list items with no QUID classes. 
					The default is a vertical list without bullets or numbers on both ordered (<b><i>&lt;OL&gt;</b></i>) and unordered (<b><i>&lt;UL&gt;</b></i>) lists.
				</p>
			</div>
			
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<ol>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
</ol>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<ol>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
					</ol>
				</div>
			</div>
			
			<h3 class="fontsize_5">list_0</h3>
			<div class="padding_2">
				<p>
					The <i>list_0</i> class creates an inline list on both ordered (<b><i>&lt;OL&gt;</b></i>) and unordered (<b><i>&lt;UL&gt;</b></i>) lists. 
					This class is useful to create horizontal menus, as shown below.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<ul class="list_0 gradient_2 border_2">
	<li><a href="#" class="padding_2">Lorem ipsum</a></li>
	<li><a href="#" class="padding_2">Lorem ipsum</a></li>
	<li><a href="#" class="padding_2">Lorem ipsum</a></li>
	<li><a href="#" class="padding_2">Lorem ipsum</a></li>
	<li><a href="#" class="padding_2">Lorem ipsum</a></li>
</ul>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>

				<ul class="list_0 background_2 border_2">
					<li><a href="#" class="padding_2">Lorem ipsum</a></li>
					<li><a href="#" class="padding_2">Lorem ipsum</a></li>
					<li><a href="#" class="padding_2">Lorem ipsum</a></li>
					<li><a href="#" class="padding_2">Lorem ipsum</a></li>
					<li><a href="#" class="padding_2">Lorem ipsum</a></li>
				</ul>

			</div>
			
			<h3 class="fontsize_5">{ unordered lists }</h3>
			<div class="padding_2">
				<p>
					The background classes below apply to unordered list items (<b><i>&lt;UL&gt;</b></i>).
				</p>
			</div>
			
			<h3 class="fontsize_5">list_1</h3>
			<div class="padding_2">
				<p>
					Unordered list with solid bullets.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<ul class="list_1">
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
</ul>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<ul class="list_1">
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
					</ul>
				</div>
			</div>
			
			<h3 class="fontsize_5">list_2</h3>
			<div class="padding_2">
				<p>
					Unordered list with circle bullets.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<ul class="list_2">
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
</ul>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<ul class="list_2">
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
					</ul>
				</div>
			</div>
			
			<h3 class="fontsize_5">list_3</h3>
			<div class="padding_2">
				<p>
					Unordered list with square bullets.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<ul class="list_3">
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
</ul>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<ul class="list_3">
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
					</ul>
				</div>
			</div>
			
			<h3 class="fontsize_5">{ ordered lists }</h3>
			<div class="padding_2">
				<p>
					The background classes below apply to ordered list items (<b><i>&lt;OL&gt;</b></i>).
				</p>
			</div>
			
			<h3 class="fontsize_5">list_1</h3>
			<div class="padding_2">
				<p>
					Ordered list with numbers.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<ol class="list_1">
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
</ol>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<ol class="list_1">
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
					</ol>
				</div>
			</div>
			
			<h3 class="fontsize_5">list_2</h3>
			<div class="padding_2">
				<p>
					Ordered list with lowercase letters.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<ol class="list_2">
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
</ol>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<ol class="list_2">
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
					</ol>
				</div>
			</div>
			
			<h3 class="fontsize_5">list_3</h3>
			<div class="padding_2">
				<p>
					Ordered list with uppercase roman numerals.
				</p>
			</div>
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<ol class="list_3">
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
	<li>Lorem ipsum</li>
</ol>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="background_2 padding_2">
					<ol class="list_3">
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
						<li>Lorem ipsum</li>
					</ol>
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