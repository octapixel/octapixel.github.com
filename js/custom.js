$('document').ready(function(){

	/* Set a isMobile flag if the device is mobile */
	isMobile = false;
	if($('.isMobile').css('display') == 'block'){
		isMobile = true;
	}
	else
	{
		isMobile = false;
	}

	ele = null;

	/* check if mobile on resize of the window */
	$(window).resize(function(){
		if($('.isMobile').css('display') == 'block'){
			isMobile = true;
		}
		else
		{
			isMobile = false;
		}
	})

	/* on click of menuControl1 icon */
	$('button.menuControl1').click(function(){
		$('.navbarItems').toggleClass('opened');
	});

	/* on click of home navbar link */
	$('#navbarHome').click(function(){
		if(canClick())
		{
			$('.navbarItems li').removeClass('active');
			$(this).addClass('active');
			hideCurrent($('.header'));
			$('.strategy').hide().fadeIn(500);
			$('.teamHeader').show().fadeOut(500);
			if(isMobile){
				$('.menuControl1 button').click();
			}
		}
	});


	/* on click of contact navbar link */
	$('#navbarContact').click(function(){
		if(canClick())
		{
			$('.navbarItems li').removeClass('active');
			$(this).addClass('active');
			$('.strategy').show().fadeOut(500);
			$('.teamHeader').show().fadeOut(500);
			hideCurrent($('.contact'));
			if(isMobile){
				$('.menuControl1 button').click();
			}
		}
	});

	/* on click of services navbar link */
	$('#navbarServices').click(function(){
		if(canClick())
		{
			$('.navbarItems li').removeClass('active');
			$(this).addClass('active');
			$('.strategy').show().fadeOut(500);
			$('.teamHeader').show().fadeOut(500);
			hideCurrent($('.services'));
			if(isMobile){
				$('.menuControl1 button').click();
			}
		}
	});

	/* on click of team navbar link */
	$('#navbarTeam').click(function(){
		if(canClick())
		{
			$('.navbarItems li').removeClass('active');
			$(this).addClass('active');
			$('.teamHeader').hide().fadeIn(500);
			$('.strategy').show().fadeOut(500);
			hideCurrent($('.team'));
			if(isMobile){
				$('.menuControl1 button').click();
			}
		}
	});

	/* on click of showcase navbar link */
	$('#navbarShowcase').click(function(){
		if(canClick())
		{
			$('.navbarItems li').removeClass('active');
			$(this).addClass('active');
			$('.teamHeader').show().fadeOut(500);
			$('.strategy').hide().fadeIn(500);
			hideCurrent($('.projects'));

			if(isMobile){
				$('.menuControl1 button').click();
			}
		}
	});

	/* contact submit button pressed */
	$('#contactSubmit').click(function(){
		return false;
	});

	/* on click of backMenu */
	$('.backMenu').click(function(){
		 $("html, body").animate({ scrollTop: 0 }, 600);
    	 return false;
	});

	router();

});

var router = function()
{
	var url = location.href;
	var hash = url.substring(url.indexOf('#')+1);
	if(hash == 'home')
	{
		showPage($('.header'));
		$('.navbarItems li').removeClass('active');
		$("#navbarHome").addClass('active');
	} 
	else if(hash == 'about')
	{
		showPage($('.team'));
		$('.navbarItems li').removeClass('active');
		$("#navbarTeam").addClass('active');
	} 
	else if(hash == 'services')
	{
		showPage($('.services'));
		$('.navbarItems li').removeClass('active');
		$("#navbarServices").addClass('active');
	} 
	else if(hash == 'showcase')
	{
		showPage($('.projects'));
		$('.navbarItems li').removeClass('active');
		$("#navbarShowcase").addClass('active');
	} 
	else if(hash == 'connect')
	{
		showPage($('.contact'));
		$('.navbarItems li').removeClass('active');
		$("#navbarContact").addClass('active');
	} 
	else
	{
		showPage($('.header'));
		$('.navbarItems li').removeClass('active');
		$("#navbarHome").addClass('active');
	}
}

var clicked = false;
var timeoutHandle = null;
function canClick(){
	if(!clicked)
	{
		clicked = true;
		timeoutHandle = setTimeout(function() {
			clicked = false;
			clearTimeout(timeoutHandle);
		}, 500);
		return true;
	}
	else
	{
		return false;
	}
}


function showPage(eleNew){
	ele = eleNew;
	ele.css('margin-left',ele.css('margin-left').slice(0, -1)-2+'%');
	ele.parent().addClass('active');
	ele.css('opacity','0');
	ele.animate({marginLeft:"+=2%", opacity:"1"}, 500, function(){
		ele.css('margin-left', convertToPercent(ele.css('margin-left'))+'%');
	});
	// $('.strategy').hide().fadeIn(500);
}

function hideCurrent(eleNew){
	elem = ele;
	ele = eleNew;

	if(!isMobile)
	{
		elem.animate({marginLeft:"-=2%", opacity:"0"}, 300, function(){
			elem.css('margin-left', convertToPercent(elem.css('margin-left'))+2+"%");
			elem.parent().removeClass('active');
			ele.css('margin-left',ele.css('margin-left').slice(0, -1)-2+'%');
			ele.parent().addClass('active');
			ele.css('opacity','0');
			ele.animate({marginLeft:"+=2%", opacity:"1"}, 500, function(){
				ele.css('margin-left', convertToPercent(ele.css('margin-left'))+"%");
			});
		});
	}
	else
	{
		elem.parent().removeClass('active');
		ele.parent().addClass('active');
	}
	
}

function convertToPercent(rawPixels){
	var pixels = rawPixels.slice(0, -2);
	var docWidth = $(document).width();
	var percent = (Math.round(pixels)*100)/docWidth;
	console.log("percent : "+Math.round(percent));
	return Math.round(percent);
}

function form_validator()
{
	var name = $(document).getElementById('txtName');
	var email = $(document).getElementById('txtEmail');
	var msg = $(document).getElementById('txtMessage');
	if (name == '' || email == '' || msg == '') {
		$("#info-msg").html('<b>Please fill all the details</b>');
		return false;
	}
	else
	{
		$("#info-msg").html('<b>Thank you</b>');	
		return true;
	}
}