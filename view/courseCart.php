<?php
  require('../model/database.php');
  require "../model/courses_db.php";
  session_start();

  include 'partials/globalVars.php';

  $cartItems = array();
  foreach ($_SESSION['course_cart'] as $item) {
    array_push($cartItems, get_course_details($item));
  }

  if (isset($_GET["success"])) {
    $deletedSuccessful = $_GET["success"];
  } else {
    $deletedSuccessful = "";
  }

  if (isset($_GET['deleted'])) {
    $lastDeletedCourse = $_GET['deleted'];
  } else {
    $lastDeletedCourse = "";
  }

  function delete_from_cart() {
    $coursesTaughtID = filter_input(INPUT_GET, "coursesTaughtID");

    $index = array_search($coursesTaughtID, $_SESSION['course_cart']);
    unset($_SESSION['course_cart'][$index]);

    header("Location: $cartPage?deleted=$coursesTaughtID&success=true");
	}

	if (isset($_GET['coursesTaughtID'])) {
		delete_from_cart();
	}
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
        <!-- Course Deleted Successfully Alert -->
        <input type="hidden" id="deletedSuccessful" value="<?php echo $deletedSuccessful; ?>"/>
        <input type="hidden" name="lastDeletedCourse" value="<?php echo $lastDeletedCourse; ?>"/>
        <div id="deletedFromCart" data-alert class="alert-box success radius hide align-center">
          Course has been deleted from cart. <a href="<?php echo '.?action=readd_to_cart&coursesTaughtID='.$lastDeletedCourse; ?>">Undo</a>
          <a href="#" class="close" onclick="closeAlert('deletedFromCart')">&times;</a>
        </div>
        <!-- Body -->
        <div class="grid-container">
          <h1 class="main-heading">Course Cart</h1>
          <div class="align-right grid-block">
            <ul class="button-group segmented">
              <li id="calendarButton" class="is-active"><a href="#" onclick="changeView('calendar')"><i class="fa fa-calendar"></i></a></li>
              <li id="listButton"><a href="#" onclick="changeView('list')"><i class="fa fa-bars"></i></a></li>
            </ul>
          </div>
          <section id="calendarContent">
            <?php include 'partials/calendarView.php'; ?>
          </section>
          <section id="listContent" class="block-list wide hide">
            <?php include 'partials/listView.php'; ?>
          </section>
          <div class="align-right grid-block">
            <a class="button primary large" href="<?php echo '.?action=checkout'; ?>">CHECKOUT</a>
          </div>
        </div>
      </div>
    </div>

    <script>

      $(function() {
        if ($('#deletedSuccessful').val() == 'true') {
          showAlert('deletedFromCart');
        }

        $('#calendar tbody tr td:not(".time")').each(function() {
          if ($(this).html() != "") {
            $(this).css({'background-color':'rgb(138, 181, 161)', 'color':'white'});
          }
        });
      });

      function changeView(viewType) {
        switch (viewType) {
          case 'list':
            $('#listContent').removeClass('hide');
            $('#calendarContent').addClass('hide');
            $('#calendarButton').removeClass('is-active');
            break;
          case 'calendar':
            $('#listContent').addClass('hide');
            $('#calendarContent').removeClass('hide');
            $('#listButton').removeClass('is-active');
            break;
        }
      }
    </script>
  </body>
</html>
