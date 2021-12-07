<div class="row">
    <div class="col-6">

        <h2 class="text-center">Edit Your Profile</h2>
        <?php $validation =  \Config\Services::validation();
        echo $validation->listErrors();

        if ($success==true)
        {
            echo '<div class="alert alert-success">Profile Update Successfully.</div>';
        }

        if ($error==true)
        {
            echo '<div class="alert alert-danger">Something Went Wrong.</div>';
        }


        ?>
        <form action="<?php echo base_url('user/edit_profile') ?>" method="post">
            <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" value="<?php echo $user['name']; ?>" id="name" class="form-control">
            </div>

            <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" value="<?php echo $user['email']; ?>" id="email" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">UPDATE</button>
            <a class="btn btn-warning" href="<?php echo base_url('user/profile') ?>">BACK TO PROFILE</a>

        </form>


    </div>
</div>
