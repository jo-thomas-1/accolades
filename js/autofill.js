function fill_project_update_form(id, project_name, status)
{
    document.getElementById('update_project_id').value = id;
    document.getElementById('update_project_name').value = project_name;
    document.getElementById('update_project_status').value = status;
}