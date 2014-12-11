		<div id="content" class="sixteen columns minimContent axiomContent">
			<ul id="slider">
<?php
			//$allQuoteLinks  = array();
			//$allQuoteImgs = array();
			//$allQuoteAlts = array();
			
			foreach ($allCards as $card) {
				$cardType = $card->getAttribute('type');
				
				if($cardType == 'author'){
					$image=$card->getElementsByTagName('image')->item(0)->nodeValue;
					$hiRes=$card->getElementsByTagName('hiRes')->item(0)->nodeValue;
					$title=$card->getElementsByTagName('title')->item(0)->nodeValue;
					//$imageId=$card->getElementsByTagName('title')->item(0)->getAttribute('id');
					//$subtitle=$card->getElementsByTagName('subtitle')->item(0)->nodeValue;
					//$authorQuotes=$card->getElementsByTagName('authorQuotes')->item(0)->nodeValue;
					//$quoteLinks=$card->getElementsByTagName('quoted');
					
					//loop to get all quotes, push to array
					//$quoteCount = 0;
			
					/*foreach($quoteLinks as $quoteLink) {
						$quoteLink = $card->getElementsByTagName('quoted')->item($quoteCount)->getAttribute('url');
						$quoteAlt = $card->getElementsByTagName('quoted')->item($quoteCount)->getAttribute('title');
						$quoteImg = $card->getElementsByTagName('quoted')->item($quoteCount)->nodeValue;
						$allQuoteLinks[] = $quoteLink;
						$allQuoteImgs[] = $quoteImg;
						$allQuoteAlts[] = $quoteAlt;
						$quoteCount++;
					}//end loop*/
					
			echo"		<li class=\"panel\"> 
					<div class=\"minimalItem slide\"> 
						<a class=\"hires\" href=\"" . $hiRes . "\" title=\"&lt;a href=&#34;" . $hiRes . "&#34; target=&#34;blank&#34; &gt;Download this card&lt;/a&gt;\"><img src=\"" . $image . "\" alt=\"" . $title . "\" width=\"288\" height=\"432\" /></a> 
						<p class=\"authorTitle\">" . $title . "</p>
					</div> 
				</li> \n		";
				}
			}		
		?>	
			</ul><!--end #slider-->
		</div><!--end #content-->