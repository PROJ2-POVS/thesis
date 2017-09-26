<?php echo form_open('class/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="subjectID" class="col-md-4 control-label"><span class="text-danger">*</span>Subject</label>
		<div class="col-md-8">
			<select name="subjectID" class="form-control">
				<option value="">select subject</option>
				<?php 
				foreach($all_subjects as $subject)
				{
					$selected = ($subject['sujectID'] == $this->input->post('subjectID')) ? ' selected="selected"' : "";

					echo '<option value="'.$subject['sujectID'].'" '.$selected.'>'.$subject['subjectCode'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('subjectID');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="facultyID" class="col-md-4 control-label"><span class="text-danger">*</span>Faculty</label>
		<div class="col-md-8">
			<select name="facultyID" class="form-control">
				<option value="">select faculty</option>
				<?php 
				foreach($all_faculty as $faculty)
				{
					$selected = ($faculty['facultyID'] == $this->input->post('facultyID')) ? ' selected="selected"' : "";

					echo '<option value="'.$faculty['facultyID'].'" '.$selected.'>'.$faculty['userID'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('facultyID');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="timeSlotID" class="col-md-4 control-label"><span class="text-danger">*</span>Timeslot</label>
		<div class="col-md-8">
			<select name="timeSlotID" class="form-control">
				<option value="">select timeslot</option>
				<?php 
				foreach($all_timeslots as $timeslot)
				{
					$selected = ($timeslot['timeSlotID'] == $this->input->post('timeSlotID')) ? ' selected="selected"' : "";

					echo '<option value="'.$timeslot['timeSlotID'].'" '.$selected.'>'.$timeslot['dayOfWeek'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('timeSlotID');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="venueID" class="col-md-4 control-label"><span class="text-danger">*</span>Venue</label>
		<div class="col-md-8">
			<select name="venueID" class="form-control">
				<option value="">select venue</option>
				<?php 
				foreach($all_venues as $venue)
				{
					$selected = ($venue['venueID'] == $this->input->post('venueID')) ? ' selected="selected"' : "";

					echo '<option value="'.$venue['venueID'].'" '.$selected.'>'.$venue['venueCode'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('venueID');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="academicYear" class="col-md-4 control-label"><span class="text-danger">*</span>AcademicYear</label>
		<div class="col-md-8">
			<input type="text" name="academicYear" value="<?php echo $this->input->post('academicYear'); ?>" class="form-control" id="academicYear" />
			<span class="text-danger"><?php echo form_error('academicYear');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="semester" class="col-md-4 control-label"><span class="text-danger">*</span>Semester</label>
		<div class="col-md-8">
			<input type="text" name="semester" value="<?php echo $this->input->post('semester'); ?>" class="form-control" id="semester" />
			<span class="text-danger"><?php echo form_error('semester');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>