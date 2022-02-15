<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include("common/head.php"); ?>
	</head>
	<body>
		<!-- Navbar -->
		<?php
			include("database_handle/read.php");

			$current_page = "task";
			include("common/nav.php");

			$data = json_decode(execute_and_read("SELECT tasks.id, projects.project_name, tasks.task_name, tasks.hour, tasks.date, tasks.status, tasks.description FROM tasks JOIN projects WHERE tasks.project_id = projects.id;"));
		?>
		
		<div class="container">
			<div class="row mb-4">
				<div class="col">
					<h2>Manage Tasks</h2>
				</div>
				<div class="col d-grid gap-2 d-flex justify-content-end">
					<button type="button" class="btn btn-main">
						<span class="d-none d-md-inline-block me-3">New Task</span><i class="fa-solid fa-plus"></i>
					</button>
					<button type="button" class="btn btn-main d-none" id="task_view_button" onclick="toggle_table_and_button('time_view', 'task_view');">
						<span class="d-none d-md-inline-block me-3">Task View</span><i class="fa-solid fa-list-check"></i>
					</button>
					<button type="button" class="btn btn-main" id="time_view_button" onclick="toggle_table_and_button('task_view', 'time_view');">
						<span class="d-none d-md-inline-block me-3">Time View</span><i class="fa-solid fa-clock"></i>
					</button>
				</div>
			</div>

			<!-- task view table -->
			<div class="row" id="task_view_table">
				<div class="col">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Project Name</th>
								<th scope="col">Task Name</th>
								<th scope="col" class="col-2">Status</th>
								<th scope="col" class="col-2">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php								
								foreach ($data as $object)
								{
									print '<tr>';
					                print '<th scope="row">' . $object->id . '</th>';
					                print '<td>' . $object->project_name . '</td>';
					                print '<td>' . $object->task_name . '</td>';
					                print '<td>' . $object->status . '</td>';
					                print '<td class="d-grid gap-2 d-md-flex">
										<button type="button" class="btn btn-main"><i class="fa-solid fa-pen"></i></button>
										<button type="button" class="btn btn-main"><i class="fa-solid fa-trash"></i></button>
									</td>
								</tr>';
								}
							?>
							<!--
							<tr>
								<th scope="row">1</th>
								<td>Project 1</td>
								<td>Task 1</td>
								<td>Active</td>
								<td class="d-grid gap-2 d-md-flex">
									<button type="button" class="btn btn-main"><i class="fa-solid fa-pen"></i></button>
									<button type="button" class="btn btn-main"><i class="fa-solid fa-trash"></i></button>
								</td>
							</tr>
							-->
						</tbody>
					</table>
				</div>
			</div>

			<!-- time view table -->
			<div class="row d-none" id="time_view_table">
				<div class="col">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Project Name</th>
								<th scope="col">Task Name</th>
								<th scope="col">Hour</th>
								<th scope="col">Date</th>
								<th scope="col">Description</th>
								<th scope="col" class="col-2">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php								
								foreach ($data as $object)
								{
									print '<tr>';
					                print '<th scope="row">' . $object->id . '</th>';
					                print '<td>' . $object->project_name . '</td>';
					                print '<td>' . $object->task_name . '</td>';
					                print '<td>' . $object->hour . '</td>';
					                print '<td>' . $object->date . '</td>';
					                print '<td>' . $object->description . '</td>';
					                print '<td class="d-grid gap-2 d-md-flex">
										<button type="button" class="btn btn-main"><i class="fa-solid fa-pen"></i></button>
										<button type="button" class="btn btn-main"><i class="fa-solid fa-trash"></i></button>
									</td>
								</tr>';
								}
							?>
							<!--
							<tr>
								<th scope="row">1</th>
								<td>Project 1</td>
								<td>Task 1</td>
								<td>2</td>
								<td>22/01/2022</td>
								<td>DB Creation</td>
								<td class="d-grid gap-2 d-md-flex">
									<button type="button" class="btn btn-main"><i class="fa-solid fa-pen"></i></button>
									<button type="button" class="btn btn-main"><i class="fa-solid fa-trash"></i></button>
								</td>
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