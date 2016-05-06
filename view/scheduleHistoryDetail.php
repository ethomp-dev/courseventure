<?php
  require('../model/database.php');
  require "../model/courses_db.php";
  session_start();
  include 'partials/globalVars.php';

  $semesterCourses = array();

  if (isset($_GET['semester'])) {
    $semester = filter_input(INPUT_GET, "semester");
    $semesterCourses = get_registered_courses_by_semester($semester);
  }

  $eightSlots = array('08:00','M','T','W','R','F');
  $nineSlots = array('09:30','M','T','W','R','F');
  $elevenSlots = array('11:00','M','T','W','R','F');
  $twelveSlots = array('12:30','M','T','W','R','F');
  $twoSlots = array('02:00','M','T','W','R','F');
  $threeSlots = array('03:30','M','T','W','R','F');
  $fiveSlots = array('05:00','M','T','W','R','F');
  $sixSlots = array('06:30','M','T','W','R','F');

  function fillCalendarSlots($timeSlots, $semesterCourses) {
    foreach ($timeSlots as $slot) {
      if (strpos($slot, ':') !== false) {
        echo '<td class="time">'.$slot.'</td>';
        $currentTime = $slot;
      } else {
        $dayFound = false;

        foreach ($semesterCourses as $item) {
          $coursesTaughtID = get_courses_taught_id($item['CRN']);
          $course = get_course_details($coursesTaughtID['coursesTaughtID']);
          $days = str_split($course['days']);
          $startTime = substr($course['startTime'], 0, 5);
          foreach ($days as $day) {
            if ($day == $slot && $startTime == $currentTime) {
              echo '<td><a class="white" href=".?action=display_course_details&courseID='.$coursesTaughtID['coursesTaughtID'].'">'.$course['subject']." ".$course['course'].'</td>';
              $dayFound = true;
            }
          }
        }

        if ($dayFound == false) {
          echo '<td></td>';
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
          <h1 class="main-heading">Spring 2016 Calendar</h1>
          <table id="calendar">
            <thead>
              <!--<tr>
                <th colspan="6">January</th>
              </tr>-->
              <tr>
                <th></th>
                <th width="18%">M</th>
                <th width="18%">T</th>
                <th width="18%">W</th>
                <th width="18%">R</th>
                <th width="18%">F</th>
              </tr>
            </thead>
            <tbody>
              <tr><?php fillCalendarSlots($eightSlots, $semesterCourses);?></tr>
              <tr><?php fillCalendarSlots($nineSlots, $semesterCourses);?></tr>
              <tr><?php fillCalendarSlots($elevenSlots, $semesterCourses);?></tr>
              <tr><?php fillCalendarSlots($twelveSlots, $semesterCourses);?></tr>
              <tr><?php fillCalendarSlots($twoSlots, $semesterCourses);?></tr>
              <tr><?php fillCalendarSlots($threeSlots, $semesterCourses);?></tr>
              <tr><?php fillCalendarSlots($fiveSlots, $semesterCourses);?></tr>
              <tr><?php fillCalendarSlots($sixSlots, $semesterCourses);?></tr>
            </tbody>
          </table>

          <div>
            <?php
              $numCoursesTBA = 0;
              foreach ($semesterCourses as $item) {
                $coursesTaughtID = get_courses_taught_id($item['CRN']);
                $course = get_course_details($coursesTaughtID['coursesTaughtID']);
                if (trim($course['startTime']) == 'TBA') {
                  if ($numCoursesTBA != 0) {
                    echo ", ";
                  } else {
                    echo '<p class="text-center">*Date and time for<strong> ';
                  }
                  echo '<a href=".?action=display_course_details&courseID='.$coursesTaughtID['coursesTaughtID'].'">'.$course['subject']." ".$course['course'].'</a>';
                  $numCoursesTBA += 1;
                }
              }
              if ($numCoursesTBA != 0) {
                echo ' </strong> is to be announced.</p>';
              }
            ?>
          </div>
          <div class="align-center grid-block">
            <a class="button primary large" href="<?php echo $userHistoryPage; ?>"><i class="fa fa-arrow-left"></i> VIEW OTHER SCHEDULES</a>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(function() {
        $('#calendar tbody tr td:not(".time")').each(function() {
          if ($(this).html() != "") {
            $(this).css({'background-color':'rgb(138, 181, 161)', 'color':'white'});
          }
        });
      });
    </script>
  </body>
</html>
