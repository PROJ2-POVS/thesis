<div class="pull-right">
	<a href="<?php echo site_url('usertype/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>UserTypeID</th>
		<th>UserType</th>
		<th>Actions</th>
    </tr>
	<?php foreach($usertype as $u){ ?>
    <tr>
		<td><?php echo $u['userTypeID']; ?></td>
		<td><?php echo $u['userType']; ?></td>
		<td>
            <a href="<?php echo site_url('usertype/edit/'.$u['userTypeID']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('usertype/remove/'.$u['userTypeID']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
