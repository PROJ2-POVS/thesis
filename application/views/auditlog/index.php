<div class="pull-right">
	<a href="<?php echo site_url('auditlog/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>AuditID</th>
		<th>UserID</th>
		<th>Timestamp</th>
		<th>AuditDesc</th>
		<th>Actions</th>
    </tr>
	<?php foreach($auditlogs as $a){ ?>
    <tr>
		<td><?php echo $a['auditID']; ?></td>
		<td><?php echo $a['userID']; ?></td>
		<td><?php echo $a['timestamp']; ?></td>
		<td><?php echo $a['auditDesc']; ?></td>
		<td>
            <a href="<?php echo site_url('auditlog/edit/'.$a['auditID']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('auditlog/remove/'.$a['auditID']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
