<div class="pull-right">
	<a href="<?php echo site_url('subject/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>SujectID</th>
		<th>SubjectType</th>
		<th>SubjectCode</th>
		<th>SubjectName</th>
		<th>Units</th>
		<th>Actions</th>
    </tr>
	<?php foreach($subjects as $s){ ?>
    <tr>
		<td><?php echo $s['sujectID']; ?></td>
		<td><?php echo $s['subjectType']; ?></td>
		<td><?php echo $s['subjectCode']; ?></td>
		<td><?php echo $s['subjectName']; ?></td>
		<td><?php echo $s['units']; ?></td>
		<td>
            <a href="<?php echo site_url('subject/edit/'.$s['sujectID']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('subject/remove/'.$s['sujectID']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
