<!-- update task modal -->
<div class="modal fade" id="update_task_modal" tabindex="-1" role="dialog" aria-labelledby="update_task_modal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modal_title">Update Task</h5>
				<button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="fa-solid fa-xmark"></i></span>
				</button>
			</div>
			<form id="update_task_form" method="POST" action="database_handle/update_task.php">
				<div class="modal-body">
					<input type="text" class="form-control mb-3" id="update_task_id" name="update_task_id" placeholder="Task Name" required hidden readonly value="0">
					<input type="text" class="form-control mb-3" id="update_task_name" name="update_task_name" placeholder="Task Name" required>
					<select class="form-select" id="update_task_status" name="update_task_status">
						<option selected value="Active">Active</option>
						<option value="Inactive">Inactive</option>
						<option value="Deleted" hidden>Deleted</option>
					</select>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-main">Update</button>
				</div>
			</form>
		</div>
	</div>
</div>