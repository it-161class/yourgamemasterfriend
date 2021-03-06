<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Joshua Zimmerschied's IT161 Portal Website</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/styles.css"/>
 </head>
 <body>
    <header class="container">
      <div class="banner">
        <a href="#top"><img src="images/sample.png" alt="sample"></a>
        <h1 class="centered">Really Great Builds</h1>
      </div>
        <nav>
        <a href="">part 1</a>
        <a href="">part 2</a>
        <a href="contact.php">Contact RGB</a>
        </nav>
    </header>
     
    <main class="wrapper container">
    <h2 class="subheader">Contact Z</h2>
    <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "Joshua.Zimmerschied@gmail.com";  //place your/your client's email address here
        $toName = "Joshua Zimmerschied"; //place your client's name here
        $website = "yourgamemasterfriend";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
     <footer>
      <p><small>&copy; 2021 by <a href="contact.php">Joshua Zimmerschied</a>, All Rights Reserved ~ <a href="https://validator.w3.org/nu/?doc=https://web-students.net/site48/it161/index.html" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
</main>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
      
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