<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Rebecca Moorman's Stand Up Site</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
 </head>
 
 <body>

     <header>
     <a href="index.html"  class="home">
     <h1 class="name"><div class="first">REBECCA</div><div class="last">MOORMAN</div></h1>
    </a>
     
     <nav class="topnav" id="myTopnav">
       <a href="index.html">Welcome</a>
       <a href="events.html">Upcoming Events</a>
       <a href="highlights.html">Stand Up Highlights</a>
       <a href="contact.php" class="active">Contact Rebecca</a>
       <a href="../index.html">Back To IT161</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
       
       <div class="social-container">
        <div><a href="#" class="fa fa-facebook"></a></div>
        <div><a href="#" class="fa fa-twitter"></a></div>
        <div><a href="#" class="fa fa-youtube"></a></div>
        <div><a href="#" class="fa fa-instagram"></a></div>
        <div><a href="#" class="fa fa-snapchat-ghost"></a></div>
      </div>
     </nav>
     </header>
     
   <div class="wrapper">
   
   <h2 class="subheader"><span style="color: silver">CONTACT</span>REBECCA</h2>
   
   <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "rebeccamoorman@yahoo.com";  //place your/your client's email address here
        $toName = "Rebecca"; //place your client's name here
        $website = "Rebecca Moorman Standup";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements
  ?>
           
     <footer>
      <p><small>&copy; 2022 by 
          <a href="contact.php">Rebecca Moorman</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a></small>
     </p>
     <a href="disclaimer.html">DISCLAIMER/PRIVACY NOTICE</a>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>