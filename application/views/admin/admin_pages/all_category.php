<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>All Category</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Short Description</th>
                        <th>Long Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php foreach ($all_category as $category):?>
                    <tr>
                        <td><?= $category->category_id;?></td>
                        <td class="center"><?= $category->category_name;?></td>
                        <td class="center"><?= $category->category_short_desc;?></td>
                        <td class="center"><?= $category->category_long_desc;?></td>
                        <td class="center">
                            <?php 
                                if($category->category_status == 1) {
                                    echo 'Active';                                                    
                                }elseif ($category->category_status == 2) {
                                    echo 'Inactive';                                
                                }elseif ($category->category_status == 3) {
                                    echo 'Deleted';
                                }
                            ?>
                        </td>
                        <td class="center">
                            <?php if($category->category_status == 1 || $category->category_status == 3){?>
                            <a class="btn btn-success" href="<?php echo base_url("change-category-status/$category->category_id/2");?>" title="Update Status">
                                <i class="halflings-icon white thumbs-up"></i>                                            
                            </a>
                            <?php } elseif ($category->category_status == 2){?>
                            <a class="btn btn-danger" href="<?php echo base_url("change-category-status/$category->category_id/1");?>" title="Update Status">
                                <i class="halflings-icon white thumbs-down"></i>                                            
                            </a>
                            <?php }?>
                            <a class="btn btn-info" href="<?php echo base_url("edit-category/$category->category_id");?>" title="Edit Category">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <?php if($category->category_status != 3){?>
                            <a class="btn btn-danger" href="<?php echo base_url("change-category-status/$category->category_id/3");?>" title="Delete Category">
                                <i class="halflings-icon white trash"></i>
                            </a>
                            <?php }?>
                            
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->