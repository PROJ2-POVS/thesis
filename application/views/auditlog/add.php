<?php echo form_open('auditlog/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="userID" class="col-md-4 control-label"><span class="text-danger">*</span>User</label>
		<div class="col-md-8">
			<select name="userID" class="form-control">
				<option value="">select user</option>
				<?php 
				foreach($all_users as $user)
				{
					$selected = ($user['userID'] == $this->input->post('userID')) ? ' selected="selected"' : "";

					echo '<option value="'.$user['userID'].'" '.$selected.'>'.$user['userFN'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('userID');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="timestamp" class="col-md-4 control-label"><span class="text-danger">*</span>Timestamp</label>
		<div class="col-md-8">
			<input type="text" name="timestamp" value="<?php echo $this->input->post('timestamp'); ?>" class="form-control" id="timestamp" />
			<span class="text-danger"><?php echo form_error('timestamp');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="auditDesc" class="col-md-4 control-label"><span class="text-danger">*</span>AuditDesc</label>
		<div class="col-md-8">
			<textarea name="auditDesc" class="form-control" id="auditDesc"><?php echo $this->input->post('auditDesc'); ?></textarea>
			<span class="text-danger"><?php echo form_error('auditDesc');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>