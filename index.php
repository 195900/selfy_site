<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chuong</title>

   <link rel="stylesheet" href="style.css">
  </head>
  <body>
<?php
include 'header.php';
 ?>

 <div class="banner">
   <div class="quote">
     <h2>HELLO THERE~</h2>
   </div>
 </div>


 <div class="main-col">
   <div class="content">
     <div class="col-3">
       <div class="col-img">
         <img src="img/gallery.jpg" alt="">
       </div>
       <h2>GALLERY</h2>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
       <button type="button"name="button"><a href="gallery.html">READ MORE</a></button>
     </div>
     <div class="col-3">
       <div class="col-img">
         <img src="img/resume.jpg" alt="">
       </div>
       <h2>RESUME</h2>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
       <button type="button"name="button"><a href="resume.html">READ MORE</a></Button>
     </div>
     <div class="col-3">
       <div class="col-img">
         <img src="img/about.jpg" alt="">
       </div>
       <h2>ABOUT</h2>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
       <button type="button"name="button"><a href="about.html">READ MORE</a></button>
     </div>
   </div>
 </div>
 <div class="subscribe">
 <div class="banner2">
   <div class="quote2">
     <div class="form">
       <form action="index.html" method="post">
       <input type="email" name="email" placeholder="Enter email address" > <br>
       <button type="submit">SUBSCRIBE</button>
     </form>
 </div>
   </div>
 </div>
 </div>

 <?php
 include 'footer.php';
  ?>
</body>
</html>
