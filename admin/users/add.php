<?php
/**
 * Created by PhpStorm.
 * User: Beper
 * Date: 15/09/2017
 * Time: 3:26 PM
 */


?>

<form method="POST" class="form-horizontal">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="control-label col-lg-4">User ID No.</label>
            <div class="col-lg-8">
                <input name="idno" type="text" class="form-control" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-lg-4">User Type</label>
            <div class="col-lg-8">
                <select name="type" class="form-control" required>
                    <option value="">Select one...</option>
                    <?php echo $list_types; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-lg-4">Last Name</label>
            <div class="col-lg-8">
                <input name="ln" type="text" class="form-control" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-lg-4">First Name</label>
            <div class="col-lg-8">
                <input name="fn" type="email" class="form-control" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-lg-4">Email Address</label>
            <div class="col-lg-8">
                <input name="email" type="email" class="form-control" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-lg-4">Password</label>
            <div class="col-lg-8">
                <input name="pw" type="password" class="form-control" required/>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-lg-4">Mobile Number</label>
            <div class="col-lg-8">
                <input name="mobile" type="text" class="form-control" required/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-offset-4 col-lg-8">
                <button name="add" type="submit" class="btn btn-success">
                    Add
                </button>
            </div>
        </div>
    </div>
</form>

