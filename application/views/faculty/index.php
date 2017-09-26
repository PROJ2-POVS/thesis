<div class="pull-right">
	<a href="<?php echo site_url('faculty/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>FacultyID</th>
		<th>UserID</th>
		<th>FacultyType</th>
		<th>MinUnits</th>
		<th>MaxUnits</th>
		<th>DateAdded</th>
		<th>DateModified</th>
		<th>Actions</th>
    </tr>
	<?php foreach($faculty as $f){ ?>
    <tr>
		<td><?php echo $f['facultyID']; ?></td>
		<td><?php echo $f['userID']; ?></td>
		<td><?php echo $f['facultyType']; ?></td>
		<td><?php echo $f['minUnits']; ?></td>
		<td><?php echo $f['maxUnits']; ?></td>
		<td><?php echo $f['dateAdded']; ?></td>
		<td><?php echo $f['dateModified']; ?></td>
		<td>
            <a href="<?php echo site_url('faculty/edit/'.$f['facultyID']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('faculty/remove/'.$f['facultyID']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
