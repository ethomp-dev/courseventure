<?php
  require('../model/database.php');
  require "../model/courses_db.php";
  session_start();
  include 'partials/globalVars.php'; 
?>
<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $siteTitle; ?></title>
    <?php include 'partials/preBodyHead.php'; ?>
  </head>
  <body class="bg-ribbon">
    <div class="grid-frame">
      <div class="grid-block vertical">
        <!-- Body -->
        <div class="grid-container">
          <img class="medium-logo" src="<?php echo $pathToImg; ?>courseventure-logo-dark.png" alt="Course Venture"/>
        </div>
    		<form id="loginForm" action="." method="post">
          <input type="hidden" name="action" value="login">
    			<div class="grid-block">
            <div class="small-offset-4 small-1 grid-block">
  			      <label class="inline">Username</label>
            </div>
            <div class="small-3 grid-block">
				      <input name="username" type="text" autofocus=""/>
    			  </div>
    			</div>
          <div class="small-offset-5 small-3 grid-block noscroll">
            <small <?php echo ($_SESSION['usernameError'] == "" ? 'class="hidden"' : 'class="error"') ?>>
              <?php echo $_SESSION['usernameError']; ?>
            </small>
          </div>
          <div class="grid-block">
            <div class="small-offset-4 small-1 grid-block">
  			      <label class="inline">Password</label>
            </div>
            <div class="small-3 grid-block">
				      <input name="password" type="password" />
    			  </div>
    			</div>
          <div class="small-offset-5 small-3 grid-block noscroll">
            <small <?php echo ($_SESSION['passwordError'] == "" ? 'class="hidden"' : 'class="error"') ?>>
              <?php echo $_SESSION['passwordError']; ?>
            </small>
          </div>
          <div class="small-offset-4 small-4 grid-block">
            <div class="small-offset-4 small-4 grid-block">
              <input type="submit" class="button primary expand" value="LOGIN"></input>
            </div>
          </div>
          <div class="grid-block align-center">
    			  <p>Don't have an account? <a href="<?php echo '.?action=display_signup' ?>">Sign Up!</a></p>
    			</div>
    		</form>
      </div>
    </div>
  </body>
</html>
