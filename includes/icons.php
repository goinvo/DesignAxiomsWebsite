<?php
	
	function mobileDetect() 
	{
   		$browser = strtolower($_SERVER['HTTP_USER_AGENT']); //the browser string
		$mobile_by_hadley = false;                          //the return value
		
		
   		if(strstr($browser, 'iphone') || strstr($browser, 'ipod') || strstr($browser, 'android') || strstr($browser, 'ipad')) {
      		$mobile_by_hadley = true;
   		} 

   		return $mobile_by_hadley;
	}
 
	
	if( isset($_COOKIE['daview']) ){
		$which = $_COOKIE['daview'];
		$text   = false;
		$grid   = false;
		$multi  = false;
		$single = false;
		$minim  = false;
		
		if($which == 'grid'){
			$grid   = true;
		}else if($which == 'multi'){
			$multi  = true;
		}else if($which == 'single'){
			$single = true;
		}
		include("./includes/" . strtolower($pagetitle) . "" . $which . ".php");
	}
	else{
		if (isset($_GET["view"]) && ($_GET["view"]) == "grid") {
			$text=false;
			$grid=true;
			$multi=false;
			$single=false;
			$minim=false;
			include("./includes/" . strtolower($pagetitle) . "grid.php");
		} else if(isset($_GET["view"]) && ($_GET["view"]) == "multi") {
			$text=false;
			$grid=false;
			$multi=true;
			$single=false;
			$minim=false;
			include("./includes/" . strtolower($pagetitle) . "multi.php");
		} else if(isset($_GET["view"]) && ($_GET["view"]) == "single"){
			$text=false;
			$grid=false;
			$multi=false;
			$single=true;
			$minim=false;
			include("./includes/" . strtolower($pagetitle) . "single.php");
		//} else if(isset($_GET["view"]) && ($_GET["view"]) == "minim") {
			//$text=false;
			//$grid=false;
			//$multi=false;
			//$single=false;
			//$minim=true;
			//include("./includes/" . strtolower($pagetitle) . "minim.php");
		} 
		else
		{
			$ismobile = mobileDetect();

			$text=false;
			$grid=false;
			$minim=false;
			
			if(!$ismobile){
				$multi  = true;
				$single = false;
				include("./includes/" . strtolower($pagetitle) . "multi.php");
			}
			else if($ismobile){
				$multi  = false;
				$single = true;
				include("./includes/" . strtolower($pagetitle) . "single.php");
			}
		}	
	}
	?>
	<div class="sixteen columns">
			<div id="viewSwitcher">		
				<ul id="views">
					<!--<li id="text">?php if($text==true) {
								echo "<a class=\"active\" href=\"#?view=" . urlencode("text") . "\">text</a>";
							} else {
								echo "<a href=\"?view=" . urlencode("text") . "\">text</a>";
							} ?> </li>-->
					<li id="grid"><?php if($grid==true) {
								echo "<a class=\"active\" href=\"#?view=" . urlencode("grid") . "\">grid</a>";
							} else {
								echo "<a href=\"?view=" . urlencode("grid") . "\">grid</a>";
							} ?> </li>
					<li id="multi"> <?php if($multi==true) {
								echo "<a class=\"active\" href=\"#?view=" . urlencode("multi") . "\">multi</a>";
							} else {
								echo "<a href=\"?view=" . urlencode("multi") . "\">multi</a>";
							} ?> </li>
					<li id="single"> <?php if($single==true) {
								echo "<a class=\"active\" href=\"#\">single</a>";
							} else {
								echo "<a href=\"?view=" . urlencode("single") . "\">single</a>";
							} ?> </li>
					<!--<li id="minim">?php if($minim==true) {
								echo "<a class=\"active\" href=\"#\">minim</a>";
							} else {
								echo "<a href=\"?view=" . urlencode("minim") . "\">minim</a>";
							} ?> </li>-->
				</ul>
			</div>
		</div>
		