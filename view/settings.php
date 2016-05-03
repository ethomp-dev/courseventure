<?php
	session_start();
	require('../model/database.php');
	require "../model/accounts_db.php";
  require "../model/courses_db.php";
	include 'partials/globalVars.php';

	if (!isset($_GET['user'])) {
		$user = get_user($_SESSION['current_user']);
	} else {
		$user = get_user($_GET['user']);
	}
	$hidden_password=preg_replace("|.|","*",$user['password']);

	function validate() {
		$user = get_user($_SESSION['current_user']);
		$name = filter_input(INPUT_POST, 'name');
		$school = filter_input(INPUT_POST, 'school');
		$username = $user['userName'];
		$email = filter_input(INPUT_POST, 'email');
		$password = filter_input(INPUT_POST, 'password');
		update_user($name, $school, $username, $password, $email);
		header("Location: settings.php");
	}

	if (isset($_POST['finishedEditing'])) {
		validate();
	}
?>
<!doctype html>
<html lang="en">
	<head>
		<title><?php echo $siteTitle; ?> | Account Settings</title>
		<?php include 'partials/preBodyHead.php';?>
	</head>
	<body>
		<div class="grid-frame">
		<!-- Side Menu -->
		<?php include 'partials/sideMenu.php'; ?>

			<div class="grid-block collapse medium-9 large-10 vertical">
				<!-- Top Bar -->
				<?php include 'partials/topMenu.php'; ?>
				<!-- Body -->
				<div class="grid-container">
					<h1 class="main-heading">Account Settings</h1>
					<form action="<?php echo $settingsPage; ?>" method="post">
						<input type="hidden" name="finishedEditing" value="true"/>
						<table id="settingsTable">
							<tr>
								<td width="200px"><strong>Name</strong></td>
								<td width="300px"><span><?php echo $user['name']; ?></span>
									<input type="text" name="name" class="hide"/></td>
							</tr>
							<tr>
								<td><strong>School</strong></td>
								<td><span><?php echo $user['school']; ?></span>
									<input type="text" name="school" class="hide"/></td>
							</tr>
							<tr>
								<td><strong>Username</strong></td>
								<td><span><?php echo $user['userName']; ?></span>
									<input type="text" name="userName" class="hide" disabled=""/></td>
							</tr>
							<tr>
								<td><strong>Password</strong></td>
								<td><span><?php echo $hidden_password; ?></span>
									<input type="text" name="password" class="hide"/></td>
							</tr>
							<tr>
								<td><strong>Email</strong></td>
								<td><span><?php echo $user['email']; ?></span>
									<input type="text" name="email" class="hide"/></td>
							</tr>
						</table>
						<div id="editButtons" class="align-center grid-block">
							<a class="button primary large" onclick="editSettings()">EDIT SETTINGS</a>
						</div>
						<div id="saveButtons" class="align-center grid-block hide">
							<input type="submit" class="button primary large" value="SAVE CHANGES"/>
							<a class="button secondary large" href="<?php echo $settingsPage; ?>">CANCEL</a>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script>
			function editSettings() {
				var $table = $('#settingsTable');

				$('#settingsTable tr td:nth-of-type(2)').each(function() {
					$cell = $(this);
					var settingText = $cell.find('span').text();
					$cell.find('span').addClass('hide');
					$cell.find('input').removeClass('hide').val(settingText);
				})

				$('#editButtons').addClass('hide');
				$('#saveButtons').removeClass('hide');

			}
		</script>
	</body>
</html>
