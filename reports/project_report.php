<?php
	$projects = json_decode(execute_and_read("SELECT id, project_name FROM projects ORDER BY id"));

	print '<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col" colspan="2">Name</th>
				<th scope="col">Status</th>
				<th scope="col">Date</th>
				<th scope="col" class="col-2">Total Hours</th>
			</tr>
		</thead>
	<tbody>';

	for ($i=0; $i < sizeof($projects); $i++)
	{
		// printing project data row
		print '<tr class="table-secondary" id="project_' . $projects[$i]->id . '">';
    	print '<th scope="row">' . ($i + 1) . '</th>';
    	print '<td colspan="2">' . $projects[$i]->project_name . '</td>';
    	print '<td></td>';
    	print '<td></td>';
    	$sum = json_decode(execute_and_read("SELECT SUM(hour) AS sum FROM tasks WHERE project_id = " . $projects[$i]->id))[0]->sum;
    	if(!$sum) $sum = "-";
    	print '<td class="total_hours">' . $sum . '</td>';
    	print '</tr>';

		$tasks = json_decode(execute_and_read("SELECT id, task_name, hour, date, status FROM tasks WHERE project_id = " . $projects[$i]->id));

		foreach($tasks as $task)
		{
			// printing task data row
	    	print '<tr id="task_' . $task->id . '">';
			print '<th scope="row"></th>';
			print '<td></td>';
	    	print '<td>' . $task->task_name . '</td>';
	    	print '<td>' . $task->status . '</td>';
	    	print '<td>' . $task->date . '</td>';
	    	print '<td class="task_hours">' . $task->hour . '</td>';
	    	print '</tr>';
		}
	}
	print '</tbody>';
	print '</table>';
?>