<?php
  require('../model/database.php');
  require "../model/courses_db.php";
  session_start();

  include 'partials/globalVars.php';

  if (isset($_GET["courseID"])) {
    $courseID = $_GET["courseID"];
  } else {
    $courseID = "";
  }
  $course = get_course_details($courseID);

  if (isset($_GET["addedSuccessful"])) {
    $addedSuccessful = $_GET["addedSuccessful"];
  } else {
    $addedSuccessful = "";
  }

  function add_to_cart() {
    $courseID = filter_input(INPUT_POST, "coursesTaughtID");

    if (in_array($courseID, $_SESSION['course_cart'])) {
        header("Location: $detailsPage?courseID=$courseID&addedSuccessful=false");
        return;
    }
    array_push($_SESSION['course_cart'], $courseID);
    header("Location: $detailsPage?courseID=$courseID&addedSuccessful=true");
	}

	if (isset($_POST['coursesTaughtID'])) {
		add_to_cart();
	}
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
        <input type="hidden" id="addedSuccessful" value="<?php echo $addedSuccessful; ?>"/>
        <div id="addedToCart" data-alert class="alert-box success radius hide align-center">
          Course has been added to cart. <a href="<?php echo $cartPage; ?>">View</a>
          <a href="#" class="close" onclick="closeAlert('addedToCart')">&times;</a>
        </div>
        <!-- Course Add Failed Alert -->
        <div id="failedToAdd" data-alert class="alert-box warning radius hide align-center">
          Course already added to cart.
          <a href="#" class="close" onclick="closeAlert('failedToAdd')">&times;</a>
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
                class="underline"><?php echo $course['firstName']." ".$course['middleName']." ".$course['lastName'] ; ?></a>
              <a href="mailto:<?php echo $course['email']; ?>" target="_blank"><i class="fa fa-envelope-o"></i></a>
            </h4>
            <h4><span class="text-light">located in </span><?php echo $course['location']; ?></h4>
            <h3><strong><?php echo $course['credits']; ?> HRS</strong></h3>
          </div>
          <div class="medium-2 grid-block vertical">
            <form action="<?php echo $detailsPage; ?>" method="post">
              <span>
                <input type="hidden" name="coursesTaughtID" value="<?php echo $courseID; ?>"/>
                <input type="submit" class="button secondary large" value="ADD TO CART"/>
                <?php if ($_SESSION['current_user'] == $admin) { ?>
                  <a href="<?php echo $detailsEditPage.'?courseID='.$courseID; ?>" class="button primary large">EDIT COURSE</a>
                  <a href="<?php echo '.?action=delete_course&courseID='.$courseID; ?>" class="button alert large">DELETE</a>
                <?php } ?>
              </span>
            </form>
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
              from <span class="text-secondary"><?php echo $course['startTime']." - ".$course['endTime']; ?></span></li>
            <li>CRN is <span class="text-secondary"><?php echo $course['CRN']; ?></span></li>
          <ul>
        </div>
      </div>
    </div>

    <script>
      $(function() {
        if ($('#addedSuccessful').val() == 'true') {
          showAlert('addedToCart');
        } else if ($('#addedSuccessful').val() == 'false') {
          showAlert('failedToAdd');
        }
      });
    </script>
  </body>
</html>
