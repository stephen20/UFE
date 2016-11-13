<!DOCTYPE HTML PUBLIC>
<html lang="en">
	<head>
		<title>United Floral Events</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="shortcut icon" href="./images/UFE.png" />
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="./css/bootstrap-responsive.css"/>
    <script type="text/javascript" src="./js/bootstrap.js"></script>
    <script type="text/javascript" src="./js/jquery-1.11.3.min.js"></script> 
		<meta name="description" content="Contact Page">
    <meta name="author" content="Stephen Pagliuca">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
      $(document).ready(function() {
      $('#datepicker').datepicker({
        minDate: '+0'
      })
    })
    </script>
  </head>

  <body style= "background-color:BLACK;">
  <div class="container">
  <div class="navbar navbar-fixed-top navbar-inverse">
      <div class="navbar-inner">
        <a class="brand" href="./index.html"><img src="./images/ufeLogo.png" alt="UFE Logo" id="logo"></a>
        <ul class="nav">
          <li id="nav1"><a href="./weddingGallery.html">Weddings</a></li>
          <li id="nav2"><a href="./socialGallery.html">Social Events</a></li>
          <li id="nav3"><a href="./ufeAbout.html">About Us</a></li>
          <li id="nav4" class="active"><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
    <div class="container" id="contactCon">
      <p id="contactUs"><span style="font-size:45px;">Contact United Floral Events</span><br><span style="font-size:20px;">We would love to hear from you.</span></p>
      <div id="seperator"></div>
      <div id="contactInfo">
    	  <p>1 Bond Street</br>
    	  Great Neck, NY 11021</br>
    	  Phone: 516-829-8890</br>
    	  Fax: 516-773-6650</br>
    	  Email:<a href="mailto:unitedfloral@gmail.com" targe="_blank">Unitedfloral@gmail.com</a>
    	  </p>
    	</div>
      <img src="./images/contact1.jpg" alt="Contact Us" id="contactPic">
      <div id="contactSocial" class="container">
        <a href="https://www.facebook.com/unitedfloralevents" target="_blank"><img src="./images/fbook.png" alt="Like us on Facebook" style="height: 40px; width: 60px;"/></a>
        <a href="https://instagram.com/unitedfloralevents" target="_blank"><img src="./images/insta.png" alt="Follow us on Instagram" style="height: 40px; width: 60px;"/></a>
        <a href="https://www.pinterest.com/unitedfloral" target="_blank"><img src="./images/pintrest.png" alt="Follow us on Pintrest" style="height:40px; width: 60px;"/></a>
      </div>
      <div id="contactForm">
        <form action="formSubmit.php" method="post" name="theForm" id="theForm">
          Name*: <input type="text" name="Name" id="name" required /></br>
          Email Address*: <input type="text" name="email" required id="email"/></br>
          Event Date: <input type="text" name="eventDate" id="datepicker"/><br>
          How did you hear about us?* <select name="heard" required id="heard">
            <option value="TheKnot.com">TheKnot.com</option>
            <option value="weddingwire.com">weddingwire.com</option>
            <option value="social media">Social media</option>
            <option value="venue recommendation">Venue recommendation</option>
            <option value="friend or family">From a friend/family member</option>
            <option value="other">Other</option>
          </select></br>
          Message:
          <textarea id="message" NAME="message" ROWS="5" COLS="30" ></textarea><br>
          <input type="submit" value="Submit" id="submit"/><br>
          </form>      
      </div>
      </div>
  </body>
  </html>