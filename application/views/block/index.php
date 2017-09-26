<div class="pull-right">
	<a href="<?php echo site_url('block/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>BlockID</th>
		<th>BlockCode</th>
		<th>Actions</th>
    </tr>
	<?php foreach($blocks as $b){ ?>
    <tr>
		<td><?php echo $b['blockID']; ?></td>
		<td><?php echo $b['blockCode']; ?></td>
		<td>
            <a href="<?php echo site_url('block/edit/'.$b['blockID']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('block/remove/'.$b['blockID']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
