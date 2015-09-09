<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
<meta name="viewport" content="width=device-width" />
<title>Online T-shirt Ordering</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/jqueryslidemenu.css" type="text/css" media="screen" />

<!-- supersized -->
<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/supersized.shutter.css" type="text/css" media="screen" />
<!-- supersized -->

<link rel="stylesheet" href="css/carouFredSel.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/quicksand.css" />
<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jqueryslidemenu.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>

<!-- supersized -->
<script type="text/javascript" src="js/supersized.3.2.7.js"></script>
<script type="text/javascript" src="js/supersized.shutter.js"></script>
<!-- supersized -->

<!-- fancybox -->
<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<!-- fancybox -->

<!-- quicksand -->
<script type="text/javascript" src="js/portfolio_sortable.js"></script>
<script type="text/javascript" src="js/quicksand.js"></script>
<!-- quicksand -->

<script type="text/javascript" src="js/jquery.carouFredSel-6.0.6.js"></script>

<script type="text/javascript" src="js/contact.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

            

<link href="http://fonts.googleapis.com/css?family=Oswald:400,300,600,700,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
<div id="page_wrapper">
<div id="dvLoading"></div>
<div id="bgOverlay"><a  href="#" class="page_close"><img src="images/close_button.png" alt="img" /></a></div>


<!--Supersized Controls Start-->
<div id="controls">
    <ul>
        <li><a id="prevslide" class="load-item"><img src="images/back.png" alt="img" /></a></li>
        <li><a id="play-button"><img id="pauseplay" src="images/pause.png" alt="img"/></a></li>
        <li><a id="nextslide" class="load-item"><img src="images/forward.png" alt="img" /></a></li>
    </ul>
</div>
<div id="slidecaption_wrapper">
    <div id="slidecaption"></div>
</div>
<!--Supersized Controls End-->


<!--leftSide start --> 
<div id="leftSide">
    <div id="logo">
        <h1>
            <a href="index.php">
              PSK T-shirts
            </a>
        </h1>
    </div>
	<ul>
			<li style="border-bottom: 1px solid rgba(127, 127, 127, 0.3); position: relative;"><a href="store/generatetrans.php" style="color: #211C1B; display: block; font-family: 'Oswald',Arial; font-weight: 600; padding: 10px 25px; text-decoration: none; text-transform: uppercase; font-size:15px;">Order</a></li>
		</ul>
    <nav id="sidebarmenu">
        <ul id="sidebarmenu1" class="menu">
            <li><a href="#page_about">about</a></li>
            
            <li><a href="#page_contact">FEEDBACK</a></li>
			<li><a href="#adminlogin">Login</a></li>
        </ul>
		
    </nav>
    
    <div class="social_media_wrapper"> 
      <div class="social_media"> 
            <ul>
                <li></li>
                
            </ul>
        </div>
       
    </div>
</div>
<!--leftside end --> 


<!--Content Start-->
<div class="contWrapper">
<article id="content">



<ul id="ulcontent">

<!--About Us Start-->
<li id="page_about">
    <div class="title-wrapper">
        <h2>History</h2>
    </div>
    <h4>History</h4>
    <p style="text-align:justify;">
		We are manufacturers, retailers and exporters of T-shirts and other related products since the year 2009. With the rich experience of our  generations, we offer the cleanest and best quality products produced using the most modern technology t. These latest developments however do not stop us from continuing the traditional quality.


	</p>
    
    <div class="v_space"></div>
    
    <div class="title-wrapper">
        <h2>Mission and Vision</h2>
    </div>
    <div class="two_third" style="width:48%;">
        <h3>Mission</h3>
            <p>To full fill the printing needs of the general public and produce outputs that meet their project specifications with higher standard of workmanship and quality services. </p>
    </div>
    <div class="one_third_last" style="width:48%;">
        <h3>Vision</h3>
        <p>
			To be amongst the leading business ventures in printing of personalized items in the region and to become a focal point of other rental and trading businesses. 
		</p>
    </div>
    <iframe height="400" frameborder="0" style="width: 100%;" src="https://www.google.co.in/maps/place/Thapar+University/@30.3532057,76.3616377,17z/data=!4m2!3m1!1s0x391028aefa2cf623:0xe4a6150ca3b60917"> </iframe>
    <div class="clear"></div>
</li>
<!--About Us End-->
<!--Gallery Start-->
<li id="page_gallery">
    <div class="title-wrapper">
        <h2>Gallery</h2>
    </div>
        
</li>
<!--Gallery End-->

<!--Contact Start-->
<li id="page_contact">
    
    <div class="clear"></div>
    <div class="v_space"></div>
    
    <div class="title-wrapper">
        <h2>Feedback Form</h2>
    </div>
    <div class="contact_form">
        <form method="post" action="sendEmail.php" name="contact-form" id="contact-form">	
		<div id="response"></div>
        <div id="main">
            <div class="one_third">
                <label>Name:</label>
                <p><input type="text" name="name" id="name" size="30" /></p>
            </div>
            <div class="one_third">
                <label>Email:</label>
                <p><input type="text" name="email" id="email" size="30" /></p>
            </div>
            <div class="one_third_last">
                <label>Subject:</label>
                <p><input type="text" name="subject" id="subject" size="30" /></p>
            </div>
            <label>Message:</label>
            <p><textarea name="message" id="message" cols="30" rows="10"></textarea></p>
            <p><input  class="contact_button button" type="submit" name="submit" id="submit" value="Send" /></p>
        </div>
        </form>
    </div> 
</li>
<!--Contact End-->

<!--adminlogin Start-->
<li id="adminlogin">
   
    <div class="title-wrapper">
        <h2>Admin Login Form</h2>
    </div>
    <div class="contact_form">
        <form method="post" action="login.php" name="contact-form" id="contact-form">	
        <div id="main">
            <div class="one_third">
                <label>Username:</label>
                <p><input type="text" name="user" id="name" size="30" /></p>
            </div>
            <div class="one_third">
                <label>Password:</label>
                <p><input type="password" name="password" id="email" size="30" /></p>
            </div>
            <div class="one_third_last">
			<label>&nbsp;</label>
                <input  class="contact_button button" type="submit" name="submit" id="submit" value="Login" />
            </div>
        </div>
        </form>
    </div> 
</li>
<!--adminlogin End-->
                   
</ul>
</article>
</div>
<!--Content End-->

</div>
<!--Page wrapper End-->
</body>
</html>