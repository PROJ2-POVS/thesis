<?php echo form_open('user/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="userTypeID" class="col-md-4 control-label"><span class="text-danger">*</span>Usertype</label>
		<div class="col-md-8">
			<select name="userTypeID" class="form-control">
				<option value="">select usertype</option>
				<?php 
				foreach($all_usertype as $usertype)
				{
					$selected = ($usertype['userTypeID'] == $this->input->post('userTypeID')) ? ' selected="selected"' : "";

					echo '<option value="'.$usertype['userTypeID'].'" '.$selected.'>'.$usertype['userTypeID'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('userTypeID');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="userPassword" class="col-md-4 control-label"><span class="text-danger">*</span>UserPassword</label>
		<div class="col-md-8">
			<input type="password" name="userPassword" value="<?php echo $this->input->post('userPassword'); ?>" class="form-control" id="userPassword" />
			<span class="text-danger"><?php echo form_error('userPassword');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="userIDNo" class="col-md-4 control-label"><span class="text-danger">*</span>UserIDNo</label>
		<div class="col-md-8">
			<input type="text" name="userIDNo" value="<?php echo $this->input->post('userIDNo'); ?>" class="form-control" id="userIDNo" />
			<span class="text-danger"><?php echo form_error('userIDNo');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="userLN" class="col-md-4 control-label"><span class="text-danger">*</span>UserLN</label>
		<div class="col-md-8">
			<input type="text" name="userLN" value="<?php echo $this->input->post('userLN'); ?>" class="form-control" id="userLN" />
			<span class="text-danger"><?php echo form_error('userLN');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="userFN" class="col-md-4 control-label"><span class="text-danger">*</span>UserFN</label>
		<div class="col-md-8">
			<input type="text" name="userFN" value="<?php echo $this->input->post('userFN'); ?>" class="form-control" id="userFN" />
			<span class="text-danger"><?php echo form_error('userFN');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="userEmail" class="col-md-4 control-label"><span class="text-danger">*</span>UserEmail</label>
		<div class="col-md-8">
			<input type="text" name="userEmail" value="<?php echo $this->input->post('userEmail'); ?>" class="form-control" id="userEmail" />
			<span class="text-danger"><?php echo form_error('userEmail');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="userMobile" class="col-md-4 control-label"><span class="text-danger">*</span>UserMobile</label>
		<div class="col-md-8">
			<input type="text" name="userMobile" value="<?php echo $this->input->post('userMobile'); ?>" class="form-control" id="userMobile" />
			<span class="text-danger"><?php echo form_error('userMobile');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>