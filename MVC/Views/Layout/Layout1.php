
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./public/Library/fontawesome-free-6.1.1-web/css/all.min.css">
    
    <link rel='stylesheet' href="./public/Css/base.css">
    <link rel='stylesheet' href="./public/Css/grid.css">
    <link rel='stylesheet' href="./public/Css/Login.css">
    <link rel='stylesheet' href="./public/Css/Register.css">
    <link rel="stylesheet" href="./public/Css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    
 

    <style>
      #root {
        font-family: Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      }
    </style>
    <title>E-BOOKSTORE</title>
  </head>
  <body>
    <div id="root">
        <!-- Page content -->

         <?php 
         $page=$data['page'];
         require "./MVC/Views/Pages/User/$page.php";
         ?>
    </div>
  </body>
</html>
