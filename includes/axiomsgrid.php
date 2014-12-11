<div class="sixteen columns">
			<div class="gridItem gridContent">
			<?php
				$gridCount = 0;  
				echo "	<ul>";
				foreach ($allCards as $card) {
				
					if($gridCount==4) {
						   $gridCount = 0;  
						echo "\n				</ul>\n				<ul>";  
					}  
					
					$cardType = $card->getAttribute('type');

					if($cardType == 'axiom'){
						$title=$card->getElementsByTagName('title')->item(0)->nodeValue;
						$thumb=$card->getElementsByTagName('thumb')->item(0)->nodeValue;
						$imageId=$card->getElementsByTagName('title')->item(0)->getAttribute('id');
						
						//$imageUrl=$card->getElementsByTagName('thumb')->item(0)->getAttribute('url');
						//echo "\n"."					<li><a href=\"" . $imageUrl . "\"><img src=\"" . $thumb . "\" alt=\"".$title."\"/></a></li>";
						echo "\n"."					<li><a href=\"axioms.php?view=single#" . $imageId . "\" id=\"" . $imageId . "\"><img src=\"" . $thumb . "\" alt=\"".$title."\"/></a></li>";
						
						$gridCount++;
					}
				}
				echo "\n				</ul>\n";
			?>
			</div><!--end #content-->
		</div>