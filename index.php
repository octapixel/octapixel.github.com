<! DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=no" />
	<title>OctaPixel</title>
	<link rel="icon" type="image/png" href="img/blackWithTransparent.png" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
    <script>
		var myCenter=new google.maps.LatLng(12.941838,77.628332);

		function initialize()
		{
		var mapProp = {
		  center:myCenter,
		  zoom:17,
		  scrollwheel:false,
		  draggable:false,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
		  };

		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

		var marker=new google.maps.Marker({
		  position:myCenter,
		  });

		marker.setMap(map);

		var infowindow = new google.maps.InfoWindow({
		  content:"<div class='infoAddress'><strong>OctaPixel</strong><br>20th H Cross, Sri Rama Temple road, <br> near Preethi Bakery, Ejipura, <br> Bangalore-560047</div>",
		  maxWidth: 500
		  });

		infowindow.open(map,marker);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
		google.maps.event.addDomListener(window, 'load', function() {
		    var l = $('.infoAddress').parent().parent().parent().siblings();
		    for (var i = 0; i < l.length; i++) {
		        if($(l[i]).css('z-index') == 'auto') {
		            $(l[i]).css('border-radius', '16px 16px 16px 16px');
		            $(l[i]).css('border', '2px solid red');
		        }
		    }
		});
	</script>
</head>
<body>
	<div class="mainWrapper">
		<div class="navbar">
			<div class="logo" title="Octa Pixel">
				<img src="img/orangeWithTransparent.png" class="logoImg"/> 
				<span class="tagline" title="Octapixel">OctaPixel</span>
				<span class="menuControl1">
					<button class="menuControl1" style="display:none;"><img src="img/menu.png"></button>
				</span>
			</div>
			
			<ul class="navbarItems opened" id="navbarItems">
				<a href="#home"><li class="active" id="navbarHome" title="Home">Home</li></a>
				<a href="#about"><li id="navbarTeam" title="Team">About</li></a>
				<a href="#services"><li id="navbarServices" title="Services">Services</li></a>
				<a href="#showcase"><li id="navbarShowcase" title="Showcase">Showcase</li></a>
				<a href="#connect"><li id="navbarContact" title="Connect">Connect</li></a>
			</ul>
		</div>	
		
		<div class="homeWrapper wrapper">
			<!-- <div class="header" id="header">If you are thinking about a more meaningful, memorable and engaging way to go big with what you are doing now, <br><br><span style="margin-left:-7%;"> we should be talking!</span></div> -->
			<div class="header" id="header">
				<img src="img/hourglass.png" class="hourglass" />
			 	Octa Pixel is based on the belief that every company has room to grow. We see beyond roadblocks and changing needs in time to help your business reach the next level. <br><br> <div style="text-align:right; width: 100%;">- because that's what we were taught since the first grade! </div></div>
			<div class="strategy">
				<div class="strategyHeader">What makes us different?</div>
				<div class="strategyContent">
					<img src="img/value.png" class="valueImg"/>
					<h2> Value-Based </h2>
					<div class="details">We deliver extreme value. When possible, we suggest value-based options to align our interests and focus on results.</div>
				</div>

				<div class="strategyContent">
					<img src="img/autonomy.png" class="strategyImg"/>
					<h2> Autonomy </h2>
					<div class="details">Our team collaborates internally, online. We believe a passionate, autonomous, mobile team produces higher quality output.</div>
				</div>

				<div class="strategyContent">
					<img src="img/hourly.png" class="strategyImg"/>
					<h2> No Hourly Rates </h2>
					<div class="details">We prefer to focus on results; not lines, not hours spent. Let us worry about the work put in while you enjoy the fruits of our labor.</div>
				</div>

				<div class="strategyContent">
					<img src="img/partnerships.png" class="strategyImg"/>
					<h2> Partnerships </h2>
					<div class="details">We love partnering with companies to co-create great applications and platforms. If you think the fit is right, don't be shy, talk to us!</div>
				</div>
			</div>
			<div class="footer">Copyright &COPY; Octapixel 2013-2014</div>
		</div>


		<div class="servicesWrapper wrapper">
			<div class="services">
				<div class="webDevelopment service">
					<img src="img/web.png" />
					<br>
					<h2>Web Design &amp; Development</h2>
					To get you connected with the world, we get you online.
					<br>
					We develop websites that are beautiful in both ways- Functionally and Visually using MVC frameworks on PHP and Ruby.
				</div>

				<div class="standaloneDevelopment service">
					<img src="img/standalone.png" />
					<br>
					<h2>Standalone Application Development</h2>
					Either you are online or in the local network at your office, we are here to help you make your business more efficient.
					<br>
					We develop standalone applications using c#.net and Java/J2EE.
				</div>
				<div class="cmsDevelopment service">
					<img src="img/cms.png" />
					<br>
					<h2>Content Management System (CMS)</h2>
					Times changes, Business improve. We know you want to give more to your customers. If you can't code it, you can just type it using CMS.
					<br>
					We also develop your websites in Drupal and Wordpress.
				</div>
				<div class="seoDevelopment service">
					<img src="img/seo.png" />
					<br>
					<h2>Search Engine Optimization</h2>
					Everyone like to be on top. Especially when you are an answer to a question. We help you become 'the' answer to a question when somebody questions on web.
				</div>
			</div>
			<div class="footer">Copyright &COPY; Octapixel 2013-2014</div>
		</div>


		<div class="showcaseWrapper wrapper">
			<div class="projects">
				<div class="project">
					<a href="http://www.tshirtbeku.com" target="_blank"><img src="img/tsb.png" /></a><br>
					<div class="projectDetails"> 
					 	<a href="http://www.tshirtbeku.com" target="_blank">
					 		<div class="projectHeader"> TSHIRTBEKU.COM </div>
					 	</a>
					 	<div class="projectDesc">
					 		A simple static website for a startup company of enthusiastic enterpreneurs with a creative sense to provide t-shirts, hoodies, etc; with custom designing.
					 		<br><br>
							Built on HTML5, CSS3, jQuery, PHP
					 	</div>
					</div>
				</div>
				<!-- <div class="project">
					<a href="http://www.srindhu.in" target="_blank"><img src="img/tsb.png" /></a><br>
					<div class="projectDetails"> 
					 	<a href="http://www.srindhu.in" target="_blank">
					 		<div class="projectHeader"> SRINDHU.IN </div>
					 	</a>
					 	<div class="projectDesc">
					 		A wedding website with a notion of thanks-giving for all the wishes and blessings they recieved from their family, friends and relatives. Also, showcasing the wedding gallery for everyone.
					 		<br><br>
					 		Built on HTML5, CSS3, jQuery, PHP <br>---- Under Development
					 	</div>
					</div>
				</div> -->
				<div class="project">
					<div class="projectDetails"> 
					 	<div class="projectHeader"> Connect with us, and yours will be next. </div>
					 	<div class="projectDesc">
					 	</div>
					</div>
				</div>


			</div>
			<div class="strategy">
				<div class="strategyHeader">How we do it?</div>
				<div class="strategyContent">
					<img src="img/icon-plan.png" class="valueImg"/>
					<h2> Plan </h2>
					<div class="details">
						We listen. We learn about you, your needs and wants, and then we create a goal-oriented strategy.
					</div>
				</div>

				<div class="strategyContent">
					<img src="img/icon-build.png" class="strategyImg"/>
					<h2> Build </h2>
					<div class="details">We take your goals and strategy, then combine them with our talent and expertise to build what you need.</div>
				</div>

				<div class="strategyContent">
					<img src="img/icon-test.png" class="strategyImg"/>
					<h2> Test </h2>
					<div class="details">We debug, test and retest, and make final preparations for multiple environments.</div>
				</div>

				<div class="strategyContent">
					<img src="img/icon-launch.png" class="strategyImg"/>
					<h2> Launch </h2>
					<div class="details">Your site goes live - seamless and fast. No downtime, no worries.</div>
				</div>
			</div>
			<div class="footer">Copyright &COPY; Octapixel 2013-2014</div>
		</div>

		<div class="teamWrapper wrapper">
			<center><div class="teamHeader">
				About Us
			</div>
			<div class="about teamHeader">
				"Octa Pixel" is not a Greek word, nor Latin. It is a word that represents the motto of our company. A pixel is a smallest measure of a display and Octa represents the 8 directions. We want to repaint the world with digital terms in all directions.
				<br>And YES! We Have Painters.

			</div>
			<div class="teamHeader">Our Team</div>
			<div class="about teamHeader">We are a team of developers, designers and thinkers who craft beautiful websites. </div></center>
			<div class="team">
				<div class="member">
					<img class="img rounded thumbnail" data-direction="top" src="img/team/kisna.jpg" />
					<br>
					<div class="details">
						<div class="role">Krishna Wadawadigi </div>
						<div class="testimonial">
							<span class="author">Founder, UX-UI Designer  &amp; Marketing Head</span>
							<div class="social">
								<a target="_blank" href="https://www.facebook.com/krishna.bette"><img src="img/fb.png"></a>
								<a target="_blank" href="https//twitter.com/krishnabette"><img src="img/twitter.png"></a>
								<a target="_blank" href="http://www.linkedin.com/pub/krishna-wadawadigi/62/872/ba"><img src="img/linkedin.png"></a>
								<a target="_blank" href="https://plus.google.com/+KrishnaWadawadigi"><img src="img/gplus.png"></a>
							</div>
						</div>
					</div>
				</div>

				<div class="member">
					<img class="img rounded thumbnail" data-direction="top" src="img/team/arun1.jpg" />
					<br>
					<div class="details">
						<div class="role">Arun Kolhapur</div>
						<div class="testimonial">
							<span class="author">Co-Founder, Designer &amp; Developer</span>
							<div class="social">
								<a target="_blank" href="https://www.facebook.com/arunko350"><img src="img/fb.png"></a>
								<a target="_blank" href="https://twitter.com/arun_k350"><img src="img/twitter.png"></a>
								<a target="_blank" href="http://www.linkedin.com/in/arunkolhapur"><img src="img/linkedin.png"></a>
								<a target="_blank" href="https://plus.google.com/+ArunKolhapur"><img src="img/gplus.png"></a>
							</div>
						</div>
					</div>
				</div>

				<div class="member">
					<img class="img rounded thumbnail" data-direction="top" src="img/team/ram.jpg" />
					<br>
					<div class="details">
						<div class="role">Ramkrishna</div>
						<div class="testimonial">
							<span class="author">Co-Founder, Designer &amp; Developer</span>
							<div class="social">
								<a target="_blank" href="https://www.facebook.com/ramkrishna.info"><img src="img/fb.png"></a>
								<a target="_blank" href="https://twitter.com/Ramkrishna96"><img src="img/twitter.png"></a>
								<a target="_blank" href="http://in.linkedin.com/in/ramkrishna1"><img src="img/linkedin.png"></a>
								<a target="_blank" href="https://plus.google.com/+ramkrishna1"><img src="img/gplus.png"></a>
							</div>
						</div>
					</div>
				</div>

				<img src="img/team/team.jpg" class="teamImg"/>

			</div>
			<div class="footer">Copyright &COPY; Octapixel 2013-2014</div>
		</div>

		<div class="contactWrapper wrapper">
	 		<div class="contact">
				<div class="contactHeader">Like what you see? Get in touch with us.</div>
				<table class="contactNonMobile">
					<tr>
						<td style="width:40%">
							<div class="contactForm">
								<form>
									<label for="txtName">Name</label> <br>
									<input type="text" name="txtName" id="txtName" />
									<br><br>

									<label for="txtEmail">Email</label> <br>
									<input type="email" name="txtEmail" id="txtEmail" />
									<br><br>

									<label for="txtMessage">Message</label> <br>
									<textarea name="txtMessage" id="txtMessage" rows="5"></textarea>
									<br>

									<button class="contactSubmit" id="contactSubmit">Submit</button>
								</form>
							</div>
						</td>
						<td style="width:40%;">
							<div class="contactOthers">
								If you want to let us know about a new project, fill out the form. If you hate forms for some reason, you can contact us in the various ways below:
								<p class="phone">+91 890 485 3975</p>
								<p class="email">hello@octapixel.com</p>
							</div>
						</td>
					</tr>
				</table>

				<div class="contactMobile" style="display:none;">
					<div class="contactForm">
						<form>
							<label for="txtName">Name</label> <br>
							<input type="text" name="txtName" id="txtName" />
							<br><br>

							<label for="txtEmail">Email</label> <br>
							<input type="email" name="txtEmail" id="txtEmail" />
							<br><br>

							<label for="txtMessage">Message</label> <br>
							<textarea name="txtMessage" id="txtMessage" rows="5"></textarea>
							<br>

							<button class="contactSubmit" id="contactSubmit">Submit</button>
						</form>
					</div>

					<div class="contactOthers">
						If you want to let us know about a new project, fill out the form. If you hate forms for some reason, you can contact us in the various ways below:
						<p class="phone">+91 890 485 3975</p>
						<p class="email">hello@octapixel.com</p>
					</div>
				</div>
<!-- 
				<div class="contactMap">
					<div class="contactMapHeader">You can find us here - </div>
					<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.googleapis.com/maps/api/staticmap?center=77.57531,12.957966&amp;zoom=16&amp;maptype=roadmap&amp;markers=color:red%7Clabel:O%7C77.57531,12.957966&amp;sensor=false"></iframe><br /><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=R+D+Apartment,+Sri+Ram+Temple+Rd,+Ashwini+Layout,+Ejipura,+Bangalore,+Karnataka&amp;aq=0&amp;oq=rd+apart&amp;sll=12.957966,77.57531&amp;sspn=0.209112,0.337486&amp;ie=UTF8&amp;hq=&amp;hnear=R+D+Apartment,+Sri+Ram+Temple+Rd,+Ashwini+Layout,+Ejipura,+Bangalore,+Bangalore+Urban,+Karnataka+560095&amp;t=m&amp;z=14&amp;ll=12.942106,77.628117" style="color:#0000FF;text-align:left">View Larger Map</a></small>
				</div> -->
				<div class="find-us">You can find us here</div>
				<div id="googleMap"></div>
				<div class="footer">Copyright &COPY; Octapixel 2013-2014</div>
			</div>
		</div>

	</div>

	<button class="backMenu" style="display:none;">Scroll to top</button>
	<div class="isMobile" style="display:none;margin-left:0px;"></div>
</body>
</html>