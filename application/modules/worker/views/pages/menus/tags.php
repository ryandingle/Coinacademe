<div class="row">
	<div class="col-lg-5" style="padding-left: 30px;padding-bottom: 30px">
    	<label>Add New Tag</label>
        <div class="form-group" style="margin-top: 30px">
            <small><label>Name</label></small>
            <div class="form-group">
            	<input class="form-control input-sm" placeholder="Enter text">
            </div>
            <small style="font-style:italic">The name is how apear on the article site.</small>
        </div>
        
        <div class="form-group" style="margin-top: 30px">
            <small><label>Description</label></small>
            <div class="form-group">
                <textarea class="form-control" placeholder="Description" rows="3"></textarea>
            </div>
            <small style="font-style:italic">The description is not prominent by default; however, some themes may show it.
            </small>
        </div>
        <div class="form-group" style="margin-top: 30px">
            <button type="button" class="btn btn-primary btn-xs">Add new Tag <i class="fa fa-check"></i></button>
        </div>
    </div>
    
    <div class="col-lg-7">
        <div class="col-lg-2" style="padding-right: 0;padding-left: 0">
            <div class="form-group">
                <select class="form-control input-sm">
                    <option value="">Actions</option>
                    <option value="edit">Delete</option>
                </select>
            </div>
        </div>
        <div class="col-lg-1" style="padding-left: 5px">
            <button type="button" class="btn btn-outline btn-default btn-sm">Apply</button>
        </div>
        <div class="pull-right" style="line-height: 3em">
            <small>Showing: <code>5 Items</code> of 20 Tags</small>
        </div>
        <table class="table table-hover" style="border: 1px solid #ccc">
            <thead style="background: #f5f5f5">
                <tr>
                    <th><input type="checkbox"> Name</th>
                    <th>Description</th>
                    <th>Articles</th>
                </tr>
            </thead>
            <tbody>
                <?php for($a = 1;$a <=5;$a++){
                echo '
                <tr>
                    <td>
                    <div>
                        <a href="">
                            <input type="checkbox">  <label>Tag '.$a.'</label>
                        </a>
                    <div>
                    <div>
                        <div class="action-links" style="height: 20px;width: 100%">
                            <small style="display: non">
                            <a href="">Edit</a>
                             | 
                            <a href="">Quick Edit</a>
							 | 
                            <a href="">View</a> 
                             | 
                            <a href="">Trash</a>
                            </small>
                        </div>
                    </div>
                    </td>
                    <td>
                        <a href="">Sample Descriotion a '.$a.'</a>
                    </td>
                    <td>
                        <code>1</code>
                    </td>
                </tr>
                ';
                }?>
            </tbody>
            <tfooter>
                <tr style="background: #f5f5f5">
                    <th>Name</th>
                    <th>Description</th>
                    <th>Articles</th>
                </tr>
            </tfooter>
        </table>
        <div class="col-lg-2" style="padding-right: 0;padding-left: 0">
            <div class="form-group">
                <select class="form-control input-sm">
                    <option value="">Actions</option>
                    <option value="edit">Delete</option>
                </select>
            </div>
        </div>
        <div class="col-lg-1" style="padding-left: 5px">
            <button type="button" class="btn btn-outline btn-default btn-sm">Apply</button>
        </div>
        
        <div class="pull-right" style="line-height: 3em">
            <small>Showing: <code>5 Items</code> of 20 Tags</small>
        </div>
        <br />
        <div class="col-lg-12 place-left" style="width: 100%;padding-left:0;padding-bottom: 20px;padding-top: 20px">
            <small style="font-style:italic">
            <strong>Note:</strong>
            <br>
            Deleting a tag does not delete the posts in that tag. Instead, Articles that were only assigned to the deleted tag are set to the tag <strong>None</strong>.
            </small>
        </div>
    </div>
</div>