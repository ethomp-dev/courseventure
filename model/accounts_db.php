<?php

function add_account($name, $school, $userName, $email, $password) {
	global $db;
	$query = 'INSERT INTO accounts
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
	$query = 'DELETE FROM accounts
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
	$query = 'SELECT password FROM accounts
				WHERE userName = :userName';

	$statement = $db->prepare($query);
	$statement->bindValue(':userName', $userName);
	$statement->execute();
	$creds = $statement->fetch();
	$statement->closeCursor();
	return $creds;
}

function get_user_email($email) {
	global $db;
	$query = 'SELECT email FROM accounts
					WHERE email = :email';
	$statement = $db ->prepare($query);
	$statement->execute();
	$email = $statement->fetch();
	$statement->closeCursor();
	return $email;
}

function update_user($name, $school, $userName, $password, $email) {
	global $db;
	$query = 'UPDATE accounts
						SET name = :name,
								school = :school,
								email = :email,
								password = :password
						WHERE userName = :userName';

	$statement = $db->prepare($query);
	$statement->bindValue(':name', $name);
	$statement->bindValue(':school', $school);
	$statement->bindValue(':userName', $userName);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':password', $password);
	$statement->execute();
	$statement->closeCursor();
}

function show_all_users() {
	global $db;
	$query = "SELECT * FROM accounts";

	$statement = $db->prepare($query);
	$statement->execute();
	return $statement;
}

function delete_user($userName) {
	global $db;
	$query = "DELETE FROM accounts WHERE userName = :userName";

	$statement = $db->prepare($query);
	$statement->bindValue(":userName", $userName);
	$statement->execute();
	return $statement;
}

?>
