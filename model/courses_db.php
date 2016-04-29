<?php
  function search_courses($query) {
    global $db;
    $query = "SELECT * FROM coursestaught
        INNER JOIN courses
        ON courses.CRN = coursestaught.CRN
        INNER JOIN teacher
        ON teacher.teacherID = coursestaught.teacherID
        WHERE (courses.CRN LIKE '%$query%' OR
            courses.subject LIKE '%$query%' OR
            courses.course LIKE '%$query%' OR
            courses.location LIKE '%$query%' OR
            courses.title LIKE '%$query%' OR
            teacher.firstName LIKE '%$query%' OR
            teacher.middleName LIKE '%$query%' OR
            teacher.lastName like '%$query%')";
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
  }

  function get_teachers() {
  	global $db;
  	$query = 'SELECT courses.CRN, courses.subject, courses.course, courses.title, courses.instructorID, teacher.firstName, teacher.lastName, teacher.teacherID
  				FROM courses
  				INNER JOIN teacher
  				ON courses.instructorID = teacher.teacherID
  				ORDER BY course ASC';
  	$statement = $db->prepare($query);
  	$statement->execute();
  	return $statement;
  }

  function return_coursesTaught() {
  	global $db;
  	$query = 'SELECT courses.CRN, courses.course, courses.subject, teacher.firstName, teacher.lastName
  				FROM coursestaught
  				INNER JOIN courses
  				ON courses.CRN = coursestaught.CRN
  				INNER JOIN teacher
  				ON teacher.teacherID = coursestaught.teacherID
  				ORDER BY course ASC';
  	$statement = $db->prepare($query);
  	$statement->execute();
  	return $statement;
  }

  function get_course_details($courseID) {
    global $db;
    $query = 'SELECT courses.CRN, courses.course, courses.subject, courses.title, courses.location, courses.credits, courses.days, courses.time, teacher.firstName, teacher.middleName, teacher.lastName, teacher.email, teacher.teacherID
          FROM coursesTaught
          INNER JOIN courses
          ON courses.CRN = coursestaught.CRN
          INNER JOIN teacher
          ON teacher.teacherID = coursestaught.teacherID
          WHERE coursestaughtID = :courseID';
    $statement = $db->prepare($query);
    $statement->bindValue(":courseID", $courseID);
    $statement->execute();
    $details = $statement->fetch();
    $statement->closeCursor();
    return $details;
  }

  function get_courses_taught_id($courseCRN) {
    global $db;
    $query = 'SELECT coursesTaughtID
          FROM coursesTaught
          WHERE CRN = :courseCRN';
    $statement = $db->prepare($query);
    $statement->bindValue(":courseCRN", $courseCRN);
    $statement->execute();
    $coursesTaughtID = $statement->fetch();
    $statement->closeCursor();
    return $coursesTaughtID;
  }

  function get_registered_course_ids() {
    global $db;
    $query = 'SELECT coursesTaught.CRN
          FROM coursesTaught
          INNER JOIN enrollment
          ON enrollment.coursestaughtID = coursestaught.coursesTaughtID
          WHERE userName = :userName';
    $statement = $db->prepare($query);
    $statement->bindValue(":userName", $_SESSION['current_user']);
    $statement->execute();
    $registeredCourseIDs = $statement->fetchAll();
    $statement->closeCursor();
    return $registeredCourseIDs;
  }

  function get_registered_course_details() {
    global $db;
    $query = 'SELECT *
          FROM coursesTaught
          INNER JOIN enrollment
          ON enrollment.coursestaughtID = coursestaught.coursesTaughtID
          INNER JOIN courses
          ON courses.CRN = coursestaught.CRN
          WHERE userName = :userName';
    $statement = $db->prepare($query);
    $statement->bindValue(":userName", $_SESSION['current_user']);
    $statement->execute();
    $semesters = $statement->fetchAll();
    $statement->closeCursor();
    return $semesters;
  }

  function get_registered_courses_by_semester($semesterID) {
    global $db;
    $query = 'SELECT courses.CRN, courses.course, courses.subject, courses.title, courses.location, courses.credits, courses.days, courses.time
          FROM coursesTaught
          INNER JOIN courses
          ON courses.CRN = coursestaught.CRN
          INNER JOIN enrollment
          ON enrollment.coursestaughtID = coursestaught.coursesTaughtID
          WHERE semesterID = :semesterID';
    $statement = $db->prepare($query);
    $statement->bindValue(":semesterID", $semesterID);
    //$statement->bindValue(":userName", $_SESSION['current_user']);
    $statement->execute();
    $coursesBySemester = $statement->fetchAll();
    $statement->closeCursor();
    return $coursesBySemester;
  }

  function get_semester_ids() {
    global $db;
    $query = 'SELECT semesterID
          FROM coursesTaught
          INNER JOIN enrollment
          ON enrollment.coursestaughtID = coursestaught.coursesTaughtID
          INNER JOIN courses
          ON courses.CRN = coursestaught.CRN
          WHERE userName = :userName';
    $statement = $db->prepare($query);
    $statement->bindValue(":userName", $_SESSION['current_user']);
    $statement->execute();
    $semesters = $statement->fetchAll();
    $statement->closeCursor();
    return $semesters;
  }

  function get_date_created($courseID) {
    global $db;
    $query = 'SELECT dateCreated
          FROM enrollment
          INNER JOIN coursesTaught
          ON enrollment.coursestaughtID = coursestaught.coursesTaughtID
          WHERE coursestaught.coursestaughtID = :courseID';
    $statement = $db->prepare($query);
    $statement->bindValue(":courseID", $courseID);
    $statement->execute();
    $dateCreated = $statement->fetch();
    $statement->closeCursor();
    return $dateCreated;
  }
?>
