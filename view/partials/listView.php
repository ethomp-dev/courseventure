<ul>
  <?php foreach ($cartItems as $course) :  $id = get_courses_taught_id($course['CRN']); ?>
    <li><a href="<?php echo ".?action=display_course_details&courseID=".$id['coursesTaughtID']; ?>">
      <strong><?php echo $course['subject']." ".$course['course']." ".$course['title']; ?></strong>
      <span class="block-list-label"><?php echo $course['credits']; ?> HRS</span>
      <br/><?php echo $course['firstName']." ".$course['middleName']." ".$course['lastName'] ; ?></a>
      <a href="<?php echo "$cartPage?coursesTaughtID=".$id['coursesTaughtID']; ?>"
        class="text-right"><small class="delete">Delete Course</small></a></li>
  <?php endforeach; ?>
  <li><a href="#">&nbsp;<span class="block-list-label">
    <strong>
      <?php
        // TODO: Correctly calculate credit hours
        $creditHours = 0;
        foreach ($_SESSION['course_cart'] as $item) {
          $course = get_course_details($item);
          $creditHours += $course['credits'];
        }
        echo "SUBTOTAL: ".$creditHours." HRS";
      ?>
    </strong></span></a></li>
</ul>
