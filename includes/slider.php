<!--SLIDER-->
	<!--<link rel="stylesheet" type="text/css" href="./assets/css/anythingslider.css">-->
	<script src="./assets/js/jquery.anythingslider.js"></script>
	<script src="./assets/js/jquery.easing.1.2.js"></script>
	<script>
		// Set up Sliders
		// **************
		window.onload = function() { 
				var cpanel = 1;
				if(window.location.hash != ''){
					var cna = window.location.hash;
					cna = cna.split('#');
					var cc = cna[1];
					var indx = 0;
					$('.slide').each(function(){
						indx ++;
						if( $(this).attr('id') == cc ){
							cpanel = indx;
						}
					});
				}
				$('#slider').anythingSlider({
					easing          : 'easeOutBack',
					buildNavigation     : false,      // If true, builds a list of anchor links to link to each panel
					startPanel          : cpanel, //see if we can pass a value here from multi/grid pages to single instead of hash nav
					buildStartStop      : false,
				});
		}
	</script>