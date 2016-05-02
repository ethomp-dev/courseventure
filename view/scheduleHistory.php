<?php
  require('../model/database.php');
  require "../model/courses_db.php";
  session_start();
  include 'partials/globalVars.php';

  $totalCredits = 0;
  $semesters = get_semester_ids();
  $uniqueSemesters = array();
  foreach ($semesters as $semester) {
    if (empty($uniqueSemesters)) {
      array_push($uniqueSemesters, $semester);
    } else {
      foreach ($uniqueSemesters as $uniqueSemester) {
        if ($uniqueSemester != $semester) {
          array_push($uniqueSemesters, $semester);
        }
      }
    }
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
        <!-- Body -->
        <div class="grid-container">
          <h1 class="main-heading">Schedule History</h1>
          <?php if (get_registered_courses_by_user() != false) { ?>
            <section class="block-list wide">
              <ul>
                <?php foreach ($uniqueSemesters as $uniqueSemester) : ?>
                  <li><a href="<?php echo $userHistoryDetailPage."?semester=".$uniqueSemester['semesterID']; ?>">
                    <i class="fa fa-calendar fa-2x"></i>
                    <strong><?php
                      switch(substr($uniqueSemester['semesterID'], 0, 2)) {
                        case '10':
                          echo 'Spring ';
                          break;
                        case '80':
                          echo 'Fall ';
                          break;
                      }
                      echo '20'.substr($uniqueSemester['semesterID'], 2, 4); ?></strong>
                    <span class="text-light"><?php
                      $credits = 0;
                      $date = date('Y-m-d');
                      $registeredCourses = get_registered_courses_by_semester($uniqueSemester['semesterID']);
                      foreach ($registeredCourses as $course) {
                        $coursesTaughtID = get_courses_taught_id($course['CRN']);
                        $date = get_date_created($coursesTaughtID['coursesTaughtID']);
                        $credits += $course['credits'];
                      }
                      $totalCredits += $credits;
                      echo 'created on '.$date['dateCreated'].' ('.$credits.' HRS)'; ?></span>
                <?php endforeach; ?>
                <li><a href="#">&nbsp;<span class="block-list-label">
                  <strong>TOTAL: <?php echo $totalCredits; ?> HRS</strong></span></a></li>
              </ul>
            </section>
          <?php } else { ?>
            <h3>You have no previous schedules.</h3>
          <?php } ?>
        </div>
      </div>
    </div>
  </body>
</html>
