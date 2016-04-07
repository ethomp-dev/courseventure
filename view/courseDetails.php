<?php session_start(); $course = $_SESSION['selected_course']; include 'partials/globalVars.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $siteTitle; ?> | Course Details</title>
    <?php include 'partials/preBodyHead.php'; ?>
  </head>
  <body>
    <div class="grid-frame">
      <!-- Side Menu -->
      <?php include 'partials/sideMenu.php'; ?>

      <div class="grid-block collapse medium-9 large-10 vertical">
        <!-- Top Bar -->
        <?php include 'partials/topMenu.php'; ?>
        <!-- Course Added Successfully Alert -->
        <div id="addedToCart" data-alert class="alert-box success radius hide align-center">
          Course has been added to cart. <a href="<?php echo $cartPage; ?>">View</a>
          <a href="#" class="close" onclick="closeAlert('addedToCart')">&times;</a>
        </div>
        <!-- Body -->
        <div class="grid-block align-center shrink space-top">
          <div class="medium-2 grid-block">
            <span><img src="<?php echo $pathToImg; ?>map.jpg" alt="Map"/></span>
          </div>
          <div class="medium-6 grid-block vertical space-left">
            <h3><strong><?php echo $course['subject']." ".$course['course']." ".$course['title']; ?></strong></h3>
            <h4><span class="text-light">taught by </span><?php echo $course['instructor']; ?></h4>
            <h4><span class="text-light">located in </span><?php echo $course['location']; ?></h4>
            <h3><strong><?php echo $course['credits']; ?> HRS</strong></h3>
          </div>
          <div class="medium-2 grid-block">
            <span>
              <a class="button secondary large" href="#" onclick="showAlert('addedToCart')">ADD TO CART</a>
            </span>
          </div>
        </div>
        <div class="grid-block shrink">
          <hr/>
        </div>
        <div class="small-offset-1 grid-block shrink">
          <h3>About this Course</h3>
        </div>
        <div class="small-offset-1 grid-block shrink">
          <ul>
            <li>meets on <span class="text-secondary"><?php echo $course['days']; ?></span>
              from <span class="text-secondary"><?php echo $course['time']; ?></span></li>
            <li>CRN is <span class="text-secondary"><?php echo $course['CRN']; ?></span></li>
          <ul>
        </div>
      </div>
    </div>
  </body>
</html>
