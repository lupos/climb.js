<?php
  if(isset($_GET["page"])){
    $page =  $_GET["page"];
  } else {
  	$page = 'home';
  }
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/ui-theme/jquery-ui-1.8.16.custom.css">
	<?
      if(isset($page)){
        echo ('<link rel="stylesheet" type="text/css" href="css/'.$page.'.css" />');
      }
    ?>

	<script src="js/libs/modernizr-2.0.6.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>
	<!-- Include jQuery Syntax Highlighter -->
	<script type="text/javascript" src="http://balupton.github.com/jquery-syntaxhighlighter/scripts/jquery.syntaxhighlighter.min.js"></script>
</head>
<body>

<?
	include 'header.php';
?>

<?
	if(isset($page)){
		include 'pages/'.$page.'.php';
	} else {
		echo "ERROR!";
	}
?>

<?
	include 'footer.php';
?>   

<script type="text/javascript" src="js/libs/jquery-ui-1.8.22.custom.min.js"></script>

<!-- Initialise jQuery Syntax Highlighter -->
<script type="text/javascript">$.SyntaxHighlighter.init();</script>

<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
