<?php
  require('../model/database.php');
  require "../model/courses_db.php";
  session_start();
  include 'partials/globalVars.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $siteTitle; ?> | Cart</title>
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
          <h1 class="main-heading">Schedule History</h1>
          <section class="block-list wide">
            <ul>
              <li><a href="<?php echo $userHistoryDetailPage; ?>">
                <i class="fa fa-calendar fa-2x"></i>
                <strong>Spring 2015</strong>
                <span class="text-light">created on 11/23/2014 (15 HRS)</span>
              <li><a href="#">
                <i class="fa fa-calendar fa-2x"></i>
                <strong>Fall 2015</strong>
                <span class="text-light">created on 11/23/2014 (15 HRS)</span>
              <li><a href="#">
                <i class="fa fa-calendar fa-2x"></i>
                <strong>Spring 2016</strong>
                <span class="text-light">created on 11/23/2014 (12 HRS)</span>
              <li><a href="#">&nbsp;<span class="block-list-label">
                <strong>TOTAL: 42 HRS</strong></span></a></li>
            </ul>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
