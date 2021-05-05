<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Joshua Zimmerschied's IT161 Portal Website</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
 </head>
 <body>
     <header>
     <h1>Joshua Zimmerschied's IT161 Website</h1>
     <nav class="topnav" id="myTopnav">
       <a href="index.html" class="active">Welcome</a>
       <a href="elements.html">HTML Elements</a>
       <a href="aia.html">AIA</a>
       <a href="big/index.html">BIG</a>
       <a href="http://w3schools.com" target="_blank">W3 Schools</a>
       <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
       <a href="flowchart.html">Flowchart</a>
       <a href="fp/index.html">Final Project</a>
       <a href="contact.php">Contact Z</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>
     
  <main class="wrapper">
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
     
     <img class="desktop" src="images/desktop.jpg" alt="Photo of the site owner" />
       
     <img class="tablet" src="images/tablet.jpg" alt="Photo of a cyan wallpaper" />
       
     <img class="phone" src="images/phone.jpg" alt="Photo of a blue wallpaper" />
       
       <h2 class="subheader">A little about me!</h2>
       
       <p>I enjoy being a game master for tabletop roleplaying games as one of my favorite hobbies. It allows me to build worlds, characters, and heroic tales. Sharing those with my players, bringing their imaginations and ideas into the game. It's a great deal of fun that can be shared with people you care about.</p>
       <p>I am thirty two years old, and have been aspiring to be involved in a creative career since I left highschool. </p>
       <p>You can easily describe me as an extrovert. I am at my best when working with others.</p>
       
     <footer>
      <p><small>&copy; 2021 by <a href="contact.php">Joshua Zimmerschied</a>, All Rights Reserved ~ <a href="https://validator.w3.org/nu/?doc=https://web-students.net/site48/it161/index.html" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
      
      alert(location.href);
      
      
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