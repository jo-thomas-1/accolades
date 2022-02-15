<!-- update project modal -->
<div class="modal fade" id="update_project_modal" tabindex="-1" role="dialog" aria-labelledby="update_project_modal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modal_title">Update Project</h5>
				<button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="fa-solid fa-xmark"></i></span>
				</button>
			</div>
			<form id="update_project_form" method="POST" action="database_handle/update_project.php">
				<div class="modal-body">
					<input type="text" class="form-control mb-3" id="update_project_id" name="update_project_id" placeholder="Project Name" required hidden readonly value="0">
					<input type="text" class="form-control mb-3" id="update_project_name" name="update_project_name" placeholder="Project Name" required>
					<select class="form-select" id="update_project_status" name="update_project_status">
						<option selected value="Active">Active</option>
						<option value="Inactive">Inactive</option>
					</select>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</form>
		</div>
	</div>
</div>