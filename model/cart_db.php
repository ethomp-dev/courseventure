<?php




function addToCart($userName, $ID)
{
	global $db;

	$query = "INSERT INTO enrollment (userName, coursestaughtID) VALUES (:userName, :coursestaughtID)";

	$statement = $db->prepare($query);
	$statement->bindValue(":userName", $userName);
	$statement->bindValue(":coursestaughtID", $ID);
	$statement->execute();
	return $statement;
}

?>
