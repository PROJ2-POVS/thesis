<?php echo form_open('assignment/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="classID" class="col-md-4 control-label"><span class="text-danger">*</span>Class</label>
		<div class="col-md-8">
			<select name="classID" class="form-control">
				<option value="">select class</option>
				<?php 
				foreach($all_classes as $class)
				{
					$selected = ($class['classID'] == $this->input->post('classID')) ? ' selected="selected"' : "";

					echo '<option value="'.$class['classID'].'" '.$selected.'>'.$class['classID'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('classID');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="assignFile" class="col-md-4 control-label"><span class="text-danger">*</span>AssignFile</label>
		<div class="col-md-8">
			<input type="text" name="assignFile" value="<?php echo $this->input->post('assignFile'); ?>" class="form-control" id="assignFile" />
			<span class="text-danger"><?php echo form_error('assignFile');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="assignTitle" class="col-md-4 control-label"><span class="text-danger">*</span>AssignTitle</label>
		<div class="col-md-8">
			<input type="text" name="assignTitle" value="<?php echo $this->input->post('assignTitle'); ?>" class="form-control" id="assignTitle" />
			<span class="text-danger"><?php echo form_error('assignTitle');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="dateUploaded" class="col-md-4 control-label"><span class="text-danger">*</span>DateUploaded</label>
		<div class="col-md-8">
			<input type="text" name="dateUploaded" value="<?php echo $this->input->post('dateUploaded'); ?>" class="form-control" id="dateUploaded" />
			<span class="text-danger"><?php echo form_error('dateUploaded');?></span>
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
		<label for="dateExpiry" class="col-md-4 control-label"><span class="text-danger">*</span>DateExpiry</label>
		<div class="col-md-8">
			<input type="text" name="dateExpiry" value="<?php echo $this->input->post('dateExpiry'); ?>" class="form-control" id="dateExpiry" />
			<span class="text-danger"><?php echo form_error('dateExpiry');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="assignDesc" class="col-md-4 control-label"><span class="text-danger">*</span>AssignDesc</label>
		<div class="col-md-8">
			<textarea name="assignDesc" class="form-control" id="assignDesc"><?php echo $this->input->post('assignDesc'); ?></textarea>
			<span class="text-danger"><?php echo form_error('assignDesc');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>