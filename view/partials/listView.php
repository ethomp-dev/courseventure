<ul>
  <?php foreach ($cartItems as $course) : ?>
    <li><a href="#">
      <strong><?php echo $course['subject']." ".$course['course']." ".$course['title']; ?></strong>
      <span class="block-list-label"><?php echo $course['credits']; ?> HRS</span>
      <br/><?php echo $course['firstName']." ".$course['middleName']." ".$course['lastName'] ; ?></a></li>
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
