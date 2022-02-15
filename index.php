<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include("common/head.php"); ?>
	</head>
	<body>
		<!-- Navbar -->
		<?php
			$current_page = "project";
			include("common/nav.php");
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
							<tr>
								<th scope="row">1</th>
								<td>Project 1</td>
								<td>Active</td>
								<td class="d-grid gap-2 d-md-flex">
									<button type="button" class="btn btn-main"><i class="fa-solid fa-pen"></i></button>
									<button type="button" class="btn btn-main"><i class="fa-solid fa-trash"></i></button>
								</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Project 2</td>
								<td>Inactive</td>
								<td class="d-grid gap-2 d-md-flex">
									<button type="button" class="btn btn-main"><i class="fa-solid fa-pen"></i></button>
									<button type="button" class="btn btn-main"><i class="fa-solid fa-trash"></i></button>
								</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Project 3</td>
								<td>Active</td>
								<td class="d-grid gap-2 d-md-flex">
									<button type="button" class="btn btn-main"><i class="fa-solid fa-pen"></i></button>
									<button type="button" class="btn btn-main"><i class="fa-solid fa-trash"></i></button>
								</td>
							</tr>
					</table>
				</div>
			</div>
		</div>

		<?php include("common/foot.php"); ?>
	</body>
</html>