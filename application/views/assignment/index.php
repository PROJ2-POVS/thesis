<div class="pull-right">
	<a href="<?php echo site_url('assignment/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>AssignID</th>
		<th>ClassID</th>
		<th>AssignFile</th>
		<th>AssignTitle</th>
		<th>DateUploaded</th>
		<th>DateModified</th>
		<th>DateExpiry</th>
		<th>AssignDesc</th>
		<th>Actions</th>
    </tr>
	<?php foreach($assignments as $a){ ?>
    <tr>
		<td><?php echo $a['assignID']; ?></td>
		<td><?php echo $a['classID']; ?></td>
		<td><?php echo $a['assignFile']; ?></td>
		<td><?php echo $a['assignTitle']; ?></td>
		<td><?php echo $a['dateUploaded']; ?></td>
		<td><?php echo $a['dateModified']; ?></td>
		<td><?php echo $a['dateExpiry']; ?></td>
		<td><?php echo $a['assignDesc']; ?></td>
		<td>
            <a href="<?php echo site_url('assignment/edit/'.$a['assignID']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('assignment/remove/'.$a['assignID']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
