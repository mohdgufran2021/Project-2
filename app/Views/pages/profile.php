<div class="row">
    <div class="col-6">

        <dl>
            <dt>Name</dt>
            <dd><?php echo $user['name']; ?></dd>

            <dt>Email</dt>
            <dd><?php echo $user['email']; ?></dd>

        </dl>
        <a class="btn btn-danger" href="<?php echo base_url('user/logout') ?>">Log Out</a>
        <a class="btn btn-primary" href="<?php echo base_url('user/edit_profile') ?>">EDIT PROFILE</a>

    </div>
</div>
