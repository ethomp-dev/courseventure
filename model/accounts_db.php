<?php

function add_account($name, $school, $userName, $email, $password) {
	global $db;
	$query = 'INSERT INTO Accounts
				(name, school, userName, email, password)
				VALUES
				(:name, :school, :userName, :email, :password)';

	$statement = $db->prepare($query);
	$statement->bindValue(':name', $name);
	$statement->bindValue(':school', $school);
	$statement->bindValue(':userName', $userName);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':password', $password);
	$statement->execute();
	$statement->closeCursor();
}

function delete_account($userName) {
	global $db;
	$query = 'DELETE FROM Accounts
				WHERE userName = :userName';
	$statement = $db->prepare($query);
	$statement->bindValue(':userName', $userName);
	$statement->execute();
	$statement->closeCursor();
}

function get_user($username) {
	global $db;
	$query = 'SELECT * FROM accounts
						WHERE userName = :username';

	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$statement->execute();
	$user = $statement->fetch();
	$statement->closeCursor();
	return $user;
}

function validate_account($userName) {
	global $db;
	$query = 'SELECT * FROM Accounts
				WHERE userName = :userName';

	$statement = $db->prepare($query);
	$statement->bindValue(':userName', $userName);
	$statement->execute();
	$id = $statement->fetch();
	$statement->closeCursor();
	$userName = $id['userName'];
	$password = $id['password'];
	$result = array($userName, $password);
	return $result;
}

function get_user_email($email) {
	global $db;
	$query = 'SELECT email FROM Accounts
					WHERE email = :email';
	$statement = $db ->prepare($query);
	$statement->execute();
	$email = $statement->fetch();
	$statement->closeCursor();
	return $email;
}

?>
