// Coded by Embuscado
$(document).ready(function(){
	
	// slidesshow of the homepage
	$("#mainslide").awShowcase({
		content_width:			850,
		content_height:			356,
		fit_to_parent:			false,
		auto:					true,
		interval:				8000,
		continuous:				true,
		loading:				true,
		tooltip_width:			200,
		tooltip_icon_width:		32,
		tooltip_icon_height:	32,
		tooltip_offsetx:		18,
		tooltip_offsety:		0,
		arrows:					true,
		buttons:				true,
		btn_numbers:			true,
		keybord_keys:			true,
		mousetrace:				false, /* Trace x and y coordinates for the mouse */
		pauseonover:			true,
		stoponclick:			false,
		transition:				'fade', /* hslide/vslide/fade */
		transition_delay:		0,
		transition_speed:		1000,
		show_caption:			'onload', /* onload/onhover/show */
		thumbnails:				false,
		thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
		thumbnails_direction:	'vertical', /* vertical/horizontal */
		thumbnails_slidex:		1, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
		dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
		speed_change:			true, /* Set to true to prevent users from swithing more then one slide at once. */
		viewline:				false, /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
		custom_function:		null /* Define a custom function that runs on content change */
	});
	
	
	// Credo Grid Panel - START
	$("#credoTxt").hide();
	
	$("#credoGrid").hover(function(){
		$("#credoGrid").css({'background-image':'none', 'background-color': '#A52A2A'});
		$("#credoTxt").slideToggle();
	});
	$("#credoGrid").mouseleave(function(){
		$("#credoGrid").css({'background-image':'url("./assets/credo.jpg")', 'background-color': '#A52A2A', 'background-size':'100% auto','width':'62%', 'height':'248px','padding': '1%'});
	});
	// Credo Grid Panel - END
	
	// Capabilities Panel - START
	$(".capabilitiesContent").hide();
	
	$("#capabilitiesGrid").hover(function(){
		$("#capabilitiesGrid").css({'background-image':'none', 'background-color': '#C36241'});
		$(".capabilitiesContent").slideToggle(1600);
	});
	
	$("#capabilitiesGrid").mouseleave(function(){
		$("#capabilitiesGrid").css({ 'background':'#C36241','background-image':'url("./assets/capabilities.jpg")','background-size':'100% auto', 'color':'white','width':'97%','padding':'1%','height':'390px','margin-right':'1%'});
	});
	// Capabilities Panel  - END
	
	// Our Story - START
	var ele   = $('.scrollStory');
    var speed = 30, scroll = 2, scrolling;
    
    $('#readNextStory').mouseenter(function() {
        // Scroll the element up
        scrolling = window.setInterval(function() {
            ele.scrollTop( ele.scrollTop() - scroll );
        }, speed);
    });
    
    $('#readPrevStory').mouseenter(function() {
        // Scroll the element down
        scrolling = window.setInterval(function() {
            ele.scrollTop( ele.scrollTop() + scroll );
        }, speed);
    });
    
    $('#readPrevStory, #readNextStory').bind({
        click: function(e) {
            // Prevent the default click action
            e.preventDefault();
        },
        mouseleave: function() {
            if (scrolling) {
                window.clearInterval(scrolling);
                scrolling = false;
            }
        }
    });
	// Our Story - END
    
	// Modal Inquiry Form Modal Part - START
	// shows modal of inquiry form modal
	$('#showinqForm').click(function(e) {
        e.preventDefault();
        $('#inquiryForm').reveal({animation: 'fadeAndPop'});
	});
	
	// shows real modal inquiry form in product page
	$('#showinqform').on('click', function(){
		$('#inquiryForm').reveal({animation: 'fadeAndPop'});
	});
	
	//validates inquiry form
	$('#submitInq').click(function(){
		$("#inqResponse").html("<font color='red'>hello world</font>");
	});
	
	// Color Swatches
	$(".bxslider").bxSlider({
		mode: 'fade',
		captions: true
	});
	
	// Custom BXSlider wrapper
	$(".bx-wrapper").css("width", "98%");
	
	// Product list
	$("#productsListahan").pajinate();
	// END of produt List
	
});