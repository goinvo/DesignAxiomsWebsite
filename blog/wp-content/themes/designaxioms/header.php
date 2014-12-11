<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<link rel="shortcut icon" href="./assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="./assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="./assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="./assets/images/apple-touch-icon-114x114.png">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
	<link rel="stylesheet" type="text/css" href="./css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="./css/layout.css">
	<link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css">

<?php wp_head(); ?>

</head>
 
<body>
	<div id="wrapper" class="container">
		<div id="header" class="sixteen columns">
			<div id="head">
				<div id="head2"><a href="../index.php">Design Axioms</a></div>
				<div id="buy"><a href="http://www.amazon.com/Design-Axioms-Cards-Software-Principles/dp/B006GGHQ3G/ref=sr_1_1?s=books&ie=UTF8&qid=1343676157&sr=1-1&keywords=design+axioms+juhan">Buy a Deck</a></div>
			</div>
			
			<ul class="nav">
            	<li><a href="../index.php">HOME</a></li>
				<li><a href="../axioms.php">AXIOMS</a></li>
				<li><a href="../quotes.php">QUOTES</a></li>
				<li><a href="../authors.php">AUTHORS</a></li>
				<li><a href="../about.php">ABOUT</a></li>
				<li><a href="<?php echo get_option('home'); ?>" class="active" >JOURNAL</a></li>
				<li><a href="../feedback.php">FEEDBACK</a></li>
			</ul><!--#nav-->

			<!--<ul id="nav">  
				<?php //wp_list_pages('sort_column=menu_order&title_li='); ?>
			</ul>-->
		</div><!--#header .sixteen .columns-->