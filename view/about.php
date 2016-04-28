<?php
  require('../model/database.php');
  require "../model/courses_db.php";
  session_start();
  include 'partials/globalVars.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $siteTitle; ?> | About</title>
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
          <h1 class="main-heading">Our Objective</h1>
          <p>All of us at Course Venture strive to decrease the excessive time and resources which college students
            waste when preparing for registration. This application combines the functionality of numerous other
            websites and programs into one location so you can assemble your class list with ease.</p>
          <h1 class="main-heading">Meet the Team</h1>
          <div class="grid-block small-up-2 medium-up-4">
            <div class="grid-content">
              <div class="card">
              <img src="http://placekitten.com/200/150?image=15">
              <div class="card-divider">
                <h3 class="card-title">Elizabeth Thompson</h3>
                <h5>Web/Graphic Designer and Web Developer</h5>
              </div>
              </div>
            </div>
            <div class="grid-content">
              <div class="card">
                <img src="http://placekitten.com/200/150?image=16">
                <div class="card-divider">
                  <h3 class="card-title">Andrew Dennis</h3>
                  <h5>Database Designer and Developer</h5>
                </div>
              </div>
            </div>
            <div class="grid-content">
              <div class="card">
                <img src="http://placekitten.com/200/150?image=4">
                <div class="card-divider">
                  <h3 class="card-title">Tyler Prufer</h3>
                  <h5>Web Designer and Developer</h5>
                </div>
              </div>
            </div>
            <div class="grid-content">
              <div class="card">
                <img src="http://placekitten.com/200/150?image=1">
                <div class="card-divider">
                  <h3 class="card-title">Jared O'Neal</h3>
                  <h5>Database Designer and Developer</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
