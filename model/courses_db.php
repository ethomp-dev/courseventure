<?php

function search_courses($query)
{
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

    $query = 'SELECT courses.CRN, courses.course, courses.subject, courses.title, courses.location, courses.credits, courses.days, courses.time, teacher.firstName, teacher.lastName, teacher.email, teacher.teacherID
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

?>
