<div class="pull-right">
	<a href="<?php echo site_url('class/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ClassID</th>
		<th>SubjectID</th>
		<th>FacultyID</th>
		<th>TimeSlotID</th>
		<th>VenueID</th>
		<th>AcademicYear</th>
		<th>Semester</th>
		<th>Actions</th>
    </tr>
	<?php foreach($classes as $c){ ?>
    <tr>
		<td><?php echo $c['classID']; ?></td>
		<td><?php echo $c['subjectID']; ?></td>
		<td><?php echo $c['facultyID']; ?></td>
		<td><?php echo $c['timeSlotID']; ?></td>
		<td><?php echo $c['venueID']; ?></td>
		<td><?php echo $c['academicYear']; ?></td>
		<td><?php echo $c['semester']; ?></td>
		<td>
            <a href="<?php echo site_url('class/edit/'.$c['classID']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('class/remove/'.$c['classID']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
