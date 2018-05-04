<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add New Category</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <!--<form class="form-horizontal" action="">-->
            <?php echo form_open('products/save_category', 'class=form-horizontal'); //first parameter = action, second parameter = class-name?>
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="category-name">Category Name</label>
                    <div class="controls">
                        <input type="text" name="category_name" value="" class="span6 typeahead" id="category-name" required />                            
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="short-desc">Category Short Description</label>
                    <div class="controls">
                        <input type="text" name="category_short_desc" value="" class="span6 typeahead" id="short-desc" required />
                    </div>
                </div>

                <div class="control-group hidden-phone">
                    <label class="control-label" for="long-desc">Category Long Description</label>
                    <div class="controls">
                        <textarea class="cleditor" name="category_long_desc" id="long-desc" rows="3"></textarea>
                    </div>
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
            <!--</form>-->
            <?php echo form_close(); ?>           
        </div>
    </div><!--/span-->
</div><!--/row-->