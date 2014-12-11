		<div id="content" class="sixteen columns singleContent quoteContent">
			<ul id="slider">

				<?php
			//loops through designaxioms.xml, grabs all the cards that are quotes, spits them out in single card per slide format
			foreach ($allCards as $card) {
				$cardType = $card->getAttribute('type');
				
				if($cardType == 'quote'){
				$image=$card->getElementsByTagName('image')->item(0)->nodeValue;
				$hiRes=$card->getElementsByTagName('hiRes')->item(0)->nodeValue;
				$title=$card->getElementsByTagName('title')->item(0)->nodeValue;
				$imageId=$card->getElementsByTagName('title')->item(0)->getAttribute('id');
				$subtitle=$card->getElementsByTagName('subtitle')->item(0)->nodeValue;
				$authorLink=$card->getElementsByTagName('subtitle')->item(0)->getAttribute('href');
				$description=$card->getElementsByTagName('description')->item(0)->nodeValue;
				
				echo"		<li class=\"panel\"> 
				<div class=\"axiomItem slide\" id=\"" . $imageId . "\"> 
					<a class=\"hires\" href=\"" . $hiRes . "\" title=\"&lt;a href=&#34;" . $hiRes . "&#34; target=&#34;blank&#34; &gt;Download this card&lt;/a&gt;\"><img src=\"" . $image . "\" alt=\"" . $title . "\" width=\"288\" height=\"432\" /></a> 
					<div class=\"axiomInfo\"><div class=\"quoteFlag\"></div> 
						<h1>" . $title . "</h1> 
						<h4><a href=\"" . $authorLink . "\">" . $subtitle . "</a></h4>
						<hr>
															" . $description . " 
					</div> 
				</div> 
			</li> \n		";
				}
			}		
		?>
				
			</ul><!--end #slider1-->
		</div><!--end #content-->
	