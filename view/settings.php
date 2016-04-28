<?php
	session_start();
	require('../model/database.php');
	require "../model/accounts_db.php";
	include 'partials/globalVars.php';
	$user = get_user($_SESSION['current_user']);
	$hidden_password=preg_replace("|.|","*",$user['password']);

	function validate() {
		header("Location: settings.php");
	}

	if (isset($_GET['finishedEditing'])) {
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
					<table id="settings">
						<tr>
							<td width="200px"><strong>Name</strong></td>
							<td width="300px"><?php echo $user['name']; ?></td>
	          	<td width="75px" style="text-align:center;">
								<a class="editIcon"><img src="<?php echo $pathToIcons; ?>pencil.svg" alt="edit"/></a>
								<a href="settings.php?finishedEditing=true"><i style="color:#62A989" class="fa fa-floppy-o"></i></a>
							</td>
						</tr>
						<tr>
							<td><strong>School</strong></td>
							<td><?php echo $user['school']; ?></td>
            	<td style="text-align:center;">
								<a class="editIcon"><img src="<?php echo $pathToIcons; ?>pencil.svg" alt="edit"/></a>
								<a href="settings.php?finishedEditing=true"><i style="color:#62A989" class="fa fa-floppy-o"></i></a>
							</td>
						</tr>
						<tr>
							<td><strong>Username</strong></td>
							<td><?php echo $user['userName']; ?></td>
							<td style="text-align:center;">
								<a class="editIcon"><img src="<?php echo $pathToIcons; ?>pencil.svg" alt="edit"/></a>
								<a href="settings.php?finishedEditing=true"><i style="color:#62A989" class="fa fa-floppy-o"></i></a>
							</td>
						</tr>
						<tr>
							<td><strong>Password</strong></td>
							<td><?php echo $hidden_password; ?></td>
							<td style="text-align:center;">
								<a class="editIcon"><img src="<?php echo $pathToIcons; ?>pencil.svg" alt="edit"/></a>
								<a href="settings.php?finishedEditing=true"><i style="color:#62A989" class="fa fa-floppy-o"></i></a>
							</td>
						</tr>
						<tr>
							<td><strong>Email</strong></td>
							<td><?php echo $user['email']; ?></td>
							<td style="text-align:center;">
								<a class="editIcon"><img src="<?php echo $pathToIcons; ?>pencil.svg" alt="edit"/></a>
								<a href="settings.php?finishedEditing=true"><i style="color:#62A989" class="fa fa-floppy-o"></i></a>
							</td>
						</tr>
					</table>
					<div class="align-center grid-block">
						<a class="button primary large" href="<?php echo $loginPage; ?>">LOG OUT</a>
					</div>
				</div>
			</div>
		</div>

		<script>

			$(function() {
				$('.fa-floppy-o').hide();
			});

			$('.editIcon').on('click', function() {
				var $pencil = $(this);

				$('a.editIcon img').each(function() {
					if ($(this) != $pencil) {
						$(this).css('opacity', '.5');
						$(this).parent().addClass('disabled').removeClass('editIcon');
					}
				})

				// Convert the text to inputbox
				var $settingCell = $pencil.parent().siblings('td:nth-of-type(2)');
				var settingText = $settingCell.text();
				$settingCell.html('<input type="text" value="' + settingText + '"/>');

				// Change the icon from pencil to save
				$pencil.find('img').hide();
				$pencil.siblings().find('i').show();
			});

			$('.disabled').on("click", function (e) {
					e.preventDefault();
			});
		</script>
	</body>
</html>
