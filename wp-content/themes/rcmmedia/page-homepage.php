<?php
/*
	Template Name: Homepage
*/
?> 
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php wp_title(''); ?></title>

<style type="text/css">
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
	background: transparent;
	border: 0;
	margin: 0;
	padding: 0;
	vertical-align: baseline;
}
body {
	line-height: 1; overflow:hidden;background: url("") no-repeat;font-family: sans-serif;;
}
body.logged-in {overflow: auto;}
h1,h2,h3,h4,h5,h6{clear:both;font-weight:400}
blockquote{quotes:none}
blockquote:before,blockquote:after{content:none}
del{text-decoration:line-through}
table{border-collapse:collapse;border-spacing:0}
a img{border:none}
img{border:0}
a{text-decoration:none;outline:none;cursor:pointer}
#wrapper {text-align: center;margin: 10px 0;	}
.resposive {width: 100%;height: auto;}
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="wrapper">
<p><img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="logo" width="200" height="200"></p>
<h3 style="color:#2D2D2D;font-weight: lighter;margin-bottom: 20px">coming soon... you better believe it</h3>
<p><img class="resposive" src="<?php bloginfo('template_url') ?>/images/boom.jpg" alt="boom" >	</p>

</div><!-- #wrapper -->

<?php wp_footer(); ?>
</body>
</html>