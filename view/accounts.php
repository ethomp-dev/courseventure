<?php
	session_start();
	require('../model/database.php');
	require "../model/accounts_db.php";
  require "../model/courses_db.php";
	include 'partials/globalVars.php';
	$users = show_all_users();
?>
<!doctype html>
<html lang="en">
	<head>
		<title><?php echo $siteTitle; ?> | Accounts</title>
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
					<h1 class="main-heading">Accounts</h1>
					<form action="." method="post">
						<table id="accountsTable">
							<thead>
								<tr>
									<th>&nbsp;</th>
									<th>Name</th>
									<th>School</th>
									<th>Username</th>
									<th>Email</th>
									<th>Password</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($users as $user) : ?>
									<tr>
										<td><input type="radio" name="user" value="<?php echo $user['userName']; ?>"/></td>
										<td><?php echo $user['name']; ?></td>
										<td><?php echo $user['school']; ?></td>
										<td><?php echo $user['userName']; ?></td>
										<td><?php echo $user['email']; ?></td>
										<td><?php echo preg_replace("|.|", "*", $user['password']); ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						<div class="align-center grid-block">
							<input type="submit" class="button primary large" value="EDIT SETTINGS"/>
							<input type="submit" class="button alert large" value="DELETE"/>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script>
			$(function() {
				$('#accountsTable tbody tr:nth-child(1) td input').prop('checked', 'checked');
			});

			$('input[type=submit]').click(function() {
				if ($(this).val() == 'EDIT SETTINGS') {
					$('form').append('<input type="hidden" name="action" value="display_settings_from_user"/>');
				} else if ($(this).val() == 'DELETE') {
					$('form').append('<input type="hidden" name="action" value="delete_user"/>');
				}
			});
		</script>
	</body>
</html>
