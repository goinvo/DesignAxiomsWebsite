<?php
	$page_view_style = '';
	$aact = '';
	if($pagetitle == 'Home'){
		$aact = 'class="active"';
	}
	$axact = '';
	if($pagetitle == 'Axioms'){
		$axact = 'class="active"';
	}
	$qact = '';
	if($pagetitle == 'Quotes'){
		$qact = 'class="active"';
	}
	$authact = '';
	if($pagetitle == 'Authors'){
		$authact = 'class="active"';
	}
	$abact = '';
	if($pagetitle == 'About'){
		$abact = 'class="active"';
	}
	
	$fbact = '';
	if($pagetitle == 'Feedback'){
		$fbact = 'class="active"';
	}
	
	$bact = '';
	if($pagetitle == 'Blog'){
		$bact = 'class="active"';
	}
	
	if(isset($_GET["view"]) && ($_GET["view"]) == "text") {
		$page_view_style = '?view=' . urlencode("text"); 
	} 
	
	else if(isset($_GET["view"]) && ($_GET["view"]) == "grid") {
		$page_view_style =  '?view=' . urlencode("grid");
	} 
	
	else if(isset($_GET["view"]) && ($_GET["view"]) == "multi") {
		$page_view_style = '?view=' . urlencode("multi");
	} 
	
	else if(isset($_GET["view"]) && ($_GET["view"]) == "single"){	
		$page_view_style = '?view='. urlencode("single");
	} 
	
	else if(isset($_GET["view"]) && ($_GET["view"]) == "minim") {
		$page_view_style = '?view=' . urlencode("minim");
	} 
	
	else{
		$page_view_style = '';
	}

	echo '<ul class="nav">';
	echo '<li><a href="index.php' . $page_view_style . '" ' . $aact . '>HOME</a></li>';
	echo '<li><a href="axioms.php' . $page_view_style . '" ' . $axact .'>AXIOMS</a></li>';
	echo '<li><a href="quotes.php' . $page_view_style . '" ' . $qact .'>QUOTES</a></li>';
	echo '<li><a href="authors.php' . $page_view_style . '" ' . $authact . '>AUTHORS</a></li>';
	echo '<li><a href="about.php" ' . $abact . '>ABOUT</a></li>';
	echo '<li><a href="blog/" ' . $bact . '>JOURNAL</a></li>';
	echo '<li><a href="feedback.php" ' . $fbact . '>FEEDBACK</a></li>';
	echo '</ul><!--#nav-->';
		
	?>
			
