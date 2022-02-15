<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include("common/head.php"); ?>
	</head>
	<body>
		<!-- Navbar -->
		<?php include("common/nav.php"); ?>
		
		<div class="container">
			<div class="row mb-4">
				<div class="col">
					<h2>Manage Tasks</h2>
				</div>
				<div class="col d-grid gap-2 d-flex justify-content-end">
					<button type="button" class="btn btn-main">
						<span class="d-none d-md-inline-block me-3">New Task</span><i class="fa-solid fa-plus"></i>
					</button>
					<button type="button" class="btn btn-main">
						<span class="d-none d-md-inline-block me-3">Task View</span><i class="fa-solid fa-list-check"></i>
					</button>
					<button type="button" class="btn btn-main">
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
							<tr>
								<th scope="row">2</th>
								<td>Project 1</td>
								<td>Task 2</td>
								<td>Inactive</td>
								<td class="d-grid gap-2 d-md-flex">
									<button type="button" class="btn btn-main"><i class="fa-solid fa-pen"></i></button>
									<button type="button" class="btn btn-main"><i class="fa-solid fa-trash"></i></button>
								</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Project 3</td>
								<td>Task 1</td>
								<td>Active</td>
								<td class="d-grid gap-2 d-md-flex">
									<button type="button" class="btn btn-main"><i class="fa-solid fa-pen"></i></button>
									<button type="button" class="btn btn-main"><i class="fa-solid fa-trash"></i></button>
								</td>
							</tr>
					</table>
				</div>
			</div>

			<!-- time view table -->
			<div class="row" id="time_view_table">
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
							<tr>
								<th scope="row">2</th>
								<td>Project 1</td>
								<td>Task 2</td>
								<td>3</td>
								<td>24/01/2022</td>
								<td>Testing</td>
								<td class="d-grid gap-2 d-md-flex">
									<button type="button" class="btn btn-main"><i class="fa-solid fa-pen"></i></button>
									<button type="button" class="btn btn-main"><i class="fa-solid fa-trash"></i></button>
								</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Project 3</td>
								<td>Task 1</td>
								<td>6</td>
								<td>25/01/2022</td>
								<td>Analysis</td>
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