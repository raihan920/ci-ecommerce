<?php
if(isset($success_message)){
?>
<div class="alert alert-success fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <?php echo $success_message;?>
</div>
<?php
}elseif(validation_errors()==TRUE){
?>
<div class="alert alert-danger fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <?php echo validation_errors(); //showing validation errors ?>
</div>   
<?php    
}
?>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
<!--            <form class="form-horizontal" action="">-->
                <?php echo form_open('admin/register_new_admin','class=form-horizontal'); //first parameter = action, second parameter = class-name?>
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="admin-name">Admin Name</label>
                        <div class="controls">
                            <input type="text" name="user_name" value="<?php echo set_value('user_name'); //if there is any value from previous submit it will show here?>" class="span6 typeahead" id="admin-name" required />
                            <small style="color: red;"> <?php echo form_error('user_name'); //showing individual error?> </small>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="admin-email">Admin Email</label>
                        <div class="controls">
                            <input type="email" name="user_email" value="<?php echo set_value('user_email'); //if there is any value from previous submit it will show here?>" class="span6 typeahead" id="admin-email" required />
                            <small style="color: red;"> <?php echo form_error('user_email'); //showing individual error?> </small>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="admin-password">Admin Password</label>
                        <div class="controls">
                            <input type="password" name="user_password" class="span6 typeahead" id="admin-password" required />
                            <small style="color: red;"> <?php echo form_error('user_password'); //showing individual error?> </small>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="confirm-password">Confirm Password</label>
                        <div class="controls">
                            <input type="password" name="confirm_password" class="span6 typeahead" id="confirm-password" required />
                            <small style="color: red;"> <?php echo form_error('confirm_password'); //showing individual error?> </small>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
<!--            </form>-->
                <?php echo form_close(); ?>           
        </div>
    </div><!--/span-->
</div><!--/row-->