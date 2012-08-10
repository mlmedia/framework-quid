<?php include('../includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">

		<div class="grid_9 alpha">
		
			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo; 
					<a href="<?php echo BASEURL;?>/guide/index.php" title="QUID ~ Guide">Guide</a> &raquo; 
					Dynamic Menu
				</h1>
				<p class="fontsize_5">
					Use the code below to create a dynamic horizontal jQuery menu with sliding drawers for sub-menu elements.
				</p>
			</div>
			
			<h3 class="fontsize_5">dynamic_menu</h3>
			<div class="padding_2">
				<p>
					The <i>dynamic_menu</i> class is applied to the top level &lt;UL&gt; tag of the unordered list of the horizontal dynamic menu.
				</p>
			</div>
			
			<h3 class="fontsize_5">{ default }</h3>
			<div class="padding_2">
				<p>		
					The default dynamic menu is un-styled.  
				</p>
			</div>
			
			<p class="background_2 border_2 padding_2 margin_bottom_4">
				<b>NOTE:</b> The unstyled menu may look strange without any styling. 
				For example, the background of the drawer will be transparent.
				This makes custom styling easier.
			</p>
			
			<div class="border_2 padding_2 margin_bottom_6">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<ul class="dynamic_menu">
	<li>
		<a href="#" class="padding_2">Top-link</a>
		<ul>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
		</ul>
	</li>
	<li>
		<a href="#" class="padding_2">Top-link</a>
		<ul>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
		</ul>
	</li>
	<li>
		<a href="#" class="padding_2">Top-link</a>
		<ul>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
		</ul>
	</li>
</ul>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="padding_2">
					<ul class="dynamic_menu">
						<li>
							<a href="#" class="padding_2">Top-link</a>
							<ul>
								<li><a href="#">Sub-link</a></li>
								<li><a href="#">Sub-link</a></li>
								<li><a href="#">Sub-link</a></li>
								<li><a href="#">Sub-link</a></li>
								<li><a href="#">Sub-link</a></li>
							</ul>
						</li>
						<li>
							<a href="#" class="padding_2">Top-link</a>
							<ul>
								<li><a href="#">Sub-link</a></li>
								<li><a href="#">Sub-link</a></li>
								<li><a href="#">Sub-link</a></li>
								<li><a href="#">Sub-link</a></li>
								<li><a href="#">Sub-link</a></li>
							</ul>
						</li>
						<li>
							<a href="#" class="padding_2">Top-link</a>
							<ul>
								<li><a href="#">Sub-link</a></li>
								<li><a href="#">Sub-link</a></li>
								<li><a href="#">Sub-link</a></li>
								<li><a href="#">Sub-link</a></li>
								<li><a href="#">Sub-link</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			
			<h3 class="fontsize_5">{ styled }</h3>
			<div class="padding_2">
				<p>
					To style a dynamic menu, use the classes for <a href="<?php echo BASEURL;?>/guide/backgrounds.php" title="QUID Backgrounds">backgrounds</a> 
					and <a href="<?php echo BASEURL;?>/guide/borders.php" title="QUID Borders">borders</a>.   
				</p>
			</div>
			
			
			<div class="border_2 padding_2">
			
				<div class="font_2 margin_bottom_1">HTML</div>
				<div class="margin_bottom_1">
<?php
$content = '<ul class="dynamic_menu">
	<li>
		<a href="#" class="padding_2">Top-link</a>
		<ul>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
		</ul>
	</li>
	<li>
		<a href="#" class="padding_2">Top-link</a>
		<ul>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
		</ul>
	</li>
	<li>
		<a href="#" class="padding_2">Top-link</a>
		<ul>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
			<li><a href="#">Sub-link</a></li>
		</ul>
	</li>
</ul>';
	
echo convert_code($content);
?>
				</div>
				<div class="font_2 margin_bottom_1">Display</div>
				<div class="padding_2">
					<div class="background_2">
						<div class="gradient_0 border_2 rounded_1">
							<ul class="dynamic_menu">
								<li>
									<a href="#" class="padding_2">Top-link</a>
									<ul class="background_2">
										<li><a href="#">Sub-link</a></li>
										<li><a href="#">Sub-link</a></li>
										<li><a href="#">Sub-link</a></li>
										<li><a href="#">Sub-link</a></li>
										<li><a href="#">Sub-link</a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="padding_2">Top-link</a>
									<ul>
										<li><a href="#">Sub-link</a></li>
										<li><a href="#">Sub-link</a></li>
										<li><a href="#">Sub-link</a></li>
										<li><a href="#">Sub-link</a></li>
										<li><a href="#">Sub-link</a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="padding_2">Top-link</a>
									<ul>
										<li><a href="#">Sub-link</a></li>
										<li><a href="#">Sub-link</a></li>
										<li><a href="#">Sub-link</a></li>
										<li><a href="#">Sub-link</a></li>
										<li><a href="#">Sub-link</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
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