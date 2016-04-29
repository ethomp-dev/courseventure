<?php $eightSlots = array('08:00','M','T','W','R','F');
      $nineSlots = array('09:30','M','T','W','R','F');
      $elevenSlots = array('11:00','M','T','W','R','F');
      $twelveSlots = array('12:30','M','T','W','R','F');
      $twoSlots = array('02:00','M','T','W','R','F');
      $threeSlots = array('03:30','M','T','W','R','F');
      $fiveSlots = array('05:00','M','T','W','R','F');
      $sixSlots = array('06:30','M','T','W','R','F');

  function fillCalendarSlots($timeSlots) {
    foreach ($timeSlots as $slot) {
      if (strpos($slot, ':') !== false) {
        echo '<td class="time">'.$slot.'</td>';
        $currentTime = $slot;
      } else {
        $dayFound = false;

        foreach ($_SESSION['course_cart'] as $item) {
          $course = get_course_details($item);
          $days = str_split($course['days']);
          $startTime = substr($course['time'], 0, 5);
          foreach ($days as $day) {
            if ($day == $slot && $startTime == $currentTime) {
              echo '<td><a class="white" href=".?action=display_course_details&courseID='.$item.'">'.$course['subject']." ".$course['course'].'</a></td>';
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
    <tr><?php fillCalendarSlots($eightSlots);?></tr>
    <tr><?php fillCalendarSlots($nineSlots);?></tr>
    <tr><?php fillCalendarSlots($elevenSlots);?></tr>
    <tr><?php fillCalendarSlots($twelveSlots);?></tr>
    <tr><?php fillCalendarSlots($twoSlots);?></tr>
    <tr><?php fillCalendarSlots($threeSlots);?></tr>
    <tr><?php fillCalendarSlots($fiveSlots);?></tr>
    <tr><?php fillCalendarSlots($sixSlots);?></tr>
  </tbody>
</table>

<div>
  <?php
    $numCoursesTBA = 0;
    foreach ($_SESSION['course_cart'] as $item) {
      $course = get_course_details($item);
      if (trim($course['time']) == 'TBA') {
        if ($numCoursesTBA != 0) {
          echo ", ";
        } else {
          echo '<p class="text-center">*Date and time for<strong> ';
        }
        echo '<a href=".?action=display_course_details&courseID='.$item.'">'.$course['subject']." ".$course['course'].'</a>';
        $numCoursesTBA += 1;
      }
    }
    if ($numCoursesTBA != 0) {
      echo ' </strong> is to be announced.</p>';
    }
  ?>
</div>
