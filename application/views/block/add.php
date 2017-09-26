<?php echo form_open('block/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="blockCode" class="col-md-4 control-label">BlockCode</label>
		<div class="col-md-8">
			<input type="text" name="blockCode" value="<?php echo $this->input->post('blockCode'); ?>" class="form-control" id="blockCode" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>