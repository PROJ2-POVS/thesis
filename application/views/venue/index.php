<div class="pull-right">
	<a href="<?php echo site_url('venue/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>VenueID</th>
		<th>VenueType</th>
		<th>VenueCode</th>
		<th>VenueName</th>
		<th>Actions</th>
    </tr>
	<?php foreach($venues as $v){ ?>
    <tr>
		<td><?php echo $v['venueID']; ?></td>
		<td><?php echo $v['venueType']; ?></td>
		<td><?php echo $v['venueCode']; ?></td>
		<td><?php echo $v['venueName']; ?></td>
		<td>
            <a href="<?php echo site_url('venue/edit/'.$v['venueID']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('venue/remove/'.$v['venueID']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
