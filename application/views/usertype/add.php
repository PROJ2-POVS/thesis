<?php echo form_open('usertype/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="userType" class="col-md-4 control-label"><span class="text-danger">*</span>UserType</label>
		<div class="col-md-8">
			<input type="text" name="userType" value="<?php echo $this->input->post('userType'); ?>" class="form-control" id="userType" />
			<span class="text-danger"><?php echo form_error('userType');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>