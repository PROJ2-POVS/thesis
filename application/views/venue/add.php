<?php echo form_open('venue/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="venueType" class="col-md-4 control-label"><span class="text-danger">*</span>VenueType</label>
		<div class="col-md-8">
			<select name="venueType" class="form-control">
				<option value="">select</option>
				<?php 
				$venueType_values = array(
					'laboratory'=>'Laboratory',
					'classroom'=>'Classroom',
				);

				foreach($venueType_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('venueType')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('venueType');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="venueCode" class="col-md-4 control-label"><span class="text-danger">*</span>VenueCode</label>
		<div class="col-md-8">
			<input type="text" name="venueCode" value="<?php echo $this->input->post('venueCode'); ?>" class="form-control" id="venueCode" />
			<span class="text-danger"><?php echo form_error('venueCode');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="venueName" class="col-md-4 control-label"><span class="text-danger">*</span>VenueName</label>
		<div class="col-md-8">
			<input type="text" name="venueName" value="<?php echo $this->input->post('venueName'); ?>" class="form-control" id="venueName" />
			<span class="text-danger"><?php echo form_error('venueName');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>