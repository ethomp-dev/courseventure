<?php
	session_start();
	require '../model/database.php';
	require '../model/accounts_db.php';
  require "../model/courses_db.php";
	include 'partials/globalVars.php';
	$user = get_user($_SESSION['current_user']);
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
				<h1 class="main-heading">Contact Us</h1><div>
				<h4 class = "main-heading">Describe your issue and we will help!</h4>
					<form action="<?php echo $gmailSMTP; ?>" method="post">
						<input type="hidden" name="action" value="help">
						<input type="hidden" name="user_email" value="<?php echo $user['email']; ?>">
						<input type="hidden" name="user_name" value="<?php echo $user['name']; ?>"> <!--Fname/Lname-->
						<textarea name="message" rows="15" cols="50" autofocus></textarea>
						<div class="align-center grid-block">
						<button class="button secondary large" type="submit"><i class="fa fa-paper-plane"></i> SEND</button>
						</div>
					</form>

            </div>
         </div>
      </div>
   </body>
</html>
<!--php echo $helpSubmit  //old form action= on help.php (needs php tags)-->
