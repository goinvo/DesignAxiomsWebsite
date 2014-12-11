<div class="sixteen columns">
<?php
	$authorNumber=0;
		//loops through all cards, grabs all author cards, spits them out in multi-format (4 cards/row, 8 cards/slide)
	foreach ($allCards as $card){
		 $cardType = $card->getAttribute('type');
		 if($cardType == 'author'){
			$title=$card->getElementsByTagName('title')->item(0)->nodeValue;
			$thumb=$card->getElementsByTagName('thumb')->item(0)->nodeValue;
			$imageUrl=$card->getElementsByTagName('thumb')->item(0)->getAttribute('url');
			$imageId=$card->getElementsByTagName('title')->item(0)->getAttribute('id');
			$titleArray[] = $title;
			$thumbArray[] =  $thumb;
			$imageUrlArray[] = $imageUrl;
			$imageIdArray[] = $imageId;
			$authorNumber++;
		}
	}
	
		//creates a panel of a slide, 2 rows of 8 cards
	function makePanel($titleArray, $thumbArray, $imageUrlArray, $imageIdArray, $number){ 
		echo"				<li class=\"panel\">
					<div class=\"gridItem slide\"> 
						<ul>";
			//make first row
		for($i=0;$i<=3;$i++) { 
			if((isset($thumbArray[$number+$i])) && (isset($imageUrlArray[$number+$i]))) {
					//if javascript is disabled, anchor tag reloads the page to show single.php#id
				echo"\n							<li><noscript><a href=\"" . $imageUrlArray[$number+$i] . "#" . $imageIdArray[$number+$i] . "\"></noscript><img onmouseover=\"this.style.cursor='pointer'\" id=\"goTo" . $imageIdArray[$number+$i] . "\" src=\"" . $thumbArray[$number+$i] . "\" alt=\"".$titleArray[$number+$i]."\" /><noscript></a></noscript></li>";
					//javascript to replace anchor behaviour and reload the page as single
				//!!grab placement in array to pass as initial slide number in single.php (may involve slider.php)!!
				echo "<script type=\"text/javascript\">
							document.getElementById(\"goTo" . $imageIdArray[$number+$i] . "\").onclick = function () {
								location = \"./authors.php?view=single#" . $imageIdArray[$number+$i] . "\";
							};
						</script>";
			}
		} 
		echo"\n						</ul>\n						<ul>\n"; 
		$number+=4;
			//make second row
		for($i=0;$i<=3;$i++) { 
			if((isset($thumbArray[$number+$i])) && (isset($imageUrlArray[$number+$i]))) {
					//if javascript is disabled, anchor tag reloads the page to show single.php#id
				echo"\n							<li><noscript><a href=\"" . $imageUrlArray[$number+$i] . "#" . $imageIdArray[$number+$i] . "\"></noscript><img onmouseover=\"this.style.cursor='pointer'\" id=\"goTo" . $imageIdArray[$number+$i] . "\" src=\"" . $thumbArray[$number+$i] . "\" alt=\"".$titleArray[$number+$i]."\" /><noscript></a></noscript></li>";
					//javascript to replace anchor behaviour and reload the page as single
//!!grab placement in array to pass as initial slide number in single.php (may involve slider.php, will have to make a separate slider.php for each single.php??)!!
				echo "<script type=\"text/javascript\">
							document.getElementById(\"goTo" . $imageIdArray[$number+$i] . "\").onclick = function () {
								location = \"./authors.php?view=single#" . $imageIdArray[$number+$i] . "\";
							};
						</script>";
			}
		}
		echo"\n						</ul>\n					</div>\n				</li>\n";
	}
	
		//creates half a panel, in the case where we have 4 or less cards, so as not to create an empty <ul></ul>
	function makeHalfPanel($titleArray, $thumbArray, $imageUrlArray, $imageIdArray, $number){ 
		echo"			<ul>"; 
		for($i=0;$i<=3;$i++) { 
			if((isset($thumbArray[$number+$i])) && (isset($imageUrlArray[$number+$i]))) {
					//if javascript is disabled, anchor tag reloads the page to show single.php#id
				echo"\n							<li><noscript><a href=\"" . $imageUrlArray[$number+$i] . "#" . $imageIdArray[$number+$i] . "\"></noscript><img onmouseover=\"this.style.cursor='pointer'\" id=\"goTo" . $imageIdArray[$number+$i] . "\" src=\"" . $thumbArray[$number+$i] . "\" alt=\"".$titleArray[$number+$i]."\" /><noscript></a></noscript></li>";
				
					//javascript to replace anchor behaviour and reload the page as single
//!!grab placement in array to pass as initial slide number in single.php (may involve slider.php, will have to make a separate slider.php for each single.php??)!!
				echo "<script type=\"text/javascript\">
							document.getElementById(\"goTo" . $imageIdArray[$number+$i] . "\").onclick = function () {
								location = \"./authors.php?view=single#" . $imageIdArray[$number+$i] . "\";
							
							};
						</script>";
			}
		} 
		echo"\n			</ul>";
	}	
	
		//stop making panels when we run out of cards, otherwise, an extra, empty panel will be created
	$loopUntil = ceil($authorNumber/8); 
	for($i=0;$i<($loopUntil);$i++) {
		if ($authorNumber<=4){
			echo"<div class=\"gridItem gridContent\">\n";
			$outputString = makeHalfPanel($titleArray, $thumbArray, $imageUrlArray, $imageIdArray, $i*8);
			echo  "\n		</div><!--end #content-->\n";
		} else {
			echo"\n		<div id=\"content slideContent\" class=\"eighteen columns\">\n			<ul id=\"slider\"> \n";	
			
			$outputString = makePanel($titleArray, $thumbArray, $imageUrlArray, $imageIdArray, $i*8);
			echo"			</ul><!--end #slider-->\n		</div><!--end #content--> \n";
			 
		}
	}
?>
</div>