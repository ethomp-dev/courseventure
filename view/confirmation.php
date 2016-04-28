<?php
	require('../model/database.php');
	require "../model/courses_db.php";
	session_start();
	include 'partials/globalVars.php'; 
?>
<!doctype html>
<html lang="en">
	<head>
		<title><?php echo $siteTitle; ?> | Confirmation</title>
		<?php include 'partials/preBodyHead.php'; ?>
	</head>
	<body>
		<div class="grid-frame">
			<!-- Side Menu -->
			<?php include 'partials/sideMenu.php'; ?>

			<div class="grid-block collapse medium-9 large-10 vertical">
				<!-- Top Bar -->
				<?php include 'partials/topMenu.php'; ?>
				<!-- Body -->
				<div class="grid-container"><!--div class="row"??-->
					<div class="grid-block small-offset-2 small-8">
						<h1 class="xl-heading">Your Schedule has been Processed!</h1><!--Where found-->
					</div>
					<div class="grid-block small-offset-2 small-8">
						<h3 class="text-center">All that is left to do is copy these CRN's into your school's registration site:</h3>
					</div>
				</div>
				<div class="grid-container">
					<table class="table-highlight"><!--Where found-->
						<tbody>
							<tr>
								<td class="cell-large">123456</td>
							</tr>
							<tr>
								<td class="cell-large">123456</td>
							</tr>
							<tr>
								<td class="cell-large">123456</td>
							</tr>
							<tr>
								<td class="cell-large">123456</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>
