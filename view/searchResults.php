<?php session_start(); include 'partials/globalVars.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $siteTitle; ?> | Search Results</title>
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
          <div class="grid-block small-up-3 space-top">
            <?php if (!empty($_SESSION['results'])) { foreach ( $_SESSION['results'] as $courseTaught ) : ?>
              <div class="grid-block">
                <a href="<?php echo ".?action=display_course_details&courseID=".$courseTaught['CRN']; ?>">
                  <div class="card secondary">
                    <div class="card-section">
                      <h4><strong><?php echo $courseTaught['subject']." ".$courseTaught['course']; ?></strong><br/>
                        <strong><?php echo $courseTaught['title']; ?></strong><br/>
                        <?php echo $courseTaught['teacherID']; ?><br/>
                        <?php echo $courseTaught['location']; ?><br/></h4>
                      <h4 class="text-right"><?php echo $courseTaught['credits']; ?> HRS</h4>
                    </div>
                </div></a>
              </div>
            <?php endforeach; } ?>
          </div>
          <div style="<?php echo (empty($_SESSION['results']) ? 'visibility:visible' : 'visibility:hidden'); ?>">
            <h1>Sorry, no results found.</h1>
            <h4>Maybe your search was too specific, please try searching with another term.</h4>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
