$(document).ready(function(){
	var $slider=$('.slider');
	var $slide = 'li';
	var $transition_time=1000;
	var $time_between_slides=4000;
	var autoTurnTimer=null, $interval=null;
	function slides(){
		return $slider.find($slide);
	};
	slides().fadeOut();
	slides().first().addClass=('active');
	slides().first().fadeIn($transition_time);
	function turnCarousel(direction){
		var $i=$slider.find($slide+ '.active').index();
		slides().eq($i).removeClass('active');
		slides().eq($i).fadeOut($transition_time);
		$i=$i+direction;
		if($i>=slides().length || $i<0){
			$i=0;
		}else if($i<0){
			$i=slides().lenth-1;
		}
		slides().eq($i).fadeIn($transition_time);
		slides().eq($i).addClass('active');
	}
	function startAutoTurn(){
		$interval=setInterval(
			turnCarousel.bind(null,1)
			,$transition_time+$time_between_slides
			);
	};
	$('.next').click(function(){
		clearInterval($interval);
		clearTimeout(autoTurnTimer);
		turnCarousel(1);
		autoTurnTimer=setTimeout(startAutoTurn, 3000);
	});
	$('.prev').click(function(){
		clearInterval($interval);
		clearTimeout(autoTurnTimer);
		turnCarousel(-1);
		autoTurnTimer=setTimeout(startAutoTurn, 3000);
	});
});