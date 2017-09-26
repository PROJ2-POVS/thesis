<div class="pull-right">
	<a href="<?php echo site_url('classlist/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ClassListID</th>
		<th>ClassID</th>
		<th>StudentID</th>
		<th>MidtermGrade</th>
		<th>FinalGrade</th>
		<th>Actions</th>
    </tr>
	<?php foreach($classlist as $c){ ?>
    <tr>
		<td><?php echo $c['classListID']; ?></td>
		<td><?php echo $c['classID']; ?></td>
		<td><?php echo $c['studentID']; ?></td>
		<td><?php echo $c['midtermGrade']; ?></td>
		<td><?php echo $c['finalGrade']; ?></td>
		<td>
            <a href="<?php echo site_url('classlist/edit/'.$c['classListID']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('classlist/remove/'.$c['classListID']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
