<div class="row">
	<div class="col-lg-5" style="padding-left: 30px;padding-bottom: 30px">
    	<label>Add New Category</label>
        <div class="form-group" style="margin-top: 30px">
            <small><label>Name</label></small>
            <div class="form-group">
            	<input id="category" class="form-control input-sm" placeholder="Enter text">
            </div>
            <small style="font-style:italic">The name is how apear on the article site.</small>
        </div>
        <div class="form-group" style="margin-top: 30px">
            <small><label>Parent</label></small>
            <div class="form-group">
                <div class="form-group parent_selector category_box_input">
                    <select class="form-control input-sm parent_category" style="width: 50%">
                        <option value="0">None</option>
                        <?php 
                        $this->db->order_by('category_name','ASC');
                        $parent_category = $this->db->get('category',5);
						$all_category = $parent_category->num_rows();
                        foreach($parent_category->result() as $row){?>
                        <option value="<?php echo $row->category_id;?>"><?php echo $row->category_name;?></option>
                        <?php };?>
                    </select>
                </div>
            </div>
            <small style="font-style:italic">Categories, unlike tags, can have a hierarchy. You might have a Jazz category, and under that have children categories for Bebop and Big Band. Totally optional.
            </small>
        </div>
        
        <div class="form-group" style="margin-top: 30px">
            <button type="button" data-tab="categories" class="category-input-click btn btn-primary btn-xs">Add new category <i class="fa fa-check"></i></button>
        </div>
    </div>
    
    <div class="col-lg-7">
        <div class="col-lg-2" style="padding-right: 0;padding-left: 0">
            <div class="form-group">
                <select class="form-control input-sm action" data-selection="category">
                    <option value="none">Actions</option>
                    <option value="delete">Delete</option>
                </select>
            </div>
        </div>
        <div class="pull-right" style="line-height: 3em">
            <small>Showing: <code>
			<?php if($all_category < 5) echo $all_category;
				  else echo '5';
			?>
             Items</code> 
             of <?php echo $all_category;?> Categories</small>
        </div>
        <table class="table table-hover" style="border: 1px solid #ccc">
            <thead style="background: #f5f5f5">
                <tr>
                    <th><input type="checkbox" class="check_all"> Name</th>
                    <th>Articles</th>
                </tr>
            </thead>
            <tbody class="new_row">
            	<?php 
				foreach($parent_category->result() as $row)
				{?>
                <tr class="category<?php echo $row->category_id;?>">
                    <td>
                    <div>
                    <?php
					if($row->category_id == 1){
						echo '<label>'.$row->category_name.'</label>';
					}else{
						echo '
						<input class="checker" name="category_checker[]" type="checkbox" value="'.$row->category_id.'">  <label>'.$row->category_name.'</label>
						<div>
						<div>
							<div class="action-links" style="height: 20px;width: 100%">
								<small>
								<a href="javascript:void(0)" class="quick_action" data-item-id="'.$row->category_id.'" data-action="edit" data-selection="category" data-toggle="modal" data-target=".editmodal">Quick Edit</a>
								 | 
								<a href="javascript:void(0)" class="quick_action" data-item-id="'.$row->category_id.'" data-action="delete" data-selection="category">Trash</a>
								</small>
							</div>
						</div>
						';
					}
					?>
                    </td>
                    <td>
                    <?php 
						$this->db->where('category_id',$row->category_id);
						$cat_rel = $this->db->get('category_relationships');
					?>
                    	
                        <code><?php echo $cat_rel->num_rows();?></code>
                    </td>
                </tr>
				<?php 
				}?>
            </tbody>
            <tfooter>
                <tr style="background: #f5f5f5">
                    <th>Name</th>
                    <th>Articles</th>
                </tr>
            </tfooter>
        </table>
        <div class="col-lg-2" style="padding-right: 0;padding-left: 0">
            <div class="form-group">
                <select class="form-control input-sm action_bottom" data-selection="category">
                    <option value="none">Actions</option>
                    <option value="delete">Delete</option>
                </select>
            </div>
        </div>
        
        <div class="pull-right" style="line-height: 3em">
            <small>Showing: <code>
			<?php if($all_category < 5) echo $all_category;
				  else echo '5';
			?>
             Items</code> 
             of <?php echo $all_category;?> Categories</small>
        </div>
        <br />
        <div class="col-lg-12 place-left" style="width: 100%;padding-left:0;padding-bottom: 20px;padding-top: 20px">
            <small style="font-style:italic">
            <strong>Note:</strong>
            <br>
            Deleting a category does not delete the posts in that category. Instead, posts that were only assigned to the deleted category are set to the category <strong>Uncategorized</strong>.
            </small>
        </div>
    </div>
</div>

<div class="editmodal modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
            <div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            	<h4 class="modal-title">Edit Category</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                    <?php
						$attributes = array('class'=>'updatesettings-form categories'); 
						echo form_open('worker/ajax/action_request/?action=update&define=category',$attributes);?>
                    	<div class="update_acount_validation_message">
                        </div>
                        <div class="form-group" style="margin-top: 30px">
                            <small><label>Name</label></small>
                            <div class="form-group">
                                <input name="category_name_edit" id="category_edit" class="form-control input-sm" placeholder="Enter text">
                            </div>
                            <small style="font-style:italic">The name is how apear on the article site.</small>
                        </div>
                        <div class="form-group" style="margin-top: 30px">
                            <small><label>Parent</label></small>
                            <div class="form-group">
                                <div class="form-group parent_selector category_box_input">
                                    <select class="form-control input-sm edit_parent_category" name="parent_category_edit" style="width: 50%">
                                        <option value="0">None</option>
                                        <?php 
                                        $this->db->order_by('category_name','ASC');
                                        $parent_category = $this->db->get('category',5);
                                        $all_category = $parent_category->num_rows();
                                        foreach($parent_category->result() as $row){?>
                                        <option value="<?php echo $row->category_id;?>"><?php echo $row->category_name;?></option>
                                        <?php };?>
                                    </select>
                                </div>
                            </div>
                            <small style="font-style:italic">Categories, unlike tags, can have a hierarchy. You might have a Jazz category, and under that have children categories for Bebop and Big Band. Totally optional.
                            </small>
                        </div>
                        <div class="form-group">
                        	<button type="submit" class="pull-right btn btn-info">Update <i class="fa fa-save"></i></button>
                        </div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>