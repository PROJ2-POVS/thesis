<div class="pull-right">
	<a href="<?php echo site_url('student/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>StudentID</th>
		<th>UserID</th>
		<th>BlockID</th>
		<th>Course</th>
		<th>Major</th>
		<th>DateAdded</th>
		<th>DateModified</th>
		<th>Actions</th>
    </tr>
	<?php foreach($students as $s){ ?>
    <tr>
		<td><?php echo $s['studentID']; ?></td>
		<td><?php echo $s['userID']; ?></td>
		<td><?php echo $s['blockID']; ?></td>
		<td><?php echo $s['course']; ?></td>
		<td><?php echo $s['major']; ?></td>
		<td><?php echo $s['dateAdded']; ?></td>
		<td><?php echo $s['dateModified']; ?></td>
		<td>
            <a href="<?php echo site_url('student/edit/'.$s['studentID']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('student/remove/'.$s['studentID']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
