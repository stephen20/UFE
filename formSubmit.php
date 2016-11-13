<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>United Floral Events</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="./images/UFE.png" />
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-responsive.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="about page">
    <meta name="author" content="Stephen Pagliuca">
    <script type="text/javascript" src="./js/jquery-1.11.3.min.js"></script> 
    <script type="text/javascript" src="./js/jquery.prettyPhoto.js"></script> 
    <link rel="stylesheet" type="text/css" href="./css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" href="./css/main.css" />
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function(){
        $("a[rel^='prettyPhoto']").prettyPhoto({
          social_tools: false;
        });
      });
    </script>
  </head>
  <body style="background-color:BLACK; overflow-x: hidden;">
  <?php
        error_reporting(0);
        session_start();
        // Create new $_SESSION variables corresponding with the fields of the associated forms.
        $_SESSION['Name']= $_POST['Name'];
        $_SESSION['email']= $_POST['email'];
        $_SESSION['eventDate']= $_POST['eventDate'];
        $_SESSION['heard']= $_POST['heard'];
        $_SESSION['message']= $_POST['message'];

        $to      = 'Unitedfloral@gmail.com'; // Change the email address and other fields to be displayed on the email depending on the associated form 
        $subject = 'UFE Inquiry';
        $message ="
        Name: ". $_SESSION['Name'] . '
        eventDate: '. $_SESSION['eventDate'] . '
        Heard about us through: '. $_SESSION['heard'] . '
        Message: '. $_SESSION['message'];                
            $headers = 'From:' . $_SESSION['Email']. "\r\n" . 'X-Mailer: PHP/' . phpversion();            
?>
    <div class="container">
        <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
              <a class="brand" href="./index.html"><img src="./images/ufeLogo.png" alt="UFE Logo" id="logo"></a>
              <ul class="nav">
                <li id="nav1"><a href="./weddingGallery.html">Weddings</a></li>
                <li id="nav2"><a href="./socialGallery.html">Social Events</a></li>
                <li id="nav3" class="active"><a href="#">About Us</a></li>
                <li id="nav4"><a href="./contact.php">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
    <div id="wrap">

      <!-- Begin page content -->
      <div class="container" id="submitCon">
        <div class="page-header" id="page-head" style="color:WHITE;">
          <h1>Success</h1>
        </div>
        <img src="./images/main.jpeg" id="submitPic" alt="Thank you" id="contactConfirm">
        <p class="lead" style="color:WHITE;" id="confirmP">Thank you, <?php echo $_SESSION['Name'];?>, for your inquiry. We look forward to doing business with you!</p>
        <div id="submitSocial" class="container">
          <p class="muted credit">United Floral Events Social Media</p>
          <a href="https://www.facebook.com/unitedfloralevents" target="_blank"><img src="./images/fbook.png" alt="Like us on Facebook" style="height: 50px; width: 80px;"/></a>
          <a href="https://instagram.com/unitedfloralevents" target="_blank"><img src="./images/insta.png" alt="Follow us on Instagram" style="height: 50px; width: 80px;"/></a>
          <a href="https://www.pinterest.com/unitedfloral" target="_blank"><img src="./images/pintrest.png" alt="Follow us on Pintrest" style="height:50px; width: 80px;"/></a>

        </div>
      
      </div>





  </body>













