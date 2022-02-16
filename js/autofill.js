function fill_project_update_form(id, project_name, status)
{
    document.getElementById('update_project_id').value = id;
    document.getElementById('update_project_name').value = project_name;
    document.getElementById('update_project_status').value = status;
}

function fill_task_update_form(id, project_id, task_name, hour, date, status, description)
{
    document.getElementById('update_task_id').value = id;
    document.getElementById('update_task_project_id').value = project_id;
    document.getElementById('update_task_name').value = task_name;
    document.getElementById('update_task_hour').value = hour;
    document.getElementById('update_task_date').value = date;
    document.getElementById('update_task_status').value = status;
    document.getElementById('update_task_description').value = description;
}