<?php  
  require('../model/database.php');
  require "../model/courses_db.php";
  session_start(); 
  if (isset($_GET["courseID"]))
  {
    $courseID = $_GET["courseID"];
  }
  else
  {
    $courseID = "";
  }
  $course = get_course_details($courseID);
  include 'partials/globalVars.php'; 
?>
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
            <span><a href="https://facilities.uncc.edu/sites/facilities.uncc.edu/files/media/Maps/Uncc_Campus_Map.pdf" target="_blank">
              <img src="<?php echo $pathToImg; ?>map.jpg" alt="Map"/></a>
            </span>
          </div>
          <div class="medium-6 grid-block vertical space-left">
            <h3><strong><?php echo $course['subject']." ".$course['course']." ".$course['title']; ?></strong></h3>
            <h4><span class="text-light">taught by </span>
              <a href="http://www.ratemyprofessors.com/ShowRatings.jsp?tid=<?php echo $course['teacherID']; ?>" target="_blank"
                class="underline"><?php echo $course['firstName']. " ".$course['lastName'] ; ?></a>
              <a href="mailto:<?php echo $course['email']; ?>" target="_blank"><i class="fa fa-envelope-o"></i></a>
            </h4>
            <h4><span class="text-light">located in </span><?php echo $course['location']; ?></h4>
            <h3><strong><?php echo $course['credits']; ?> HRS</strong></h3>
          </div>
          <div class="medium-2 grid-block vertical">
            <span>
              <a class="button secondary large" href="<?php echo'.?action=add_to_cart&coursesTaughtID='.$courseID;?> " onclick="showAlert('addedToCart')">ADD TO CART</a>
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
