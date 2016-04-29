<?php

	function addToCart($userName, $ID, $creationDate) {
		global $db;

		$query = "INSERT INTO enrollment (userName, coursestaughtID, dateCreated)
							VALUES (:userName, :coursestaughtID, :dateCreated)";

		$statement = $db->prepare($query);
		$statement->bindValue(":userName", $userName);
		$statement->bindValue(":coursestaughtID", $ID);
		$statement->bindValue(":dateCreated", $creationDate);
		$statement->execute();
		return $statement;
	}

?>
