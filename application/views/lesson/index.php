<div class="pull-right">
	<a href="<?php echo site_url('lesson/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>LessonID</th>
		<th>ClassID</th>
		<th>LessonFile</th>
		<th>LessonTitle</th>
		<th>DateUploaded</th>
		<th>DateModified</th>
		<th>DateExpiry</th>
		<th>LessonDesc</th>
		<th>Actions</th>
    </tr>
	<?php foreach($lessons as $l){ ?>
    <tr>
		<td><?php echo $l['lessonID']; ?></td>
		<td><?php echo $l['classID']; ?></td>
		<td><?php echo $l['lessonFile']; ?></td>
		<td><?php echo $l['lessonTitle']; ?></td>
		<td><?php echo $l['dateUploaded']; ?></td>
		<td><?php echo $l['dateModified']; ?></td>
		<td><?php echo $l['dateExpiry']; ?></td>
		<td><?php echo $l['lessonDesc']; ?></td>
		<td>
            <a href="<?php echo site_url('lesson/edit/'.$l['lessonID']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('lesson/remove/'.$l['lessonID']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
