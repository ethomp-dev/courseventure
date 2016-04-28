<?php

  function search_courses($searchInput) {
  	global $db;
    $query  ="SELECT * FROM coursesTaught
              INNER JOIN courses
              ON courses.CRN = coursesTaught.CRN
              WHERE CRN LIKE '%" . $searchInput .
              "%' OR subject LIKE '%" . $searchInput .
              "%' OR course LIKE '%" . $searchInput .
              "%' OR title LIKE '%" . $searchInput .
              "%' OR location LIKE '%" . $searchInput . "%'";

    $statement = $db->prepare($query);
    $statement->execute();
    $searchResults = $statement->fetchAll();
    $statement->closeCursor();
  	return $searchResults;
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

  	$query = 'SELECT courses.CRN, courses.course, courses.subject, teacher.firstName, teacher.lastName
  				FROM coursesTaught
  				INNER JOIN courses
  				ON courses.CRN = coursestaught.CRN
  				INNER JOIN teacher
  				ON teacher.teacherID = coursestaught.teacherID
  				WHERE coursestaughtID = :courseID';

  	$statement = $db->prepare($query);
  	$statement->bindValue(":courseID", $courseID);
  	$statement->execute();
  	return $statement;

  }

?>
