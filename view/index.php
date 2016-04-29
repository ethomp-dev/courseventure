<?php
  $lifetime = 60 * 60 * 24 * 3;
  session_set_cookie_params($lifetime, "/");
  session_start();
  require('../model/database.php');
  require "../model/accounts_db.php";
  require "../model/courses_db.php";
  require "../model/cart_db.php";
  include "partials/globalVars.php";

  if (!isset ($_SESSION['firstLoad'])) {
    // Initialize errors
    $_SESSION['usernameError'] = "";
    $_SESSION['passwordError'] = "";
    $_SESSION['nameError'] = "";
    $_SESSION['emailError'] = "";

    $_SESSION['firstLoad'] = 'false';

    // Initialize cart
    $_SESSION['course_cart'] = array();
  }

  // Initialize regular variables
  $addedSuccessful = false;

  $action = filter_input(INPUT_POST, 'action');
  if ($action == NULL) {
      $action = filter_input(INPUT_GET, 'action');
      if ($action == NULL) {
          $action = 'display_login';
      }
  }

  switch ($action) {
    case 'display_login':
      $_SESSION['usernameError'] = "";
      $_SESSION['passwordError'] = "";
      header("Location: $loginPage");
      break;

    case 'login':
      $username = filter_input(INPUT_POST, 'username');
      $password = filter_input(INPUT_POST, 'password');
      $account_credentials = validate_account($username);

      if ($username == '') {
        $_SESSION['usernameError'] = "Please enter a username.";
      } else if (get_user($username) == '') {
        $_SESSION['usernameError'] = "Username does not exist.";
      }

      if ($password == '') {
        $_SESSION['passwordError'] = "Please enter a password.";
      } else if ($account_credentials[0] == "" || $account_credentials[1] == "") {
        $_SESSION['passwordError'] = "Incorrect password.";
      }

      if ($_SESSION['usernameError'] == "" && $_SESSION['passwordError'] == "") {
        $_SESSION['is_valid_user'] = 'true';
        $_SESSION['current_user'] = $username;
        header("Location: $homePage");
      } else {
        header("Location: $loginPage");
      }
      break;
    case 'display_signup':
      $_SESSION['nameError'] = "";
      $_SESSION['usernameError'] = "";
      $_SESSION['emailError'] = "";
      $_SESSION['passwordError'] = "";
      header("Location: $signupPage");
      break;

    case 'signup':
      $name = filter_input(INPUT_POST, 'name');
      $school = filter_input(INPUT_POST, 'school');
      $username = filter_input(INPUT_POST, 'username');
      $email = filter_input(INPUT_POST, 'email');
      $password = filter_input(INPUT_POST, 'password');

      if ($name == '') {
        $_SESSION['nameError'] = "Please enter a name.";
      } else { $_SESSION['nameError'] = ""; }

      if ($username == '') {
        $_SESSION['usernameError'] = "Please enter a username.";
      } else { $_SESSION['usernameError'] = ""; }

      if ($email == '') {
        $_SESSION['emailError'] = "Please enter a email.";
      } else { $_SESSION['emailError'] = ""; }

      if ($password == '') {
        $_SESSION['passwordError'] = "Please enter a password.";
      } else { $_SESSION['passwordError'] = ""; }

      if ($_SESSION['nameError'] == "" && $_SESSION['usernameError'] == "" &&
          $_SESSION['emailError'] == "" && $_SESSION['passwordError'] == "") {

        add_account($name, $school, $username, $email, $password);
        $_SESSION['is_valid_user'] = 'true';
        $_SESSION['current_user'] = $username;
        header("Location: $homePage");
      } else {
        header("Location: $signupPage");
      }
      break;

    case 'search_courses':
      $searchInput = filter_input(INPUT_POST, 'search_input');
      header("Location: $resultsPage?searchInput=$searchInput");

      break;

    case 'display_course_details':
      $courseID = filter_input(INPUT_GET, 'courseID');

      if ($courseID != "") {
        //$_SESSION['selected_course'] = get_course_details($courseID);
        header("Location: $detailsPage?courseID=$courseID");
      }
      break;

    case 'display_settings':
      if ($_SESSION['is_valid_user'] == 'true') {
        header("Location: $settingsPage");
      } else {
        header('Location: .');
      }
      break;
    case 'add_to_cart':
      $courseID = filter_input(INPUT_GET, "coursesTaughtID");
      if (in_array($courseID, $_SESSION['course_cart'])) {
          echo $courseID." already exists.";
          break;
      }
      array_push($_SESSION['course_cart'], $courseID);
      $addedSuccessful = true;
      header("Location: $detailsPage");
      break;

    case 'readd_to_cart':
      $courseID = filter_input(INPUT_GET, "coursesTaughtID");
      array_push($_SESSION['course_cart'], $courseID);
      header("Location: $cartPage");
      break;

    case 'delete_course':
      $courseID = filter_input(INPUT_GET, "id");
      $index = array_search($courseID, $_SESSION['course_cart']);
      unset($_SESSION['course_cart'][$index]);
      header("Location: $cartPage");
      break;

    case 'logout':
      $_SESSION = array();
      session_destroy();
      break;

    case 'checkout':
      foreach ($_SESSION['course_cart'] as $item)
      {
        addToCart($_SESSION['current_user'], $item);
      }
      
      header("Location: $confirmationPage");
      break;
  }

?>
