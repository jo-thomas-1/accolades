<!-- add new task modal -->
<div class="modal fade" id="new_task_modal" tabindex="-1" role="dialog" aria-labelledby="new_task_modal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modal_title">New Task</h5>
				<button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="fa-solid fa-xmark"></i></span>
				</button>
			</div>
			<form id="new_task_form" method="GET" action="database_handle/add_new_task.php">
				<div class="modal-body">
					<select class="form-select mb-3" id="task_status" name="project_id" required>
						<option selected>Choose a project</option>

						<!-- get project list from database -->
						<?php
							$projects = json_decode(execute_and_read("SELECT id, project_name FROM projects WHERE status != 'Deleted'"));
							foreach($projects as $project)
							{
								print '<option value="' . $project->id . '">' . $project->project_name . '</option>';
							}
						?>
					</select>
					<input type="text" class="form-control mb-3" id="task_name" name="task_name" placeholder="Task Name" required>
					<input type="text" class="form-control mb-3" id="task_hour" name="task_hour" placeholder="Hours" required>
					<div class="input-group mb-3">
						<input type="date" class="form-control" id="task_date" name="task_date" placeholder="Date" required>
						<button type="button" class="btn btn-main" onclick="set_date('task_date');">Today</button>
					</div>
					<select class="form-select mb-3" id="task_status" name="task_status">
						<option selected value="Active">Active</option>
						<option value="Inactive">Inactive</option>
					</select>
					<textarea class="form-control" id="task_description" rows="3"></textarea>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-main">Add</button>
				</div>
			</form>
		</div>
	</div>
</div>