<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>AUTUMN HTML TEMPLATE</title>
<!-- colorpicker stylesheet -->
<link rel="stylesheet" type="text/css" href="colorpicker/css/colorpicker.css"/>
<link rel="stylesheet" type="text/css" href="colorpicker/css/layout.css"/>
<!-- important stylesheets -->
<link rel="stylesheet" href="css/superfish.css" type="text/css" media="all" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:regular,bold" type="text/css" />
<link rel="stylesheet" href="css/default.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />

<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>
<!-- Superfish Dropdown menu script -->
<script src="js/superfish.js" type="text/javascript"></script>
<script src="js/supersubs.js" type="text/javascript"></script>
<script src="js/hoverIntent.js" type="text/javascript"></script>
<!-- Footer Slider -->
<script type="text/javascript" src="js/carousel.js"></script>
<!-- Superfish custom script -->
<script type="text/javascript" src="js/navigation.js"> </script>
<!-- colorpicker script -->
<script type="text/javascript" src="colorpicker/js/eye.js"></script>
<script type="text/javascript" src="colorpicker/js/utils.js"></script>
<script type="text/javascript" src="colorpicker/js/colorpicker.js"></script>
<script type="text/javascript" src="colorpicker/js/scripts.js"></script>
<!--contact form script-->
<script type="text/javascript">
function move( input, div, onoff ) {
	var value = document.getElementById( input ).value.split(' ').join('');
	if( onoff == 1 ) {
		document.getElementById( div ).style.margin = '-20px 0 0 6px';
	} else {
		if( value == "" ) {
			document.getElementById( div ).style.margin = '8px 0 0 6px';
		}
	}
}

function makeObject(){
	var x;
	var browser = navigator.appName;
	if(browser == "Microsoft Internet Explorer"){
		x = new ActiveXObject("Microsoft.XMLHTTP");
	}else{
		x = new XMLHttpRequest();
	}
	return x;
}

var request = makeObject();

function submitForm( ){
	var name = document.getElementById( 'name' ).value;
	var email = document.getElementById( 'email' ).value;
	var message = document.getElementById( 'message' ).value;
	var filter = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
	var error = false;
	document.getElementById("nameerror").innerHTML="";
	document.getElementById("emailerror").innerHTML="";
	document.getElementById("messageerror").innerHTML="";

	if( name.split(' ').join('') == "" ) {
		document.getElementById("nameerror").innerHTML="Field is Empty";
		error = true;
	}

	if( !filter.test( email ) ) {
		document.getElementById("emailerror").innerHTML="Email is Invalid";
		error = true;
	}
	
	if( email.split(' ').join('') == "" ) {
		document.getElementById("emailerror").innerHTML="Field is Empty";
		error = true;
	}
	if( message.split(' ').join('') == "" ) {
		document.getElementById("messageerror").innerHTML="Field is Empty";
		error = true;
	}


	if( error == false ) {
		message = message.split('\n').join('__');
		message = encodeURI( message );
		request.open('get', 'mail.php?name='+ name +'&email='+ email +'&message='+ message);
		request.onreadystatechange = parseInfo;
		request.send('');
	}
}

function parseInfo(){
	if( request.readyState == 1 ) {
		document.getElementById('response').innerHTML = '<img src="loader.gif" alt="Loading..." />';
	}
	if(request.readyState == 4){
		var answer = request.responseText;
		document.getElementById('response').innerHTML = answer;
	}
}
</script>

</head>
<body>

<div class="schemas">
			<a class="styleswitch default-pat" rel="default-pat" href="#"><span></span></a>
			<a class="styleswitch head-pat3" rel="head-pat3" href="#"><span></span></a>			
            <a class="styleswitch head-pat1" rel="head-pat1" href="#"><span></span></a>
            <a class="styleswitch head-pat2" rel="head-pat2" href="#"><span></span></a>
			<a class="styleswitch head-pat4" rel="head-pat4" href="#"><span></span></a>			
            <a style="text-indent: 0px;" class="styleswitch colors tiptip" title="Click and choose our favorite color" id="schema-colorpicker" rel="header-trans" href="#"></a>
            <!-- color picker -->
        </div>
