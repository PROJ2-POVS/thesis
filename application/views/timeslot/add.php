<?php echo form_open('timeslot/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="dayOfWeek" class="col-md-4 control-label"><span class="text-danger">*</span>DayOfWeek</label>
		<div class="col-md-8">
			<input type="text" name="dayOfWeek" value="<?php echo $this->input->post('dayOfWeek'); ?>" class="form-control" id="dayOfWeek" />
			<span class="text-danger"><?php echo form_error('dayOfWeek');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="startTime" class="col-md-4 control-label"><span class="text-danger">*</span>StartTime</label>
		<div class="col-md-8">
			<input type="text" name="startTime" value="<?php echo $this->input->post('startTime'); ?>" class="form-control" id="startTime" />
			<span class="text-danger"><?php echo form_error('startTime');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="endTime" class="col-md-4 control-label"><span class="text-danger">*</span>EndTime</label>
		<div class="col-md-8">
			<input type="text" name="endTime" value="<?php echo $this->input->post('endTime'); ?>" class="form-control" id="endTime" />
			<span class="text-danger"><?php echo form_error('endTime');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>