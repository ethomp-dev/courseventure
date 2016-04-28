<?php
  require('../model/database.php');
  require "../model/courses_db.php";
  session_start();
  
  if (isset($_GET["searchInput"]))
  {
    $searchInput = $_GET["searchInput"];
  }
  else
  {
    $searchInput = "";
  }
  $searchResults = search_courses($searchInput);
  include 'partials/globalVars.php';
?>
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
             <?php foreach ($searchResults as $results) : ?>
              <div class="grid-block">
                <a href="<?php echo ".?action=display_course_details&courseID=".$results['coursestaughtID']; ?>">
                  <div class="card secondary">
                    <div class="card-section">
                      <h4><strong><?php echo $results['subject']." ".$results['course']; ?></strong><br/>
                        <strong><?php echo $results['title']; ?></strong><br/>
                        <?php echo $results['firstName']. " " .$results['middleName']. " ", $results['lastName']; ?><br/>
                        <?php echo $results['location']; ?><br/></h4>
                      <h4 class="text-right"><?php echo $results['credits']; ?> HRS</h4>
                    </div>
                </div></a>
              </div>
            <?php endforeach; ?>
          </div>
          <div style="<?php echo (empty($searchResults) ? 'visibility:visible' : 'visibility:hidden'); ?>">
            <h1>Sorry, no results found.</h1>
            <h4>Maybe your search was too specific, please try searching with another term.</h4>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
