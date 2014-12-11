		<div id="content" class="sixteen columns homeContent axiomContent">
			<ul id="slider">
		<?php
			$allQuoteLinks  = array();
			$allQuoteImgs = array();
			$allQuoteAlts = array();
			
			foreach ($allCards as $card) {
				$cardType = $card->getAttribute('type');
				
				$image=$card->getElementsByTagName('image')->item(0)->nodeValue;
				$hiRes=$card->getElementsByTagName('hiRes')->item(0)->nodeValue;
				$title=$card->getElementsByTagName('title')->item(0)->nodeValue;
				$imageId=$card->getElementsByTagName('title')->item(0)->getAttribute('id');
				$subtitle=$card->getElementsByTagName('subtitle')->item(0)->nodeValue;
				$authorLink=$card->getElementsByTagName('subtitle')->item(0)->getAttribute('href');
				$description=$card->getElementsByTagName('description')->item(0)->nodeValue;
				if($cardType == 'author'){
					$authorQuotes=$card->getElementsByTagName('authorQuotes')->item(0)->nodeValue;
				}
				$quoteLinks=$card->getElementsByTagName('quoted');
				
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
					}//end loop
				
				echo"		<li class=\"panel\">";
					if ($cardType == 'author'){
						echo"<div class=\"authorItem slide\" id=\"" . $imageId . "\">
						<a class=\"hires\" href=\"" . $hiRes . "\" title=\"&lt;a href=&#34;" . $hiRes . "&#34;&gt;Download this card&lt;/a&gt;\"><img src=\"" . $image . "\" class=\"authorPortrait\" alt=\"" . $title . "\" width=\"288\" height=\"432\" /></a>";
					} else {
						echo "<div class=\"axiomItem slide\" id=\"" . $imageId . "\">
						<a class=\"hires\" href=\"" . $hiRes . "\" title=\"&lt;a href=&#34;" . $hiRes . "&#34; target=&#34;blank&#34; &gt;Download this card&lt;/a&gt;\"><img src=\"" . $image . "\" alt=\"" . $title . "\" width=\"288\" height=\"432\" /></a>"; 
					
					}
						echo "<div class=\"axiomInfo\">";
						if($cardType == 'quote'){
							echo"<div class=\"quoteFlag\"></div> ";
						}else if($cardType == 'axiom'){
							echo"<div class=\"axiomFlag\"></div> ";
						}
						echo"<h1>" . $title . "</h1>"; 
						if ($cardType == 'author'){
							echo "<h5>" . $subtitle . "</h5>";
						} else if ($cardType == 'quote'){
							echo "<h4><a href=\"" . $authorLink . "\">" . $subtitle . "</a></h4>";
						}
						echo "<hr>
															" . $description . " 
					</div>"; 
						if ($cardType == 'author') {
							echo"<div class=\"quotedCards\">
							<ul>\n";
							
							for($i=0;$i<$quoteCount;$i++) {
								//you should add the alts to the xml file as attributes
								echo "								<li><a href=\"" . $allQuoteLinks[$i] . "\"><img src=\"" . $allQuoteImgs[$i] . "\" alt=\"" . $allQuoteAlts[$i] . "\" width=\"69\" height=\"98\" /></a></li>\n";
							}//end loop			
								echo	"							</ul>
									</div>	";
						}
					
				echo"</div> 
			</li> \n		";

			}		
		?>
			</ul><!--end #slider1-->
		</div><!--end #content-->