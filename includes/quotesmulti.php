		<?php
			$quoteNumber=0;
					//loops through all cards, grabs all quote cards, spits them out in multi-format (4 cards/row, 8 cards/slide)
			foreach ($allCards as $card) {
				$cardType = $card->getAttribute('type');
					if($cardType == 'quote'){
						$title=$card->getElementsByTagName('title')->item(0)->nodeValue;
						$thumb=$card->getElementsByTagName('thumb')->item(0)->nodeValue;
						$imageUrl=$card->getElementsByTagName('thumb')->item(0)->getAttribute('url');
						$imageId=$card->getElementsByTagName('title')->item(0)->getAttribute('id');
						$titleArray[] = $title;
						$thumbArray[] =  $thumb;
						$imageUrlArray[] = $imageUrl;
						$imageIdArray[] = $imageId;
						$quoteNumber++;
					}
			}
			
				//creates a panel of a slide, 2 rows of 8 cards
			echo"<div id=\"content\" class=\"eighteen columns slideContent\">\n			<ul id=\"slider\"> \n";	
			function makePanel($titleArray, $thumbArray, $imageUrlArray, $imageIdArray, $number){ 
				echo"<li class=\"panel\"> 
					<div class=\"gridItem slide\"> 
						<ul>";
					//make first row
				for($i=0;$i<=3;$i++) { 
					if((isset($thumbArray[$number+$i])) && (isset($imageUrlArray[$number+$i]))) {
							//if javascript is disabled, anchor tag reloads the page to show single.php#id
						echo"\n							<li><noscript><a href=\"" . $imageUrlArray[$number+$i] . "#" . $imageIdArray[$number+$i] . "\"></noscript><img onmouseover=\"this.style.cursor='pointer'\" id=\"goTo" . $imageIdArray[$number+$i] . "\" src=\"" . $thumbArray[$number+$i] . "\" alt=\"".$titleArray[$number+$i]."\" /><noscript></a></noscript></li>";
							//javascript to replace anchor behaviour and reload the page as single
//!!grab placement in array to pass as initial slide number in single.php (may involve slider.php, will have to make a separate slider.php for each single.php??)!!
						$test = $imageUrlArray[$number+$i] . '?view=single#' . $imageIdArray[$number+$i];
						echo "<script type=\"text/javascript\">
							document.getElementById(\"goTo" . $imageIdArray[$number+$i] . "\").onclick = function () {
								location = \"" . $test . "\";
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
						$test = $imageUrlArray[$number+$i] . '?view=single#' . $imageIdArray[$number+$i];
						echo "<script type=\"text/javascript\">
							document.getElementById(\"goTo" . $imageIdArray[$number+$i] . "\").onclick = function () {
								location = \"" . $test . "\";
							};
						</script>";						
					}
				}
				echo"\n						</ul>\n					</div>\n				</li>\n";
			}
			$loopUntil = ceil($quoteNumber/8); 

				//stop making panels when we run out of cards, otherwise, an extra, empty panel will be created
			for($i=0;$i<($loopUntil);$i++) {
				$outputString = makePanel($titleArray, $thumbArray, $imageUrlArray, $imageIdArray,  $i*8);
				echo $outputString;
			}
			echo"			</ul><!--end #slider1-->\n		</div><!--end #content--> \n";
?>