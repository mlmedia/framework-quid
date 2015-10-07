<?php include('includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">

		<div class="grid_9 alpha">

			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8">Quick User Interface Development</h1>
				<p class="fontsize_5 margin_top_1">
					The Quick User Interface Development (QUID) kit is a free-to-use package that helps you rapidly develop web user interfaces
					by utilizing standardized classes to create common design elements that work consistently across all platforms.
				</p>
			</div>

			<h2 class="fontsize_7 margin_bottom_2">{ what is QUID? }</h2>
			<div class="background_2 border_2 margin_bottom_6">
				<div class="padding_2 gradient_0">
					<p>
						The Quick User Interface Development (QUID) kit is a small set of files containing CSS styles and JavaScript for the most common elements used in a web user interface.
						The purpose of QUID is to allow a web developer to rapidly build a web page - or at least the prototype of a web page -
						only using HTML code that simply utilizes the existing set of CSS and JavaScript classes built into the QUID system.
						Special custom CSS and JavaScript can be added later, but the most common elements are covered in the initial build.
					</p>
				</div>
			</div>

			<h3 class="fontsize_6 margin_bottom_1">{ how do I use QUID? }</h3>
			<div class="margin_bottom_4 padding_2">
				<ol class="list_1">
					<li class="margin_bottom_1">
						Download the latest version of the QUID kit by going to the <a href="<?php echo BASEURL;?>/download/" title="QUID ~ Download page">Download page</a>,
						or click the button below to get the latest compressed ZIP file.
						<div class="padding_top_2 padding_bottom_2">
							<a class="button button_2 rounded_3 fontsize_4" href="<?php echo BASEURL;?>/download/quidkit_latest.zip" title="Download the Latest QUID Kit">Download the Latest (ZIP)</a>
						</div>
					</li>
					<li class="margin_bottom_1">
						Copy the QUID files to your home site directory.
						The files can be stored in any directory structure, but you must consider that structure in <u>Step 3</u> below.
					</li>
					<li class="margin_bottom_1">
						Link to the QUID CSS and JavaScript files in the <i><b>&lt;HEAD&gt;</b></i> element of the HTML page.
						It is recommended that you use full links and not relative links (as in the example below) if you are using server-side <i>includes</i> or have a complex site directory.
						<div class="margin_top_2">
<?php
$code = '<link rel="stylesheet" type="text/css" media="all" href="quidkit/quid.css" />
<script type="text/javascript" src="quidkit/quid.js"></script>';
echo convert_code($code);
?>
						</div>
					</li>
					<li class="margin_bottom_1">
						Follow the <a href="<?php echo BASEURL;?>/guide/" title="User Guide">User Guide</a> as a reference to create all common
						elements of a first-draft site using the QUID markup.
					</li>
					<li class="margin_bottom_1">
						Add overriding custom code to the <i><b>CUSTOM.CSS</b></i> cascading stylesheet and <i><b>CUSTOM.JS</b></i> JavaScript file to create the highly customized elements of the site.
						Since these files are referenced after the QUID files, the custom code will override the QUID code.
					</li>
				</ol>
			</div>

			<h3 class="fontsize_6 margin_bottom_2">{ philosophical bits }</h3>
			<div class="background_2 margin_bottom_6">
				<div class="padding_2 border_2 gradient_0">
					<ul class="list_1">
						<li class="margin_bottom_1">
							Keep it DRY (Don't Repeat Yourself).
						</li>
						<li class="margin_bottom_1">
							Less (code) is more.
						</li>
						<li class="margin_bottom_1">
							Don't reinvent the wheel.
						</li>
						<li class="margin_bottom_1">
							Standards are good for the web.
						</li>
						<li class="margin_bottom_1">
							Creativity is good for the substance of a site.  Standards are good for the way a site is built.
						</li>
					</ul>
				</div>
			</div>

			<h3 class="fontsize_6 margin_bottom_1">{ inspiration + credit }</h3>
			<div class="padding_2 margin_bottom_4">
				<ul class="list_1">
					<li class="margin_bottom_1">
						<a href="http://www.w3.org/" target="_blank" title="World Wide Web Consortium (W3C)">World Wide Web Consortium (W3C)</a>.
						The World Wide Web Consortium (W3C) is the primary authority at the fore-front of open web standards "to ensure the long-term growth of the Web."
					</li>
					<li class="margin_bottom_1">
						<a href="http://960.gs/" target="_blank" title="960 Grid System">960 Grid System</a>.
						The 960 Grid System was the primary inspiration for the horizontal structure of the QUID system.  When you
						first start using it and realize that you no longer have to spend hours of development time fine-tuning floats, widths, and clears,
						you won't want to go back to your old ways.
					</li>
					<li class="margin_bottom_1">
						<a href="http://www.designinfluences.com/fluid960gs/12/" target="_blank" title="12-column fluid 960 grid system">12-column fluid 960 grid system</a>.
						The 12-column fluid 960 grid from DesignInfluences.com was created as a fluid alternative to the 960 Grid System
						and is used as the basis for the percentage-based horizontal structure of the QUID system.
					</li>
					<li class="margin_bottom_1">
						<a href="http://jquerymobile.com/" target="_blank" title="jQuery Mobile">jQuery Mobile</a>.
						jQuery Mobile uses a standardized set of classes and custom attributes to allow developers to easily make
						websites for smartphones and tablets that look like apps.  I did not use jQuery mobile elements directly in development
						of the QUID framework, but my experience with the framework partially inspired QUID.
					</li>
					<li class="margin_bottom_1">
						<a href="http://www.google.com/webfonts" title="Google Web Fonts" target="_blank">Google Web Fonts</a>.  Google provides a valuable open-source alternative to font replacement systems such as Cufon and Typekit with Web Fonts.
						They streamline the process and make it very standards-compatible by condensing the needed markup to a few lines that can be placed in the <b><i>&lt;HEAD&gt;</i></b> element of your site.
					</li>
					<li class="margin_bottom_1">
						<a href="http://webdesignerwall.com/tutorials/css3-gradient-buttons" title="CSS Buttons from Web Designer Wall" target="_blank">Web Designer Wall</a>.
						Thanks to Web Designer Wall for the basis of the CSS buttons.
						QUID simply changes the buttons to utilize more web-safe colors.
					</li>
				</ul>
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