<div class="main head-pat1">

	<div class="header">
		<div class="head">
			<!--Begin Logo--><div class="logo">
				<h1><a href="index.html"><img src="images/logonew.png" alt="Logo" /></a></h1>
			</div>	
				
		<!---------------End Logo-------------------------------------><!--End Logo--><!--Menu-->
			<div class="menu">
			<ul class="sf-menu">
				<li><a href="index.html">HOME</a>
					<ul>
						<li><a href="index.html">Nivo Slider</a></li>
						<li><a href="index2.html">Piecemaker Slider</a></li>									
						<li><a href="index3.html">Accordion Slider</a></li>									
						<li class="sf-with-ul">
							<a href="#" >Multilevel Menu</a>
							<ul>
								<li><a href="#">This is the</a></li>
								<li><a href="#">example of the</a></li>
								<li><a href="#">2nd level menu</a></li>
							</ul>
						</li>
					</ul>
				</li>
				
				<li><a href="#">PAGES</a>	
					<ul>
						<li><a href="product_details.html">Product Details</a></li>	
						<li><a href="product.html">Product List</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="faq.html">FAQ</a></li>														
						<li><a href="price.html">Price Table</a></li>
						<li><a href="about.html">About Us</a></li>													
						<li><a href="error.html">Error Page</a></li>					
						<li><a href="fullwidth.html">Fullwidth Page</a></li>					
						<li><a href="left.html">Left Sidebar</a></li>											
					</ul>
				</li>
			
				<li><a href="portfolio_s.html">PORTFOLIO</a>
					<ul>
						<li><a href="portfolio2.html">3 column portfolio</a></li>
						<li><a href="portfolio3.html">4 column portfolio</a></li>
						<li><a href="filterable.html">Sortable Portfolio</a></li>												
						<li><a href="portfolio_s.html">Portfolio Item Details</a></li>

					</ul>
				</li>
	
				<li><a href="blog.html">BLOG</a>
					<ul>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="single.html">Single Blog Page</a></li>
			    	 </ul>
				</li>
	
				<li><a href="typo.html">ELEMENTS</a>
					<ul>
						<li><a href="typo.html">Easy column shortcodes</a></li>
						<li><a href="elements.html">Buttons and typography</a></li>
					</ul>
				</li>
		
				<li  class="active"><a href="contact.php">CONTACT US</a></li>
			</ul>		
		</div>
			<!--Menu-->			
	  </div>
		<!--EOF Head-->
	</div>
	<!--EOF Header-->
	<div class="clear"></div>
	<div class="row_other_page">
    	<div class="wrapper">	
		<div class="container">
		<div class="content_other_page">
			<div class="content_body">

		<!-- *************************************** -->
		
			<div id="box">
			<div id="box_head">
						<div id="box_head_heading"><h1 id="box_head_left">Contact us</h1><div id="box_head_sub">/  This is subtitle</div>
						<form class="searchform">
							<input class="searchfield" type="text" value="Search..." onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" />
							<input class="searchbutton" type="submit" value="Go" />
						</form>
						</div>

					
				</div>
				<div class="clear"></div>
				
			<div class="full_width">
				<div class="two_col_left">
				<p>Saecenas sollicitudin egstas libero vel iaculis ante vestiblum ini morbi aliquam adipiscing tortor volutpat bibendum metus sagittis ate. Curabitur molestie tincidunt velit idi dignissim.
				</p>
				
				<div id="contact_form">		
						<form method="post">
			<input type="text" name="name" id="name" class="input-box" value="" />
			<label for="name">Name</label>
			<span id="nameerror"></span>

			<input type="text" name="email" id="email" class="input-box" value=""/>
			<label for="email">E-mail</label>
			<span id="emailerror"></span>
			

			<textarea name="message" id="message" class="text-box" cols="10" rows="8" ></textarea>
			<span id="messageerror"></span>
			
			<p id="send">
			<input  type="button" name="send" value="Send" onClick="submitForm( );" />
			</p>

			<span id="response"></span>

		</form>
		</div>
				
				</div>
				
				
				
				<div class="two_col_right">
					<div class="map">
							<iframe width="464" height="272" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Redmond,+WA,+%D0%A1%D0%A8%D0%90&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=54.533615,114.169922&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%A0%D0%B5%D0%B4%D0%BC%D0%BE%D0%BD%D0%B4,+%D0%9A%D0%B8%D0%BD%D0%B3,+%D0%92%D0%B0%D1%88%D0%B8%D0%BD%D0%B3%D1%82%D0%BE%D0%BD&amp;z=13&amp;ll=47.673988,-122.121512&amp;output=embed"></iframe>
						</div>
				</div>
				
				<div class="address">
					<h5>Our Address</h5>
					<ul>
						<li>Floor 6</li>				
						<li>236 Gray's Inn Road</li>
						<li>London N11 7AE, United Kingdom</li>
					</ul>
				</div>
				<div class="contact_info">
					<h5>Direct</h5>
					<ul>
						<li>Phone:&nbsp;+440203456523</li>
						<li>Email:&nbsp;info@autumn.com</li>
						<li>Website:&nbsp;<a href="http://www.autumn.com">www.autumn.com</a></li>
					</ul>
				</div>
				<div class="clear"></div>
				</div>
			</div>
			<!--EOF contact-->
		
			<div class="clear"></div>
		</div>
		<!--EOF content_body-->		</div>
		<!--EOF Content-->
		

		</div>
		<!--EOF Container-->
		
		<div class="clear"></div>
		
		<div class="footer">
	<div class="footer_content">
		<div class="footer_inner">
			<div class="footer_links">
				<h2 class="bottom_margin">Flickr</h2>
                	<ul id="flickr_container">
						<li><a rel="colorbox" href="http://farm7.static.flickr.com/6070/6160484217_34699243e8_b.jpg">
						<img alt="Matt Guay's garden workspace" src="http://farm7.static.flickr.com/6070/6160484217_34699243e8_s.jpg" width="60" />
						</a></li>
						<li><a rel="colorbox" href="http://farm7.static.flickr.com/6204/6160482803_0e027f7d7d_b.jpg">
						<img alt="Matt Guay's regular hideout" src="http://farm7.static.flickr.com/6204/6160482803_0e027f7d7d_s.jpg" width="60" />
						</a></li>
						<li><a rel="colorbox" href="http://farm7.static.flickr.com/6164/6138110741_aa2ef65c4b_b.jpg" >
						<img alt="Grant Friedman" src="http://farm7.static.flickr.com/6164/6138110741_aa2ef65c4b_s.jpg" width="60" /></a></li>
						
						<div class="clear"></div>
						
						<li class="clear"><a rel="colorbox" href="http://farm7.static.flickr.com/6168/6138110581_02f0bd1eb9_b.jpg"><img alt="David Appleyard's Zen office space" src="http://farm7.static.flickr.com/6168/6138110581_02f0bd1eb9_s.jpg" width="60" /></a></li>
						<li><a rel="colorbox" href="http://farm7.static.flickr.com/6088/6128788642_61190607c2_b.jpg"><img alt="Travis King" src="http://farm7.static.flickr.com/6088/6128788642_61190607c2_s.jpg" width="60" /></a></li>
						<li><a rel="colorbox" href="http://farm7.static.flickr.com/6186/6125092993_ba73b33e4d_b.jpg"><img alt="Lance Snider" src="http://farm7.static.flickr.com/6186/6125092993_ba73b33e4d_s.jpg" width="60" /></a></li>
						
					</ul>
                    <div class="clear"></div>
			</div>

			<div class="footer_block">
				<h2 class="bottom_margin">Useful Links</h2>
					<ul  class="footer_margin">
						<li class="no-border">&raquo;<a href="#">Link to our partners</a></li>
						<li class="no-border">&raquo;<a href="#">Read our journals</a></li>
						<li class="no-border">&raquo;<a href="#">Work with us</a></li>												
						<li class="no-border">&raquo;<a href="#">Link to your custom section</a></li>						
					</ul>
			</div>			
				
				<div class="no-margin">
					<h2 class="bottom_margin">Get in touch</h2> 
						<ul class="footer_margin">
							<li class="no-border" >236 Gray's Inn road, London<br />
Phone: (1800) 765-4321 <br />
Email: info@yourdomain.com</li>
<br/>
<li> <em>Praesent id lorem mauris. Donec scelerisque risus nec dui dapibus blandit convallis dolor nec nisi consectetur eget. Lorem ipsum dolor sit amet.</em></li>
						</ul>
				</div>

		</div>
	</div>
</div>
		<div id="extra2">
			<div class="extra_main">
				<div class="extra_left">copyright 2011. All rights reserved</div>
				<div class="extra_right">
					<ul class="social">
						<li><a href="#"><img src="images/facebook-logo-square.png" width="32" height="32" alt="facebook" /></a></li>
						<li><a href="#"><img src="images/twitter-bird3-square.png" alt="twitter" width="32" height="32"/></a></li>
						<li><a href="#"><img src="images/rss-cube.png" width="32" height="32" alt="rss" /></a></li>
						<li><a href="#"><img src="images/linkedin-logo-square2.png" width="32" height="32" alt="linkedin" /></a></li>
						
					</ul>
				</div>
			</div>
		</div>
		<!--EOF copyright-->
	</div>
	<!--EOF wrapper-->

</div>


</div>
</body>
</html>
