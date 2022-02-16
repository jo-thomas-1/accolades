<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include("common/head.php"); ?>
	</head>
	<body>
		<!-- Navbar -->
		<?php
			include("database_handle/read.php");

			$current_page = "report";
			include("common/nav.php");
		?>
		
		<div class="container">
			<div class="row mb-4">
				<div class="col">
					<h2>Report</h2>
				</div>
			</div>
			<div class="row mb-4">
				<div class="col">
					<a href="index.php?report=task_report"><button type="button" class="btn btn-main">Task Report</button></a>
				</div>
			</div>
			<div class="row mb-4">
				<div class="col">
					<!-- report view area -->
					<?php
						if(isset($_GET['report']))
						{
							if($_GET['report'] == 'task_report') include("reports/task_report.php");
						}
					?>
				</div>
			</div>
		</div>

		<?php include("common/foot.php"); ?>
	</body>
</html>