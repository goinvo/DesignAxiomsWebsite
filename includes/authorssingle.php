		<div id="content axiomContent" class="sixteen columns authorSingle">
			<ul id="slider">
		<?php
			foreach ($allCards as $card) {
				$cardType = $card->getAttribute('type');
				
				if($cardType == 'author'){
					$image=$card->getElementsByTagName('image')->item(0)->nodeValue;
					$hiRes=$card->getElementsByTagName('hiRes')->item(0)->nodeValue;
					$title=$card->getElementsByTagName('title')->item(0)->nodeValue;
					$imageId=$card->getElementsByTagName('title')->item(0)->getAttribute('id');
					$subtitle=$card->getElementsByTagName('subtitle')->item(0)->nodeValue;
					$description=$card->getElementsByTagName('description')->item(0)->nodeValue;
					$authorQuotes=$card->getElementsByTagName('authorQuotes')->item(0)->nodeValue;
					$quoteLinks=$card->getElementsByTagName('quoted');
					//$uniquetitle = $card->getElementsByTagName('title')->item(0);
					//$uniquetitle = $uniquetitle->attributes->getNamedItem('id');
					//$uniquetitle = $uniquetitle->nodeValue;
					
					echo"		<li class=\"panel\"> 
					<div class=\"authorItem slide\" id=\"" . $imageId . "\"> 
						<a id=\"hires\" href=\"" . $hiRes . "\" title=\"&lt;a href=&#34;" . $hiRes . "&#34; target=&#34;blank&#34; &gt;Download this card&lt;/a&gt;\"><img src=\"" . $image . "\" class=\"authorPortrait\" alt=\"" . $title . "\" width=\"288\" height=\"432\" /></a> 
						<div class=\"axiomInfo\"> 
							<div class=\"authorFlag\"></div>
							<h1>" . $title . "</h1> 
							<h5>" . $subtitle . "</h5>
							<hr>
																" . $description . " 
						</div>

						<div class=\"quotedCards\">
							<ul>\n";
					
					//loop to get all quotes, push to array
					$quoteCount = 0;
					foreach($quoteLinks as $quoteLink) {
						$quoteLink = $card->getElementsByTagName('quoted')->item($quoteCount)->getAttribute('url');
						$quoteAlt = $card->getElementsByTagName('quoted')->item($quoteCount)->getAttribute('title');
						$quoteImg = $card->getElementsByTagName('quoted')->item($quoteCount)->nodeValue;
						$quoteCount++;
						echo "								<li><a href=\"" . $quoteLink . "\"><img src=\"" . $quoteImg . "\" alt=\"" . $quoteAlt . "\" width=\"69\" height=\"103\" /></a></li>\n";
					}//end loop		
						
					echo	"							</ul>
						</div>
						
					</div> 
				</li> \n		";
				}
			}

			
			
		?>
			</ul><!--end #slider1-->
		</div><!--end #content-->
		 
		<script type="text/javascript">
			var name = self.location;
			
			var name = self.location;
			
			window.onload = function (){ 
				var curloc   = self.location + '';
				var twoparts = curloc.split('#');
				var finalid  = twoparts[1];
				//console.log( finalid );
				//window.location = finalid; 
				//var slider = document.getElementById("slider");
				//slider.setAttribute("style","left:" . panelLoc . "px");
				//console.log( slider.style.left );
			};
			
			
			
			/*setTimeout(function(){
				var slider = document.getElementById("slider");
				slider.setAttribute("style","left:200px");
				console.log( slider.style.left );
			}, 1000);*/
		
		</script>