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
							<?php
								$tasks = json_decode(execute_and_read("SELECT id, project_id, task_name, hour FROM tasks ORDER BY project_id"));
								$current_project_id = 0;
								$project_count = 0;
								for ($i=0; $i < sizeof($tasks); $i++)
								{
									if($current_project_id != $tasks[$i]->project_id)
									{
										$project_count++;
					                	$current_project_id = $tasks[$i]->project_id;
					                	$project = json_decode(execute_and_read("SELECT id, project_name FROM projects WHERE id = " . $current_project_id));

					                	// printing project data row
										print '<tr class="table-secondary" id="project_' . $project[0]->id . '">';
					                	print '<th scope="row">' . $project_count . '</th>';
					                	print '<td colspan="2">' . $project[0]->project_name . '</td>';
					                	print '<td class="total_hours">' . json_decode(execute_and_read("SELECT SUM(hour) AS sum FROM tasks WHERE project_id = " . $current_project_id))[0]->sum . '</td>';
					                	print '</tr>';
					                }

				                	// printing task data row
				                	print '<tr id="task_' . $tasks[$i]->id . '">';
									print '<th scope="row"></th>';
									print '<td></td>';
				                	print '<td>' . $tasks[$i]->task_name . '</td>';
				                	print '<td class="task_hours">' . $tasks[$i]->hour . '</td>';
				                	print '</tr>';
								}
							?>
							<!--
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
							-->
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<?php include("common/foot.php"); ?>
	</body>
</html>