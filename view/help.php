<?php include 'partials/globalVars.php'; ?>
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
			   <h4 class = "main-heading">Describe your issue and we will help!</h4>
						<textarea id = "message" rows="15" cols="50" autofocus></textarea>
						<div class="align-center grid-block">
						<button class="button secondary large"><i class="fa fa-paper-plane"></i> SEND</button>
						</div>
            </div>
         </div>
      </div>
   </body>
</html>
<!--get user email from session-->
