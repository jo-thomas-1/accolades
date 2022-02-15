<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include("common/head.php"); ?>
	</head>
	<body>
		<!-- Navbar -->
		<?php
			$current_page = "report";
			include("common/nav.php");
		?>
		
		<div class="container">
			<div class="row mb-4">
				<div class="col">
					<h2>Report</h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col" colspan="2">Name</th>
								<th scope="col" class="col-2">Total Hours</th>
							</tr>
						</thead>
						<tbody>
							<tr class="table-secondary">
								<th scope="row">1</th>
								<td colspan="2">Project 1</td>
								<td>11</td>
							</tr>
							<tr>
								<th scope="row"></th>
								<td></td>
								<td>Task 1</td>
								<td>8</td>
							</tr>
							<tr>
								<th scope="row"></th>
								<td></td>
								<td>Task 3</td>
								<td>3</td>
							</tr>
							<tr class="table-secondary">
								<th scope="row">2</th>
								<td colspan="2">Project 3</td>
								<td>11</td>
							</tr>
							<tr>
								<th scope="row"></th>
								<td></td>
								<td>Task 4</td>
								<td>8</td>
							</tr>
							<tr>
								<th scope="row"></th>
								<td></td>
								<td>Task 5</td>
								<td>3</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<?php include("common/foot.php"); ?>
	</body>
</html>