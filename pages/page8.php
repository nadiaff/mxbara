<script type="text/javascript">

var sTimer;
function pauseSlides () {

var slideTimes=[1000,2000,3500,1500,1500,4000];

var slideNo=jQuery('#mx8-slider').data('nivo:vars').currentSlide; 

if(slideTimes[slideNo]==0) return

jQuery('#mx8-slider .nivo-directionNav a').css('visibility','hidden');

clearInterval(sTimer); 
sTimer=setInterval(function() {
    jQuery('#mx8-slider .nivo-nextNav').trigger('click');
}, slideTimes[slideNo]);

};
</script>

	<div id="mx8-slider" class="nivoSlider">
		<img src="pages/img/door1.gif" alt="" />
		<img src="pages/img/door2.gif" alt="" />
		<img src="pages/img/door6.gif" data-transition="fade" alt="" />
		<img src="pages/img/door3.png" data-transition="fade" alt="" />
		<img src="pages/img/door4.gif" data-transition="fade" alt="" />
		<img src="pages/img/door5.png" data-transition="fade" alt="" />
	</div>
	
	<script type="text/javascript">
	jQuery(window).load(function() {
    jQuery('#mx8-slider').nivoSlider({
      effect: 'slideInLeft',
	  pauseOnHover:false,
      controlNav:false,
      afterLoad:function(){
         jQuery('#mx8-slider').data('nivo:vars').stop=true;
         pauseSlides ()},
      afterChange:function(){
         pauseSlides ()}
      });
    });
		
	
		
	/*$(window).load(function() {
		$('#mx8-slider').nivoSlider();
	});
	
	$('#mx8-slider').nivoSlider({
		effect: 'slideInLeft',			// Specify effects
		directionNav: false,            // Next & Prev navigation
		controlNav: false, 				// Show control navigation
		pauseTime: 2500,                // How long each slide will show
		pauseOnHover: false				// Stop animation while hovering
		afterLoad:function() {
			$('#mx8-slider').data('nivo:vars').stop=true;
			pauseSlides()},
		afterChange.function(){	
			pauseSlides()}
	});*/
	
	</script>
	
	<p class="comix-text">Tempting. Sorely tempting. But work doesn't end for another couple hours.</p>
	<p class="command comix-command">> 