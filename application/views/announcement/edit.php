<?php echo form_open('announcement/edit/'.$announcement['announceID'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="userID" class="col-md-4 control-label">User</label>
		<div class="col-md-8">
			<select name="userID" class="form-control">
				<option value="">select user</option>
				<?php 
				foreach($all_users as $user)
				{
					$selected = ($user['userID'] == $announcement['userID']) ? ' selected="selected"' : "";

					echo '<option value="'.$user['userID'].'" '.$selected.'>'.$user['userFN'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="announceTitle" class="col-md-4 control-label"><span class="text-danger">*</span>AnnounceTitle</label>
		<div class="col-md-8">
			<input type="text" name="announceTitle" value="<?php echo ($this->input->post('announceTitle') ? $this->input->post('announceTitle') : $announcement['announceTitle']); ?>" class="form-control" id="announceTitle" />
			<span class="text-danger"><?php echo form_error('announceTitle');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="announceFile" class="col-md-4 control-label"><span class="text-danger">*</span>AnnounceFile</label>
		<div class="col-md-8">
			<input type="text" name="announceFile" value="<?php echo ($this->input->post('announceFile') ? $this->input->post('announceFile') : $announcement['announceFile']); ?>" class="form-control" id="announceFile" />
			<span class="text-danger"><?php echo form_error('announceFile');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="announceDate" class="col-md-4 control-label"><span class="text-danger">*</span>AnnounceDate</label>
		<div class="col-md-8">
			<input type="text" name="announceDate" value="<?php echo ($this->input->post('announceDate') ? $this->input->post('announceDate') : $announcement['announceDate']); ?>" class="form-control" id="announceDate" />
			<span class="text-danger"><?php echo form_error('announceDate');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="dateUploaded" class="col-md-4 control-label"><span class="text-danger">*</span>DateUploaded</label>
		<div class="col-md-8">
			<input type="text" name="dateUploaded" value="<?php echo ($this->input->post('dateUploaded') ? $this->input->post('dateUploaded') : $announcement['dateUploaded']); ?>" class="form-control" id="dateUploaded" />
			<span class="text-danger"><?php echo form_error('dateUploaded');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="dateModified" class="col-md-4 control-label"><span class="text-danger">*</span>DateModified</label>
		<div class="col-md-8">
			<input type="text" name="dateModified" value="<?php echo ($this->input->post('dateModified') ? $this->input->post('dateModified') : $announcement['dateModified']); ?>" class="form-control" id="dateModified" />
			<span class="text-danger"><?php echo form_error('dateModified');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="dateExpiry" class="col-md-4 control-label"><span class="text-danger">*</span>DateExpiry</label>
		<div class="col-md-8">
			<input type="text" name="dateExpiry" value="<?php echo ($this->input->post('dateExpiry') ? $this->input->post('dateExpiry') : $announcement['dateExpiry']); ?>" class="form-control" id="dateExpiry" />
			<span class="text-danger"><?php echo form_error('dateExpiry');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="announceDetail" class="col-md-4 control-label"><span class="text-danger">*</span>AnnounceDetail</label>
		<div class="col-md-8">
			<textarea name="announceDetail" class="form-control" id="announceDetail"><?php echo ($this->input->post('announceDetail') ? $this->input->post('announceDetail') : $announcement['announceDetail']); ?></textarea>
			<span class="text-danger"><?php echo form_error('announceDetail');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>