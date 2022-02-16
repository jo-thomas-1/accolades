<?php
	$tasks = json_decode(execute_and_read("SELECT id, project_id, task_name, hour FROM tasks ORDER BY project_id"));
	$current_project_id = 0;
	$project_count = 0;

	print '<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col" colspan="2">Name</th>
				<th scope="col" class="col-2">Total Hours</th>
			</tr>
		</thead>
	<tbody>';

	for ($i=0; $i < sizeof($tasks); $i++)
	{
		if($current_project_id != $tasks[$i]->project_id)
		{
			$project_count++;
        	$current_project_id = $tasks[$i]->project_id;
        	$project = json_decode(execute_and_read("SELECT id, project_name FROM projects WHERE id = " . $current_project_id));

        	// printing project data row
			print '<tr class="table-secondary" id="project_' . $project[0]->id . '">';
        	print '<th scope="row">' . $project_count . '</th>';
        	print '<td colspan="2">' . $project[0]->project_name . '</td>';
        	print '<td class="total_hours">' . json_decode(execute_and_read("SELECT SUM(hour) AS sum FROM tasks WHERE project_id = " . $current_project_id))[0]->sum . '</td>';
        	print '</tr>';
        }

    	// printing task data row
    	print '<tr id="task_' . $tasks[$i]->id . '">';
		print '<th scope="row"></th>';
		print '<td></td>';
    	print '<td>' . $tasks[$i]->task_name . '</td>';
    	print '<td class="task_hours">' . $tasks[$i]->hour . '</td>';
    	print '</tr>';
	}
	print '</tbody>';
	print '</table>';
?>