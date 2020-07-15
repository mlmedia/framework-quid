<?php include('includes/config.php'); ?>
<?php include(BASEPATH . '/includes/header.php'); ?>

<div id="content">
	<div class="wrapper_1 container_12 padding_top_1">

		<div class="grid_9 alpha">

			<div class="border_bottom_2 margin_bottom_4">
				<h1 class="font_arvo fontsize_8 margin_bottom_1">
					<a href="<?php echo BASEURL;?>" title="Quick User Interface Development ~ Home">Home</a> &raquo;
					Frequently Asked Questions
				</h1>
			</div>

			<h2 class="fontsize_6">what is QUID?</h2>
			<div class="padding_2">
				<p>
					The Quick User Interface Development (QUID) kit is a small set of files containing CSS styles and JavaScript for the most common elements used in a web user interface.
					The purpose of QUID is to allow a web developer to rapidly build a web page - or at least the prototype of a web page -
					only using HTML code that simply utilizes the existing set of CSS and JavaScript classes built into the QUID system.
					Special custom CSS and JavaScript can be added later, but the most common elements are covered in the initial build.
				</p>
			</div>

			<h2 class="fontsize_6">who should use QUID?</h2>
			<div class="padding_2">
				<p>
					QUID is meant primarily for web developers who have a base knowledge of hand-coding HTML.
					It also helps if you have knowledge of CSS and JavaScript.
				</p>
			</div>

			<h2 class="fontsize_6">who should not use QUID?</h2>
			<div class="padding_2">
				<p>
					If you do not have a basic understanding of HTML structure, then you may have a hard time using QUID.
					For example, if your only experience with building web pages is with a visual editor like Dreamweaver, you may not have the threshold coding chops to use QUID.
				</p>
			</div>

			<h2 class="fontsize_6">what does QUID cover?</h2>
			<div class="padding_2">
				<p>
					QUID covers the front-end of a website - the client-side user interface displayed by a web browser.
					This includes the HTML elements, cascading stylesheets (CSS), and JavaScript effects.
					It cannot possibly cover everything that can be used for a web user interface, but the goal is to cover at least the most common parts.
				</p>
			</div>

			<h2 class="fontsize_6">what does QUID not cover?</h2>
			<div class="padding_2">
				<p>
					QUID does not cover the back-end of a website - the activity that is normally performed by a server-side language such as C#, Java, or PHP.
					In other words, QUID cannot dynamically pull content from a database or a file directory on page load as in a url request.
					QUID also does not currently cover asynchronous data retrieval as with AJAX or JSON, although future versions may include these features.
				</p>
			</div>

			<h2 class="fontsize_6">why not use a full description or more succinct class nomenclature?</h2>
			<div class="padding_2">
				<p>
					The purpose of QUID is to make development easy as possible, and using <i><b>class_description_XX</b></i> takes at least a little bit of the guesswork out of the equation.
				</p>
				<p>
					For example, if the class name for <i>margin_left_1</i> was instead <i>marLeft3px</i>, you would have to constantly look up the class names before getting it right.
					When you get used to the QUID nomenclature, you realize that you can sometimes guess the value.
					QUID intends that the <i><b>class_description_XX</b></i> system will be the standard for all future versions.
				</p>
			</div>

			<h2 class="fontsize_6">which browsers are supported?</h2>
			<div class="padding_2">
				<p>
					The goal of QUID is cross-browser compatibility. However, it is practically impossible to provide complete cross-browser compatibility without sacrificing common elements.
					Chrome, FireFox, Opera, Safari, and Internet Explorer 9 are almost completely cross-browser compatible. Internet Explorer 7 and 8 are supported, but have some issues.
					As QUID matures, the cross-browser compatibility will improve.
				</p>
			</div>

			<h2 class="fontsize_6">does QUID validate?</h2>
			<div class="padding_2">
				<p>
					QUID validates, however some elements may throw validation warnings.
					See for yourself by visiting the <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.quidkit.com" title="W3C Validator" target="_blank">W3C Validator</a>.
				</p>
			</div>

			<h2 class="fontsize_6">can I use QUID with HTML5 elements?</h2>
			<div class="padding_2">
				<p>
					Yes. Most of the HTML5 tags you will be using are &lt;DIV&gt; equivalents, such as &lt;HEADER&gt;, &lt;ARTICLE&gt;, and &lt;FOOTER&gt;.
					QUID classes applied to these elements will work.
				</p>
			</div>

			<h2 class="fontsize_6">what is the license?</h2>
			<div class="padding_2">
				<p>
					QUID is provided under the GNU General Public License Version 3, a copy of which is found in the downloaded package and can be <a href="<?php echo BASEURL;?>/license.txt" title="GNU General Public License">viewed online here</a>.
					The quick highlights of this license:
					<ul class="list_1">
						<li class="margin_bottom_1">QUID is free to use.</li>
						<li class="margin_bottom_1">QUID is free to redistribute, but you cannot re-name it and provide it as your own.</li>
						<li class="margin_bottom_1">QUID is free to modify, as long as you (1) give credit to QUID as the basis of your work, and (2) maintain the same license in your derivative work.</li>
					</ul>
				</p>
				<p>
					For a more detailed explanation of the GNU General Public License, visit the <a href="http://www.gnu.org/copyleft/gpl.html" title="GNU General Public License" target="_blank">GNU.org website here</a>.
				</p>
			</div>

			<h2 class="fontsize_6">how can I contribute?</h2>
			<div class="padding_2">
				<p>
					You can best contribute to QUID by visiting the <a href="<?php echo BASEURL;?>/forum/index.php" title="QUID ~ Forum">Forum</a> to suggest fixes, improvements, and solutions for others to use.
					You can also ask your own questions and we will try to answer them as fast as we can. Any input is welcome.
				</p>
			</div>

			<h2 class="fontsize_6">do you plan on putting this project into open development with a public repository / versioning tool?</h2>
			<div class="padding_2">
				<p>
					The current version is not set up in an open repository yet, but I plan on making it a GitHub project in the future if enough interest exists.
				</p>
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
