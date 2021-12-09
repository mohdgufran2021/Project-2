<div class="row">
    <div class="col-4 offset-4">
        <h2 class="text-center mb-5">Registration Form</h2>
        <?php $validation =  \Config\Services::validation();
            echo $validation->listErrors();

            if ($success==true)
            {
                echo '<div class="alert alert-success">Registered Successfully.</div>';
            }
        ?>
        <form method="post" action="<?php echo base_url('user/register') ?>" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo set_value('name')?>" id="name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo set_value('email')?>" id="email">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>

            <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm-Password</label>
                <input type="password" name="confirm_password" class="form-control" id="confirm-password">
            </div>

            <div class="mb-3">
                <label for="file" class="form-label">Upload</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-secondary">Register</button>

        </form>
    </div>
</div>
