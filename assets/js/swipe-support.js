var ss = {
	touching : false,
	firstpos : 0,
	startY   : 0,
	endpos   : 0,
	timer    : 0,
};

(function(){
	
	if(document.addEventListener){
		document.addEventListener('touchend', function(e){
			ss.endpos   = e.changedTouches[0].pageX;
			ss.touching = false;
			if(ss.timer < 100 && ( Math.abs( ss.endpos - ss.firstpos ) > 50) ){
				if( ss.endpos < ss.firstpos ){
					
					$('#slider').data('AnythingSlider').goForward();
					
				}else{
					
					$('#slider').data('AnythingSlider').goBack();

				}
			}
			ss.firstpos = 0;
			ss.endpos   = 0;
			ss.timer    = 0;
			ss.touching = false;
			ss.startY   = 0;
			
		}, false);
		document.addEventListener('touchstart', function(e){ 
			ss.firstpos = e.changedTouches[0].pageX;
			ss.touching = true;
			ss.startY 	= e.changedTouches[0].pageY;
			setTimeout(swipeStatus, 10);
		}, false);
		
		document.addEventListener('touchmove', function(e){
			
			var deltaX = Math.abs(e.changedTouches[0].pageX - ss.firstpos);
			var deltaY = Math.abs(e.changedTouches[0].pageY - ss.startY);
			
			if(deltaX > deltaY){
				e.preventDefault();
			}
			
		}, false);
	}

})();

function swipeStatus(){
	if(ss.touching){
		ss.timer += 10;
		setTimeout(swipeStatus, 10);
	
	}else{
		ss.touching = false;
	}
}
