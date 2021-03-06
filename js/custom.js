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
			$('#mapee').html('<iframe width="100%" height="70%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=R+D+Apartment,+Sri+Ram+Temple+Rd,+Ashwini+Layout,+Ejipura,+Bangalore,+Karnataka&amp;aq=0&amp;oq=RD+Apa&amp;sll=12.953997,77.63094&amp;sspn=0.835119,1.349945&amp;ie=UTF8&amp;hq=&amp;hnear=R+D+Apartment,+Sri+Ram+Temple+Rd,+Ashwini+Layout,+Ejipura,+Bangalore,+Bangalore+Urban,+Karnataka+560095&amp;t=m&amp;z=16&amp;iwloc=A&amp;ll=12.942106,77.628117&amp;output=embed&amp;iwloc=A"></iframe><br /><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=R+D+Apartment,+Sri+Ram+Temple+Rd,+Ashwini+Layout,+Ejipura,+Bangalore,+Karnataka&amp;aq=0&amp;oq=RD+Apa&amp;sll=12.953997,77.63094&amp;sspn=0.835119,1.349945&amp;ie=UTF8&amp;hq=&amp;hnear=R+D+Apartment,+Sri+Ram+Temple+Rd,+Ashwini+Layout,+Ejipura,+Bangalore,+Bangalore+Urban,+Karnataka+560095&amp;t=m&amp;z=14&amp;iwloc=A&amp;ll=12.942106,77.628117" style="color:#0000FF;text-align:left">View Larger Map</a></small>');
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
		$('#mapee').html('<iframe width="100%" height="70%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Octapixel,+Sri+Ram+Temple+Rd,+Ashwini+Layout,+Ejipura,+Bangalore,+Karnataka&amp;aq=0&amp;oq=RD+Apa&amp;sll=12.953997,77.63094&amp;sspn=0.835119,1.349945&amp;ie=UTF8&amp;hq=&amp;hnear=R+D+Apartment,+Sri+Ram+Temple+Rd,+Ashwini+Layout,+Ejipura,+Bangalore,+Bangalore+Urban,+Karnataka+560095&amp;t=m&amp;z=16&amp;iwloc=A&amp;ll=12.942106,77.628117&amp;output=embed&amp;iwloc"></iframe><br /><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=R+D+Apartment,+Sri+Ram+Temple+Rd,+Ashwini+Layout,+Ejipura,+Bangalore,+Karnataka&amp;aq=0&amp;oq=RD+Apa&amp;sll=12.953997,77.63094&amp;sspn=0.835119,1.349945&amp;ie=UTF8&amp;hq=&amp;hnear=R+D+Apartment,+Sri+Ram+Temple+Rd,+Ashwini+Layout,+Ejipura,+Bangalore,+Bangalore+Urban,+Karnataka+560095&amp;t=m&amp;z=14&amp;iwloc=A&amp;ll=12.942106,77.628117" style="color:#0000FF;text-align:left" target="_blank">View Larger Map</a></small>');
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

	if(isMobile || !isMobile)
	{
		elem.parent().removeClass('active');
		ele.parent().addClass('active');
	}
	else
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
	showwaiter("Please wait while we gather your query ...");
	var name = document.getElementById('txtName').value;
	var email = document.getElementById('txtEmail').value;
	var msg = document.getElementById('txtMessage').value;
	if (name == '' || email == '' || msg == '') {
		showmsg("Please fill all the details.");
	}
	else
	{
		var setTimeoutHandle = setTimeout(function(){
			jQuery.ajax({
				url: 'contact.php',
				type: 'POST',
				data: {name: name, email: email, message: msg},
				success: function(data){
					showmsg(data);
					clearTimeout(setTimeoutHandle);
					if(data == "Thank you for contacting us. We will get back to you ASAP.")
					{
						$("input[type='text'],input[type='email'], textarea").val('');
					}
				}, async: false
			});
		}, 2000);
		
	}
}


var showmsg = function(html){
		$(".infoMsg").html(html);
		$(".infoMsgWrapper").css('top', '-10%');
		$(".infoMsgWrapper").css('display', 'block');

		hidewaiter();
		$(".infoMsgWrapper").animate({
			top: "1%"
		}, 300);

		$(".infoMsgWrapper").delay(3000);

		$(".infoMsgWrapper").animate({
			top: "-10%"
		}, 300, function(){
			$(this).css('display', 'none');
		});		

}

var showwaiter = function(text){
	if(typeof text !== 'undefined')
		$(".waiterText").html(text);
	$(".waiterWrapper").stop().fadeIn(400);
}

var hidewaiter = function(){
	$(".waiterWrapper").stop().fadeOut(200);
}