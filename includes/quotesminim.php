		<div id="content" class="sixteen columns minimContent quoteContent">
			<ul id="slider">

				<?php
			foreach ($allCards as $card) {
				$cardType = $card->getAttribute('type');
				
				if($cardType == 'quote'){
				$image=$card->getElementsByTagName('image')->item(0)->nodeValue;
				$hiRes=$card->getElementsByTagName('hiRes')->item(0)->nodeValue;
				$title=$card->getElementsByTagName('title')->item(0)->nodeValue;
				//$imageId=$card->getElementsByTagName('title')->item(0)->getAttribute('id');
				$subtitle=$card->getElementsByTagName('subtitle')->item(0)->nodeValue;
				$authorLink=$card->getElementsByTagName('subtitle')->item(0)->getAttribute('href');
				
				echo"		<li class=\"panel\"> 
				<div class=\"minimalItem slide\">
					<a class=\"hires\" href=\"" . $hiRes . "\" title=\"&lt;a href=&#34;" . $hiRes . "&#34; target=&#34;blank&#34; &gt;Download this card&lt;/a&gt;\"><img src=\"" . $image . "\" alt=\"" . $title . "\" width=\"288\" height=\"432\" /></a> 
					<p>" . $title . "</p>
					<p><a href=\"" . $authorLink . "\">" . $subtitle . "</a></p>
				</div> 
			</li> \n		";
				}
			}		
		?>
				
			</ul><!--end #slider1-->
		</div><!--end #content-->
	