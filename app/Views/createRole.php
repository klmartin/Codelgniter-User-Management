

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
                <form class="form-horizontal" action="<?= site_url('/submit-form');?>" method="post">  -->
                    <div class="col-md-10">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><?= lang('Name') ?></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                    </div>
                                    <input type="text" name="name" class="form-control <?= session('error.name') ? 'is-invalid' : '' ?>" value="<?= old('name') ?>" placeholder="<?= lang('Name') ?>">
                                    <?php if (session('error.name')) { ?>
                                    <div class="invalid-feedback">
                                        <h6><?= session('error.name') ?></h6>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><?= lang('Description') ?></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-comment-alt"></i></span>
                                    </div>
                                    <textarea type="text" name="description" class="form-control <?= session('error.description') ? 'is-invalid' : '' ?>" value="<?= old('description') ?>" placeholder="<?= lang('Description') ?>"><?= old('description') ?></textarea>
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
