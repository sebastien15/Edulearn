

	<!-- Js files -->
	<!-- JavaScript -->
	<script src="{{asset ('publicUsers/js/jquery-2.2.3.min.js')}}"></script>
	<!-- Default-JavaScript-File -->
	<script src="{{asset ('publicUsers/js/bootstrap.js')}}"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- banner slider -->
	<script src="{{asset ('publicUsers/js/slider.js')}}"></script>
	<!-- //banner slider -->

	<!-- testimonial-plugin -->
	<script src="{{asset ('publicUsers/js/mislider.js')}}"></script>
	<script>
		jQuery(function ($) {
			var slider = $('.mis-stage').miSlider({
				//  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
				stageHeight: 320,
				//  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
				slidesOnStage: false,
				//  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
				slidePosition: 'center',
				//  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
				slideStart: 'mid',
				//  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
				slideScaling: 150,
				//  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
				offsetV: -5,
				//  Center slide contents vertically - Boolean. Default: false
				centerV: true,
				//  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
				navButtonsOpacity: 1,
			});
		});
	</script>
	<!-- //testimonial-plugin -->

	<!-- numscroller-js-file -->
	<script src="{{asset ('publicUsers/js/numscroller-1.0.js')}}"></script>
	<!-- //numscroller-js-file -->

	<!-- smooth scrolling -->
	<script src="{{asset ('publicUsers/js/SmoothScroll.min.js')}}"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="{{asset ('publicUsers/js/move-top.js')}}"></script>
	<!-- easing -->
	<script src="{{asset ('publicUsers/js/easing.js')}}"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="{{asset ('publicUsers/js/edulearn.js')}}"></script>

	<!-- //Js files -->

