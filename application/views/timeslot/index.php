<div class="pull-right">
	<a href="<?php echo site_url('timeslot/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>TimeSlotID</th>
		<th>DayOfWeek</th>
		<th>StartTime</th>
		<th>EndTime</th>
		<th>Actions</th>
    </tr>
	<?php foreach($timeslots as $t){ ?>
    <tr>
		<td><?php echo $t['timeSlotID']; ?></td>
		<td><?php echo $t['dayOfWeek']; ?></td>
		<td><?php echo $t['startTime']; ?></td>
		<td><?php echo $t['endTime']; ?></td>
		<td>
            <a href="<?php echo site_url('timeslot/edit/'.$t['timeSlotID']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('timeslot/remove/'.$t['timeSlotID']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
