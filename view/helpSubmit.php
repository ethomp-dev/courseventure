<?php
  require('../model/database.php');
  require "../model/courses_db.php";
  session_start();
  include 'partials/globalVars.php';
?>
<!doctype html>
<html lang="en">
   <head>
      <title><?php echo $siteTitle; ?> | Help</title>
      <?php include 'partials/preBodyHead.php'; ?>
   </head>
   <body>
      <div class="grid-frame">
         <!-- Side Menu -->
         <?php include 'partials/sideMenu.php'; ?>
         <div class="grid-block collapse medium-9 large-10 vertical">
            <!-- Top Bar -->
            <?php include 'partials/topMenu.php'; ?>
            <!-- Body -->
            <div class="grid-container">
               <h1 class="main-heading">Contact Us</h1>
			   <h4 class = "main-heading">Email submitted. We will respond as soon as possible.</h4>

						<div class="align-center grid-block">
						<a class="button secondary large" href="<?php echo $homePage; ?>">Return to Home</a>
						</div>

            </div>
         </div>
      </div>
   </body>
</html>
<!--get user email from session-->
