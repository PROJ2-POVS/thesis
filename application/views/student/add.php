<?php echo form_open('student/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="userID" class="col-md-4 control-label">User</label>
		<div class="col-md-8">
			<select name="userID" class="form-control">
				<option value="">select user</option>
				<?php 
				foreach($all_users as $user)
				{
					$selected = ($user['userID'] == $this->input->post('userID')) ? ' selected="selected"' : "";

					echo '<option value="'.$user['userID'].'" '.$selected.'>'.$user['userID'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="blockID" class="col-md-4 control-label"><span class="text-danger">*</span>Block</label>
		<div class="col-md-8">
			<select name="blockID" class="form-control">
				<option value="">select block</option>
				<?php 
				foreach($all_blocks as $block)
				{
					$selected = ($block['blockID'] == $this->input->post('blockID')) ? ' selected="selected"' : "";

					echo '<option value="'.$block['blockID'].'" '.$selected.'>'.$block['blockCode'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('blockID');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="course" class="col-md-4 control-label"><span class="text-danger">*</span>Course</label>
		<div class="col-md-8">
			<input type="text" name="course" value="<?php echo $this->input->post('course'); ?>" class="form-control" id="course" />
			<span class="text-danger"><?php echo form_error('course');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="major" class="col-md-4 control-label"><span class="text-danger">*</span>Major</label>
		<div class="col-md-8">
			<input type="text" name="major" value="<?php echo $this->input->post('major'); ?>" class="form-control" id="major" />
			<span class="text-danger"><?php echo form_error('major');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="dateAdded" class="col-md-4 control-label"><span class="text-danger">*</span>DateAdded</label>
		<div class="col-md-8">
			<input type="text" name="dateAdded" value="<?php echo $this->input->post('dateAdded'); ?>" class="form-control" id="dateAdded" />
			<span class="text-danger"><?php echo form_error('dateAdded');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="dateModified" class="col-md-4 control-label"><span class="text-danger">*</span>DateModified</label>
		<div class="col-md-8">
			<input type="text" name="dateModified" value="<?php echo $this->input->post('dateModified'); ?>" class="form-control" id="dateModified" />
			<span class="text-danger"><?php echo form_error('dateModified');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>