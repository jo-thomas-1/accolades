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

			$data = json_decode(read_table('projects', '*'));
		?>
		
		<div class="container">
			<div class="row mb-4">
				<div class="col">
					<h2>Manage Projects</h2>
				</div>
				<div class="col-3 d-grid d-flex justify-content-end">
					<button type="button" class="btn btn-main"><span class="d-none d-md-inline-block me-3">New Project</span><i class="fa-solid fa-plus"></i></button>
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
							<?php								
								foreach ($data as $object)
								{
									print '<tr>';
					                print '<th scope="row">' . $object->id . '</th>';
					                print '<td>' . $object->project_name . '</td>';
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
		</div>

		<?php include("common/foot.php"); ?>
	</body>
</html>