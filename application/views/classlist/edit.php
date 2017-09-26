<?php echo form_open('classlist/edit/'.$classlist['classListID'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="classID" class="col-md-4 control-label"><span class="text-danger">*</span>ClassID</label>
		<div class="col-md-8">
			<input type="text" name="classID" value="<?php echo ($this->input->post('classID') ? $this->input->post('classID') : $classlist['classID']); ?>" class="form-control" id="classID" />
			<span class="text-danger"><?php echo form_error('classID');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="studentID" class="col-md-4 control-label"><span class="text-danger">*</span>StudentID</label>
		<div class="col-md-8">
			<input type="text" name="studentID" value="<?php echo ($this->input->post('studentID') ? $this->input->post('studentID') : $classlist['studentID']); ?>" class="form-control" id="studentID" />
			<span class="text-danger"><?php echo form_error('studentID');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="midtermGrade" class="col-md-4 control-label"><span class="text-danger">*</span>MidtermGrade</label>
		<div class="col-md-8">
			<input type="text" name="midtermGrade" value="<?php echo ($this->input->post('midtermGrade') ? $this->input->post('midtermGrade') : $classlist['midtermGrade']); ?>" class="form-control" id="midtermGrade" />
			<span class="text-danger"><?php echo form_error('midtermGrade');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="finalGrade" class="col-md-4 control-label"><span class="text-danger">*</span>FinalGrade</label>
		<div class="col-md-8">
			<input type="text" name="finalGrade" value="<?php echo ($this->input->post('finalGrade') ? $this->input->post('finalGrade') : $classlist['finalGrade']); ?>" class="form-control" id="finalGrade" />
			<span class="text-danger"><?php echo form_error('finalGrade');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>