<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include("common/head.php"); ?>
	</head>
	<body>
		<!-- Navbar -->
		<?php
			include("database_handle/read.php");

			$current_page = "project";
			include("common/nav.php");

			$data = json_decode(execute_and_read("SELECT * FROM projects"));
		?>
		
		<div class="container">
			<div class="row mb-4">
				<div class="col">
					<h2>Manage Projects</h2>
				</div>
				<div class="col-3 d-grid d-flex justify-content-end">
					<!-- new project modal button -->
					<button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#new_project_modal">
						<span class="d-none d-md-inline-block me-3">New Project</span><i class="fa-solid fa-plus"></i>
					</button>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Project Name</th>
								<th scope="col" class="col-2">Status</th>
								<th scope="col" class="col-2">Action</th>
							</tr>
						</thead>
						<tbody>
							<script type="text/javascript">
								function fill_update_form(id, project_name, status)
								{
									document.getElementById('update_project_id').value = id;
									document.getElementById('update_project_name').value = project_name;
									document.getElementById('update_project_status').value = status;
								}
							</script>
							<?php
								for ($i=0; $i < sizeof($data); $i++)
								{
									print '<tr id="' . $data[$i]->id . '">';
					                print '<th scope="row">' . $i + 1 . '</th>';
					                print '<td>' . $data[$i]->project_name . '</td>';
					                print '<td>' . $data[$i]->status . '</td>';
					                print '<td class="d-grid gap-2 d-md-flex">
					                    <button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#update_project_modal" onclick="fill_update_form(' . $data[$i]->id . ', \'' . $data[$i]->project_name . '\', \'' . $data[$i]->status . '\')">
					                    	<i class="fa-solid fa-pen"></i>
					                    </button>
					                    <button type="button" class="btn btn-main"><i class="fa-solid fa-trash"></i></button>
					                </td>
					            </tr>';
								}
							?>
							<!--
							<tr>
								<th scope="row">1</th>
								<td>Project 1</td>
								<td>Active</td>
								<td class="d-grid gap-2 d-md-flex">
									<button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#update_project_modal" onclick="fill_update_form(1, 'Project 1', 'Active')">
										<i class="fa-solid fa-pen"></i>
									</button>
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
			include("modals/new_project_modal.php");
			include("modals/update_project_modal.php");

			// page footer
			include("common/foot.php");
		?>
	</body>
</html>