<?php
    $navlinks=['home', 'about','gallery','resume'];
    $current_page=basename($_SERVER['SCRIPT_NAME'],".php");

    function outputNavLinks($navlinks,$current_page){
      $output="";
     foreach ($navlinks as $item) {
       $href=$item;
       if($item == "home") {
          $href = 'index';
      }
      $class="";
      if ($href==$current_page) {
        $class="active";
      }
        $output.="<li><a href='{$href}.php' class='{$class}'> ". ucfirst($item) ."</a></li>";
     }
     echo $output;
    }


?>

 <!DOCTYPE html>

 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Chuong</title>

    <link rel="stylesheet" href="style.css">
   </head>
   <header>
     <div class="logo">
       <h2>CHUONG</h2>
       <a href="index.html"></a>
       <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Nunito:wght@300&display=swap" rel="stylesheet">
     </div>
 <div class="main-nav">
 <nav>
    <ul>
      <?php
        outputNavLinks($navlinks,$current_page);
      ?>
   </ul>
 </nav>
 </div>
   </header>
