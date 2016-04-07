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
            <?php if (empty($_SESSION['results'])==false) { foreach ( $_SESSION['results'] as $course ) : ?>
              <div class="grid-block">
                <a href="<?php echo ".?action=display_course_details&courseID=".$course['CRN']; ?>">
                  <div class="card secondary">
                    <div class="card-section">
                      <h4><strong><?php echo $course['subject']." ".$course['course']; ?></strong><br/>
                        <strong><?php echo $course['title']; ?></strong><br/>
                        <?php echo $course['instructor']; ?><br/>
                        <?php echo $course['location']; ?><br/></h4>
                      <h4 class="text-right"><?php echo $course['credits']; ?> HRS</h4>
                    </div>
                </div></a>
              </div>
            <?php endforeach; } else { ?> <!--Undefined index on line 19 if 'SHOP' is selected prior to search w/o if/else. Will need seperate messages based on if no search has been conducted (i.e. "Use the search feature!"). Also, what behavior should "SHOP" exhibit if clicked with courses populated?--> 
          </div>
          <div style="<?php echo (empty($_SESSION['results']) ? 'visibility:visible' : 'visibility:hidden'); ?>">
            <h1>Sorry, no results found.</h1>
            <h4>Maybe your search was too specific, please try searching with another term.</h4>
			<?php } ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
