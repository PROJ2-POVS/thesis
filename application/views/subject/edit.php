<?php echo form_open('subject/edit/'.$subject['sujectID'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="subjectType" class="col-md-4 control-label"><span class="text-danger">*</span>SubjectType</label>
		<div class="col-md-8">
			<select name="subjectType" class="form-control">
				<option value="">select</option>
				<?php 
				$subjectType_values = array(
					'laboratory'=>'Laboratory',
					'lecture'=>'Lecture',
					'physedu'=>'P.E.',
				);

				foreach($subjectType_values as $value => $display_text)
				{
					$selected = ($value == $subject['subjectType']) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('subjectType');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="subjectCode" class="col-md-4 control-label"><span class="text-danger">*</span>SubjectCode</label>
		<div class="col-md-8">
			<input type="text" name="subjectCode" value="<?php echo ($this->input->post('subjectCode') ? $this->input->post('subjectCode') : $subject['subjectCode']); ?>" class="form-control" id="subjectCode" />
			<span class="text-danger"><?php echo form_error('subjectCode');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="subjectName" class="col-md-4 control-label"><span class="text-danger">*</span>SubjectName</label>
		<div class="col-md-8">
			<input type="text" name="subjectName" value="<?php echo ($this->input->post('subjectName') ? $this->input->post('subjectName') : $subject['subjectName']); ?>" class="form-control" id="subjectName" />
			<span class="text-danger"><?php echo form_error('subjectName');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="units" class="col-md-4 control-label"><span class="text-danger">*</span>Units</label>
		<div class="col-md-8">
			<input type="text" name="units" value="<?php echo ($this->input->post('units') ? $this->input->post('units') : $subject['units']); ?>" class="form-control" id="units" />
			<span class="text-danger"><?php echo form_error('units');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>