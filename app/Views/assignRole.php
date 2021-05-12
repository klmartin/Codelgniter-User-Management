<!-- Section content -->
<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <div class="float-left">
                    <div class="btn-group">
                        <a href="<?= base_url('/manage-roles') ?>" class="btn btn-sm btn-block btn-secondary"><i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="<?= site_url('/submit-role');?>" method="post">  

<?php if (session()->has("message")) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo session('message'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
<?php endif; ?>

                    <div class="col-md-10">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><?= lang('User Names') ?></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-user"></i></i></span>
                                    </div>
                                   <select name="user_id" class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <?php foreach ($userd as $userdt): ?>
                                      <option value=" <?= $userdt['user_id']?> "> <?= $userdt['user_name'] ?> </option>
                                    <?php endforeach; ?>

                                    </select>

                                    <?php if (session('error.name')) { ?>
                                    <div class="invalid-feedback">
                                        <h6><?= session('error.name') ?></h6>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><?= lang('Roles') ?></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                    </div>
                                   <select name="role_id" class="form-select" aria-label="Default select example">
                                      <option selected>Open this select menu</option>
                                      <?php foreach ($roles as $role): ?>
                                      <option value=" <?= $role['id']?> "> <?= $role['role_name'] ?> </option>
                                      <?php endforeach; ?>
                                    </select>

                                    <?php if (session('error.description')) { ?>
                                    <div class="invalid-feedback">
                                        <h6><?= session('error.description') ?></h6>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        </form>
                    
                        <div class="float-right">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-sm btn-block btn-primary">
                                    Save Role
                                </button>
                            </div>
                        </div>
                    </div>
          
            </div>
        </div>
    </div>
    
</div>
