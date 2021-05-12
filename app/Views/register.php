<div class="containerr">

<div class="col-md-auto">
	<!-- /.card -->
	<!-- Horizontal Form -->
	<div class="card card-info">
	<div class="card-header">
	<h3 class="card-title">Add A New User</h3>
	<?php if(isset($validation)):?>
	<div class="alert alert-danger"><?= $validation->listErrors() ?></div>
	<?php endif;?>
	</div>
		<!-- /.card-header -->
		<!-- form start -->
		<form class="form-horizontal" action="/register/save" method="post">
		<div class="card-body">
		<div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-10">
		<input type="text" class="form-control" name="name" placeholder="Name" value="<?= set_value('name') ?>">
		</div>
		</div>
		<div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
		<div class="col-sm-10">
		<input type="email" class="form-control" name="email" placeholder="Email">
		</div>
		</div>
		<div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
		<div class="col-sm-10">
		<input type="password" class="form-control" name="password">
		</div>
		</div>
		<div class="form-group row">
		<label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
		<div class="col-sm-10">
		<input type="password" class="form-control" name="confpassword">
		</div>
		</div>
		<div class="form-group row">
		<div class="offset-sm-2 col-sm-10">
		<div class="form-check">
		<input type="checkbox" class="form-check-input" id="exampleCheck2">
		<label class="form-check-label" for="exampleCheck2">Remember me</label>
		</div>
		</div>
		</div>
		</div>
		<!-- /.card-body -->
		<div class="card-footer">
		<button type="submit" class="btn btn-info">Save</button>
		<button type="submit" class="btn btn-default float-right">Cancel</button>
		</div>
		<!-- /.card-footer -->
		</form>
	</div>
	<!-- /.card -->

</div>
</div>
<style type="text/css">
	.containerr
{
    
    margin-left: 12px;
}

.col-md-auto
{
	position: relative;
    width: 100%;
    padding-right: 50.5px;
    padding-left: 50.5px;
    margin-top: 30px;
}
</style>
