<html>
<head>
	<title>Test</title>
</head>
<body>
	<?php
		$get = validate_account();
	?>

	<?php
		function validate_account()
	{
		global $db;
		$query = 'SELECT FROM * Accounts 
				WHERE userName = :userName';

		$statement = $db->prepare($query);
		$statement->bindValue(':studentID', $studentID);
		$statement->execute();
		$userName = $statement->fetch();
		$password = $statement->fetch();
		$statement->closeCursor();
		$user_name = $userName['userName'];
		$pass_word = $password['password'];
		$result = array($user_Name, $pass_word);
		return $result;
	}
	?>
</body>
</html>