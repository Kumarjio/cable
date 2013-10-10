<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <legend>Edit your detail</legend>
    <?php if ($this->session->flashdata('error') != '') { ?>
        <div class="alert alert-danger">
            <a class="close" data-dismiss="alert" href="#">x</a>
            <strong><?php echo $this->session->flashdata('error'); ?></strong>
        </div>
    <?php } ?>

    <?php if ($this->session->flashdata('success') != '') { ?>
        <div class="alert alert-success">
            <a class="close" data-dismiss="alert" href="#">x</a>
            <strong><?php echo $this->session->flashdata('success'); ?></strong>
        </div>
    <?php } ?>

    <form action="<?php echo base_url() . 'admin/profile/update'; ?>" method="post" class="form">
        <div class="form-group">
            <label class="col-xs-6 col-sm-3 col-md-1 col-lg-1">Username</label>
            <input type="text" name="mail_address" value="<?php echo set_value('mail_address'); ?>" class="form-control col-xs-6 col-sm-3 col-md-1 col-lg-1" placeholder="E-Mail Address"/>
            <span class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-danger"><?php echo form_error('mail_address'); ?></span>
        </div>

        <div class="form-group">
            <button type="submit" name="submit" class="btn-sm btn-info col-xs-2 col-sm-2 col-md-2 col-lg-2">Update Profile</button>
            &nbsp;&nbsp;
            <a href="<?php echo base_url() .'admin/dashboard'; ?>">
                <button type="button" class="btn-sm btn col-xs-2 col-sm-2 col-md-2 col-lg-2">Cancel</button>
            </a>
        </div>
    </form>
</div>