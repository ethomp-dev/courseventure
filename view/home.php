<?php include 'partials/globalVars.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $siteTitle; ?> | Home</title>
    <?php include 'partials/preBodyHead.php'; ?>
  </head>
  <body class="bg-ribbon">
    <div class="grid-frame">
      <!-- Side Menu -->
      <?php include 'partials/sideMenu.php'; ?>

      <div class="medium-9 large-10 grid-block vertical">
        <!-- Body -->
        <div class="grid-container">
          <img class="large-logo" src="<?php echo $pathToImg; ?>courseventure-logo-dark.png" alt="Course Venture"/>
        </div>
        <div class="grid-container">
          <h1 class="text-primary">Course shopping made easy. Let's begin!</h1>
        </div>
        <form id="searchForm" action="." method="post">
          <input type="hidden" name="action" value="search_courses"/>
          <div class="grid-content small-12">
            <div class="grid-container">
              <label>
                <span class="inline-label">
                  <input name="search_input" type="search" placeholder="Search" class="search-large"/>
                  <input type="submit" class="fa fa-2x button light search-large" value="&#xf002;"></input>
                </span>
              </label>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
