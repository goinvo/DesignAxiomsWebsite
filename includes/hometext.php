		<div id="content" class="sixteen columns singleContent axiomContent">
			<ul id="slider">
		<?php
			//$allQuoteLinks  = array();
			//$allQuoteImgs = array();
			//$allQuoteAlts = array();
			
			foreach ($allCards as $card) {
				$cardType = $card->getAttribute('type');
				$imageUrl=$card->getElementsByTagName('thumb')->item(0)->getAttribute('url');
				$title=$card->getElementsByTagName('title')->item(0)->nodeValue;
				$imageId=$card->getElementsByTagName('title')->item(0)->getAttribute('id');
				$subtitle=$card->getElementsByTagName('subtitle')->item(0)->nodeValue;
				$authorLink=$card->getElementsByTagName('subtitle')->item(0)->getAttribute('href');
				$description=$card->getElementsByTagName('description')->item(0)->nodeValue;
				if($cardType == 'author'){
					$authorQuotes=$card->getElementsByTagName('authorQuotes')->item(0)->nodeValue;
				}
				/*$quoteLinks=$card->getElementsByTagName('quoted');
				
				//loop to get all quotes, push to array
					$quoteCount = 0;
			
					foreach($quoteLinks as $quoteLink) {
						
						$quoteLink = $card->getElementsByTagName('quoted')->item($quoteCount)->getAttribute('url');
						$quoteAlt = $card->getElementsByTagName('quoted')->item($quoteCount)->getAttribute('title');
						$quoteImg = $card->getElementsByTagName('quoted')->item($quoteCount)->nodeValue;
						$allQuoteLinks[] = $quoteLink;
						$allQuoteImgs[] = $quoteImg;
						$allQuoteAlts[] = $quoteAlt;
						$quoteCount++;
					}//end loop*/
				
				echo"		<li class=\"panel\">";
					
						echo"<div class=\"axiomItem slide\" id=\"" . $imageId . "\">
							<div class=\"textInfo\">
								<h1><a href=\"" . $imageUrl . "\">" . $title . "</a></h1>"; 
						if ($cardType == 'author'){
							echo "<h5>" . $subtitle . "</h5>";
						} else if ($cardType == 'quote'){
							echo "<h4><a href=\"" . $authorLink . "\">" . $subtitle . "</a></h4>";
						}
						echo "<hr>
															" . $description . " 
						</div>
					</div> 
			</li> \n		";

			}		
		?>
			</ul><!--end #slider1-->
		</div><!--end #content-->