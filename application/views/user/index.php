<div class="pull-right">
	<a href="<?php echo site_url('user/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>UserID</th>
		<th>UserTypeID</th>
		<th>UserPassword</th>
		<th>UserIDNo</th>
		<th>UserLN</th>
		<th>UserFN</th>
		<th>UserEmail</th>
		<th>UserMobile</th>
		<th>Actions</th>
    </tr>
	<?php foreach($users as $u){ ?>
    <tr>
		<td><?php echo $u['userID']; ?></td>
		<td><?php echo $u['userTypeID']; ?></td>
		<td><?php echo $u['userPassword']; ?></td>
		<td><?php echo $u['userIDNo']; ?></td>
		<td><?php echo $u['userLN']; ?></td>
		<td><?php echo $u['userFN']; ?></td>
		<td><?php echo $u['userEmail']; ?></td>
		<td><?php echo $u['userMobile']; ?></td>
		<td>
            <a href="<?php echo site_url('user/edit/'.$u['userID']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user/remove/'.$u['userID']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
