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

			$data = json_decode(execute_and_read("SELECT tasks.id, tasks.project_id, projects.project_name, tasks.task_name, tasks.hour, tasks.date, tasks.status, tasks.description FROM tasks JOIN projects WHERE tasks.project_id = projects.id AND tasks.status != 'Deleted';"));
		?>
		
		<div class="container">
			<div class="row mb-4">
				<div class="col">
					<h2>Manage Tasks</h2>
				</div>
				<div class="col d-grid gap-2 d-flex justify-content-end">
					<!-- new task modal button -->
					<button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#new_task_modal">
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
								for ($i=0; $i < sizeof($data); $i++)
								{
					            	print '<tr id="' . $data[$i]->id . '">';
					                print '<th scope="row">' . $i + 1 . '</th>';
					                print '<td>' . $data[$i]->project_name . '</td>';
					                print '<td>' . $data[$i]->task_name . '</td>';
					                print '<td>' . $data[$i]->status . '</td>';
					                print '<td class="d-grid gap-2 d-md-flex">
										<button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#update_task_modal" onclick="fill_task_update_form(' . $data[$i]->id . ', \'' . $data[$i]->project_id . '\', \'' . $data[$i]->task_name . '\', \'' . $data[$i]->hour . '\', \'' . $data[$i]->date . '\', \'' . $data[$i]->status . '\', \'' . $data[$i]->description . '\')">
											<i class="fa-solid fa-pen"></i>
										</button>
										<button type="button" class="btn btn-main" onclick="fill_task_update_form(' . $data[$i]->id . ', \'' . $data[$i]->project_id . '\', \'' . $data[$i]->task_name . '\', \'' . $data[$i]->hour . '\', \'' . $data[$i]->date . '\', \'Deleted\', \'' . $data[$i]->description . '\'); document.getElementById(\'update_task_form\').submit();"><i class="fa-solid fa-trash"></i></button>
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
					                print '<td>' . date_format(date_create($object->date),"d / m / Y") . '</td>';
					                print '<td>' . $object->description . '</td>';
					                print '<td class="d-grid gap-2 d-md-flex">
										<button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#update_task_modal" onclick="fill_task_update_form(' . $object->id . ', \'' . $object->project_id . '\', \'' . $object->task_name . '\', \'' . $object->hour . '\', \'' . $object->date . '\', \'' . $object->status . '\', \'' . $object->description . '\')">
											<i class="fa-solid fa-pen"></i>
										</button>
										<button type="button" class="btn btn-main" onclick="fill_task_update_form(' . $object->id . ', \'' . $object->project_id . '\', \'' . $object->task_name . '\', \'' . $object->hour . '\', \'' . $object->date . '\', \'Deleted\', \'' . $object->description . '\'); document.getElementById(\'update_task_form\').submit();"><i class="fa-solid fa-trash"></i></button>
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

		<?php
			// page modals
			include("modals/new_task_modal.php");
			include("modals/update_task_modal.php");

			// page footer
			include("common/foot.php");
		?>
	</body>
</html>