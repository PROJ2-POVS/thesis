<?php echo form_open('faculty/edit/'.$faculty['facultyID'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="userID" class="col-md-4 control-label">UserID</label>
		<div class="col-md-8">
			<input type="text" name="userID" value="<?php echo ($this->input->post('userID') ? $this->input->post('userID') : $faculty['userID']); ?>" class="form-control" id="userID" />
		</div>
	</div>
	<div class="form-group">
		<label for="facultyType" class="col-md-4 control-label">FacultyType</label>
		<div class="col-md-8">
			<input type="text" name="facultyType" value="<?php echo ($this->input->post('facultyType') ? $this->input->post('facultyType') : $faculty['facultyType']); ?>" class="form-control" id="facultyType" />
		</div>
	</div>
	<div class="form-group">
		<label for="minUnits" class="col-md-4 control-label">MinUnits</label>
		<div class="col-md-8">
			<input type="text" name="minUnits" value="<?php echo ($this->input->post('minUnits') ? $this->input->post('minUnits') : $faculty['minUnits']); ?>" class="form-control" id="minUnits" />
		</div>
	</div>
	<div class="form-group">
		<label for="maxUnits" class="col-md-4 control-label">MaxUnits</label>
		<div class="col-md-8">
			<input type="text" name="maxUnits" value="<?php echo ($this->input->post('maxUnits') ? $this->input->post('maxUnits') : $faculty['maxUnits']); ?>" class="form-control" id="maxUnits" />
		</div>
	</div>
	<div class="form-group">
		<label for="dateAdded" class="col-md-4 control-label">DateAdded</label>
		<div class="col-md-8">
			<input type="text" name="dateAdded" value="<?php echo ($this->input->post('dateAdded') ? $this->input->post('dateAdded') : $faculty['dateAdded']); ?>" class="form-control" id="dateAdded" />
		</div>
	</div>
	<div class="form-group">
		<label for="dateModified" class="col-md-4 control-label">DateModified</label>
		<div class="col-md-8">
			<input type="text" name="dateModified" value="<?php echo ($this->input->post('dateModified') ? $this->input->post('dateModified') : $faculty['dateModified']); ?>" class="form-control" id="dateModified" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>