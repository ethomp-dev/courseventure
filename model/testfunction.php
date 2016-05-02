<?php

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

function coursesTaught($courseID)
{
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

function search($query)
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

function add_course($CRN, $subject, $course, $section, $credits, $title, $days, $time, $capacity, $location, $teacherID, $semesterID, $firstName, $middleName, $lastName, $email)
{
	global $db;
	$query = "INSERT INTO courses (CRN, subject, course, section, credits, title, days, time, capacity, location)
				VALUES (:CRN, :subject, :course, :section, :credits, :title, :days, :time, :capacity, :location)";
	$query2 = "INSERT INTO coursestaught (teacherID, CRN, semesterID) VALUES (:teacherID, :CRN, :semesterID)";

	$query3 = "INSERT INTO teacher (firstName, middleName, lastName, teacherID, email)
				VALUES (:firstName, :middleName, :lastName, :teacherID, :email)";

	$statement = $db->prepare($query);
	$statement2 = $db->prepare($query2);
	$statement3 = $db->prepare($query3);
	$statement->bindValue(":CRN", $CRN);
	$statement->bindValue(":subject", $subject);
	$statement->bindValue(":course", $course);
	$statement->bindValue(":section", $section);
	$statement->bindValue(":credits", $credits);
	$statement->bindValue(":title", $title);
	$statement->bindValue(":days", $days);
	$statement->bindValue(":time", $time);
	$statement->bindValue(":capacity", $capacity);
	$statement->bindValue(":location", $location);
	$statement2->bindValue(":teacherID", $teacherID);
	$statement2->bindValue(":CRN", $CRN);
	$statement2->bindValue(":semesterID", $semesterID);
	$statement3->bindValue(":firstName", $firstName);
	$statement3->bindValue(":middleName", $middleName);
	$statement3->bindValue(":lastName", $lastName);
	$statement3->bindValue(":teacherID", $teacherID);
	$statement3->bindValue(":email", $email);
	$statement->execute();
	$statement2->execute();
	$statement3->execute();
	return $statement;
}

function show_all_users()
{
	global $db;

	$query = "SELECT * FROM accounts";

	$statement = $db->prepare($query);
	$statement->execute();
	return $statement;
}


?>
