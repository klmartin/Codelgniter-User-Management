        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Role Name</th>
                      <th>Role Description</th>
                      <th>Created At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($role as $roles): ?>
                  
                    <tr>
                      <td> <?= $roles['id']?> </td>
                      <td> <?= $roles['role_name']?> </td>
                      <td> <?= $roles['role_desc']?> </td>
                      <td><span class="tag tag-success"></span> <?= $roles['created_at']?> </td>
                      <td>
                      		<a href="<?php echo base_url();?>/UsersController/edit/" class="btn btn-primary a-btn-slide-text <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                      <span class="iconify" data-icon="si-glyph:edit" data-inline="false">Del</span>  
                      </a>
                    <?php endforeach; ?>
                      	<a href="<?php echo base_url();?>/RolesController/deleteRole/<?= $roles['id'];?>" class="btn btn-primary a-btn-slide-text <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                      <span class="iconify" data-icon="fluent:delete-24-regular" data-inline="false">Del</span>   
                      </a>
                  		</form>
                  	  </td>
                    </tr>
               
         
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

<style type="text/css">
	.movebtn{
   		position: absolute;
    	margin-left: 19px;
    	margin-top: -9px;
	}
	.btn-primary {
	    color: var(--blue);
	    background-color: #f4f6f9;
	    border-color: #9ba1a7;
	    box-shadow: none;

	}
</style>