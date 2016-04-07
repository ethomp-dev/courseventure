<?php session_start(); include 'partials/globalVars.php'; ?>
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
        <form id="signupForm" action="." method="post">
          <input type="hidden" name="action" value="signup">
          <div class="grid-block">
            <div class="small-offset-4 small-1 grid-block">
  			      <label class="inline">Name</label>
            </div>
            <div class="small-3 grid-block">
				      <input name="name" type="text" />
    			  </div>
    			</div>
          <div class="small-offset-5 small-3 grid-block noscroll">
            <small <?php echo ($_SESSION['nameError'] == "" ? 'class="hidden"' : 'class="error"') ?>>
              <?php echo $_SESSION['nameError']; ?>
            </small>
          </div>
          <div class="grid-block">
            <div class="small-offset-4 small-1 grid-block">
  			      <label class="inline">School</label>
            </div>
            <div class="small-3 grid-block">
              <select name="school">
                <option>UNC Charlotte</option>
              </select>
    			  </div>
    			</div>
          <div class="grid-block">
            <div class="small-offset-4 small-1 grid-block">
              <label class="inline">Username</label>
            </div>
            <div class="small-3 grid-block">
              <input name="username" type="text" />
            </div>
          </div>
          <div class="small-offset-5 small-3 grid-block noscroll">
            <small <?php echo ($_SESSION['usernameError'] == "" ? 'class="hidden"' : 'class="error"') ?>>
              <?php echo $_SESSION['usernameError']; ?>
            </small>
          </div>
          <div class="grid-block">
            <div class="small-offset-4 small-1 grid-block">
              <label class="inline">Email</label>
            </div>
            <div class="small-3 grid-block">
              <input name="email" type="text" />
            </div>
          </div>
          <div class="small-offset-5 small-3 grid-block noscroll">
            <small <?php echo ($_SESSION['emailError'] == "" ? 'class="hidden"' : 'class="error"') ?>>
              <?php echo $_SESSION['emailError']; ?>
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
              <input type="submit" class="button primary expand" value="SIGNUP"></input>
            </div>
          </div>
          <div class="grid-block align-center">
    			  <p>Already have an account? <a href="<?php echo '.?action=display_login' ?>">Log in!</a></p>
    			</div>
        </form>
      </div>
    </div>
  </body>
</html>
