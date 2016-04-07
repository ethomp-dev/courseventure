<?php

  function search_courses($searchInput) {
  	global $db;
    $query  ="SELECT * FROM courses
              WHERE CRN LIKE '%" . $searchInput .
              "%' OR subject LIKE '%" . $searchInput .
              "%' OR course LIKE '%" . $searchInput .
              "%' OR title LIKE '%" . $searchInput .
              "%' OR instructor LIKE '%" . $searchInput .
              "%' OR location LIKE '%" . $searchInput . "%'";

    $statement = $db->prepare($query);
    $statement->execute();
    $searchResults = $statement->fetchAll();
    $statement->closeCursor();
  	return $searchResults;
  }

  function get_course_details($courseID) {
  	global $db;
  	$query = 'SELECT * FROM courses
  						WHERE CRN = :courseID';

  	$statement = $db->prepare($query);
  	$statement->bindValue(':courseID', $courseID);
  	$statement->execute();
  	$user = $statement->fetch();
  	$statement->closeCursor();
  	return $user;
  }

?>
