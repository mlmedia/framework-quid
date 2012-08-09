<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>QUID - Quick User Interface Development Kit</title>
<meta charset="utf-8" />
<link type="text/css" media="all" href="<?php echo BASEURL;?>/quidkit/quid.css" rel="stylesheet" />
<link type="text/css" media="all" href="<?php echo BASEURL;?>/quidkit/custom.css" rel="stylesheet" />

<script type="text/javascript" src="<?php echo BASEURL;?>/quidkit/quid.js"></script>
<script type="text/javascript" src="<?php echo BASEURL;?>/quidkit/common.js"></script>

<!-- 
Below is a sample custom font class using Google Web Fonts 
Visit the Google Font page @ http://www.google.com/webfonts 
-->
<link href="http://fonts.googleapis.com/css?family=Artifika" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css">
<style type="text/css">
.font_custom { 
font-family:"Oleo Script", cursive;
}
.font_arvo { 
font-family:"Artifika",serif;
}
.font_arvo {
font-family:"Arvo",serif;
font-weight:normal !important;
}

</style>
<?php

// convert code to viewable text
function convert_code($content)
{
	if(version_compare(PHP_VERSION,'5.2.3')== -1):
		$content ='<pre class="fontsize_3 font_2" style="background-color:#333366;color:#fff;">'.htmlspecialchars($content,ENT_NOQUOTES,'UTF-8').'</pre>';
	else:
		$content ='<pre class="fontsize_3 font_2" style="background-color:#333366;color:#fff;">'.htmlspecialchars($content,ENT_NOQUOTES,'UTF-8',false).'</pre>';
	endif;
	return $content;
}


?>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-33465084-1']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
</head>
<body class="font_1 fontsize_4">
<div id="wrapper">
	<div class="background_2 margin_bottom_4">
		<div class="gradient_0 border_bottom_2 bordersize_1">
			<div class="container_12 wrapper_1">
				<div class="grid_4 alpha padding_bottom_2">
					<h1 class="fontsize_9 margin_top_1">
						<a href="<?php echo BASEURL; ?>" title="Home">
							<img src="<?php echo BASEURL;?>/images/site_logo.gif" alt="" width="231" height="81" alt="QUID" />
						</a>
					</h1>
				</div>
			</div>
		</div>
	</div>