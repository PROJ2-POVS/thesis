<div class="pull-right">
	<a href="<?php echo site_url('announcement/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>AnnounceID</th>
		<th>UserID</th>
		<th>AnnounceTitle</th>
		<th>AnnounceFile</th>
		<th>AnnounceDate</th>
		<th>DateUploaded</th>
		<th>DateModified</th>
		<th>DateExpiry</th>
		<th>AnnounceDetail</th>
		<th>Actions</th>
    </tr>
	<?php foreach($announcements as $a){ ?>
    <tr>
		<td><?php echo $a['announceID']; ?></td>
		<td><?php echo $a['userID']; ?></td>
		<td><?php echo $a['announceTitle']; ?></td>
		<td><?php echo $a['announceFile']; ?></td>
		<td><?php echo $a['announceDate']; ?></td>
		<td><?php echo $a['dateUploaded']; ?></td>
		<td><?php echo $a['dateModified']; ?></td>
		<td><?php echo $a['dateExpiry']; ?></td>
		<td><?php echo $a['announceDetail']; ?></td>
		<td>
            <a href="<?php echo site_url('announcement/edit/'.$a['announceID']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('announcement/remove/'.$a['announceID']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
