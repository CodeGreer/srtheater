<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    
    <title></title>

    <link rel="canonical" href="your url here">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="keyword, keyword, keyword, keyword, keyword, keyword" >
    <meta name="description" content="Sentence for Google to index with your link.">

<!-- Facebook -->
    

<!-- Twitter -->
    
    
<!-- Favicon -->
    
    
<!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/responsive.css" />
    
<!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Codystar%7CGreat+Vibes' rel='stylesheet' type='text/css'>
    
<!-- Javascript -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    
    <!-- <script type="text/javascript">

		$(document).ready(function() {
			$curtainopen = false;
			$(".rope").click(function(){
				$(this).blur();
				if ($curtainopen == false){ 
					$(this).stop().animate({top: '0px' }, {queue:false, duration:350, easing:'easeOutBounce'}); 
					$(".leftcurtain").stop().animate({width:'60px'}, 2000 );
					$(".rightcurtain").stop().animate({width:'60px'},2000 );
					$curtainopen = true;
				}else{
					$(this).stop().animate({top: '-40px' }, {queue:false, duration:350, easing:'easeOutBounce'}); 
					$(".leftcurtain").stop().animate({width:'50%'}, 2000 );
					$(".rightcurtain").stop().animate({width:'51%'}, 2000 );
					$curtainopen = false;
				}
				return false;
			});
		});	
	</script> -->
    
    <script>
        $(document).ready(function() {
			$curtainopen = false;
			$('button').attr('hidden', 'hidden');
			setTimeout(function()  {
				$(this).blur();
				if ($curtainopen == false) { 
					$(".leftcurtain").stop().animate({width:'10%'}, 2000 );
					$(".rightcurtain").stop().animate({width:'10%'},2000 );
					$('button').removeAttr('hidden');
					
					$curtainopen = true;
				}
				return false;
			}, 2000);
		});
    </script>
    
</head>
  
<body> 
    
<!-- start my code -->
    

<!-- Container -->    
<div id="container">
        
<!-- Curtain -->   
    <div id="curtain">   
        <div class="leftcurtain"><img alt="Left side theater curtain" src="images/frontcurtain.jpg"/></div>
        <div class="rightcurtain"><img alt="Right side theater curtain" src="images/frontcurtain.jpg"/></div>
        <img class="marquee" alt="Staged Right Theater Presents" src="images/sr_presents.png"/>
        <h1 class="current_show cody">Wait!<br>September 23 - October 2, 2016</h1>
        <img class="img buytickets_home" alt="Buy Staged Right Theater tickets" src="images/buy_tickets.png">
        <a class="rope" href="#">
        <!-- <img src="images/rope.png"/> -->
        </a>  
    </div>     
<!-- End Curtain -->  
    
<!-- Upcoming Show -->   
    <div id="upcoming">
        <img class="img image_up" alt="Staged Right Theater" src="images/WaitPoster.jpg">
        
        <p>Our girl Wendy Burger stands on the edge of a summer that will change her life forever. It's the summer she moves out of her father's house (and into the UPS truck). The summer she starts a theatre with the guy she used to date (no one else would have them). The summer she performs her first acting role (Lisa in Hamlet—with a flickering blue light playing the lead, à la Tinkerbell). The summer when she gets tips from the actress, Floating Piñata Head. But most of all it's the summer when she meets O Vixen My Vixen (yes, that's her full name!) who is both beautiful and oh-so-deep. It's the summer that changes everything in Wendy's life. The title, Wait!, identifies that moment between the question and the answer, between the old life and the new. It's a moment of great power. No matter what happens, you will not be the same. 
Directed by Staged Right’s artistic director, Starshine Stanfield, Wait! kicks off Staged Right Theatre’s very first season! 
</p>
    </div>
    
<!-- End Upcoming Show -->    
                    
<!-- About the Show -->     
    <div id="about" class="section">
        <h2>About Staged Right</h2>
        <div id="content_about">
            <img class="img image_about" alt="Staged Right Theater name of show" src="images/onthefence.jpg">
            <img class="img image_about" alt="Staged Right Theater name of show" src="images/tango.jpg">
        </div>
    </div>   
<!-- End About the Show --> 
          
<!-- Cast and Crew -->         
    <div id="auditions" class="section"> 
        <h2>Auditions</h2>
        <div id="content_aud">
            <img class="img image_aud" alt="Staged Right Theater auditions for" src="images/11755108.jpg">
            <img class="img image_aud" alt="Staged Right Theater auditions for" src="images/12308719.jpg">
        </div>
    </div>
<!-- End Cast and Crew -->
    
<!-- Volunteer -->     
    <div id="volunteer" class="section">
        <h2>Volunteer</h2>
        <div id="content_vol">
            <img class="img image_vol" alt="Staged Right Theater volunteers" src="images/12032105.jpg">
            <img class="img image_vol" alt="Staged Right Theater volunteers" src="images/13092020.jpg">
        </div>
    </div>   
<!-- End Volunteer --> 
          
<!-- Find Us -->         
    <div id="find_us" class="section"> 
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.1272510773247!2d-84.13617758533991!3d33.886376433901226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5a4fb5b63be2b%3A0xbf82e4245779167!2s76+Main+St+NW%2C+Lilburn%2C+GA+30047!5e0!3m2!1sen!2sus!4v1467087750904" width="600" height="450" style="border:0" allowfullscreen></iframe>
        </div>

        <div id="address">
            <h2>Find Us</h2>
            <p>76 Main St NW,</p>
            <p>Lilburn, Georgia 30047</p>
            <p><a href="tel:770-555-1212">770&ndash;555&ndash;1212</a></p>
        </div>
    </div>
<!-- End Find Us -->    
    
</div>
<!-- End Container -->    
    
<div id="push"></div>
 
        
<!-- Footer -->      
<div id="footer">
    <img class="img logo" alt="Staged Right Theater logo" src="images/SRTLogo.jpg">
    
    <div id="social">
        <ul>
            <li><a href="https://www.facebook.com/stagedrighttheatre/"><img class="img social_media" alt="Staged Right Theater Facebook page" src="images/facebook.png"></a></li>
            <li><a href="https://twitter.com/StagedRightGA"><img class="img social_media" alt="Staged Right Theater Twitter page" src="images/tumbler.png"></a></li>
            <li><a href="https://www.instagram.com/stagedrightga"><img class="img social_media" alt="Staged Right Theater Instagram page" src="images/tumbler.png"></a></li>
        </ul>
    </div>
    
    <div id="footer_menu">
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Partners</a></li>
            <li><a href="#">Volunteer</a></li>
            <li><a href="#">Find Us</a></li>
            <li><a href="#">Backstage</a></li>
        </ul>
    </div>
       
</div>  
<!-- End Footer -->  
    
<!-- Copyright -->
    <div id="copyright">
        <ul class="copy">
            <li>Site Design by <a href="http://invisionsdesign.com/">In Visions Design</a> and Development by <a href="http://www.codegreer.com/">Code Greer</a></li>
            <li>&copy;<?php $current_year=date("o");
                        if ($current_year=="2016")
                        echo "2016";
                        else
                        echo "2016 - $current_year"; ?> Code Greer. All rights reserved.
            </li>
        </ul>
    </div>
    
<!-- Javascript -->  
        
<!-- End Javascript -->          
    
</body> 
</html>