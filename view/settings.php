<?php
	session_start();
	require('../model/database.php');
	require "../model/accounts_db.php";
	include 'partials/globalVars.php';
	$user = get_user($_SESSION['current_user']);
	$hidden_password=preg_replace("|.|","*",$user['password']);
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
					<section class="block-list wide">
	          <ul>
	            <li><a href="#">
								<table>
									<td width="150px"><strong>Name</strong></td>
									<td width="300px"><?php echo $user['name']; ?></td>
	              	<td width="75px">
										<span class="block-list-label">
											<img src="<?php echo $pathToIcons; ?>pencil.svg" alt="edit"/><!--link on pencil?-->
										</span>
									</td>
								</table>
							</a></li>
							<li><a href="#">
								<table>
									<td width="150px"><strong>School</strong></td>
									<td width="300px"><?php echo $user['school']; ?></td>
	              	<td width="75px">
										<span class="block-list-label">
											<img src="<?php echo $pathToIcons; ?>pencil.svg" alt="edit"/>
										</span>
									</td>
								</table>
							</a></li>
							<li><a href="#">
								<table>
									<td width="150px"><strong>Username</strong></td>
									<td width="300px"><?php echo $user['userName']; ?></td>
	              	<td width="75px">
										<span class="block-list-label">
											<img src="<?php echo $pathToIcons; ?>pencil.svg" alt="edit"/>
										</span>
									</td>
								</table>
							</a></li>
							<li><a href="#">
								<table>
									<td width="150px"><strong>Password</strong></td>
									<td width="300px" input type="password"><?php echo $hidden_password; ?></td>
	              	<td width="75px">
										<span class="block-list-label">
											<img src="<?php echo $pathToIcons; ?>pencil.svg" alt="edit"/>
										</span>
									</td>
								</table>
							</a></li>
		<li><a href="#">
								<table>
									<td width="150px"><strong>Email</strong></td>
									<td width="300px"><?php echo $user['email']; ?></td>
	              	<td width="75px">
										<span class="block-list-label">
											<img src="<?php echo $pathToIcons; ?>pencil.svg" alt="edit"/>
										</span>
									</td>
								</table>
							</a></li>
	          </ul>
	        </section>
					<div class="align-center grid-block">
						<a class="button primary large" href="<?php echo $loginPage; ?>">LOG OUT</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
