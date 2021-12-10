<div class="row">
    <div class="col-12">
        <h2><?= esc($title) ?></h2>
        <?= service('validation')->listErrors() ?>
        <?php
        if ($success == true) {
            echo '<div class="alert alert-success">Success</div>';
        }

        if ($error == true) {
            echo '<div class="alert alert-danger">Wrong Entry.</div>';
        }
        ?>

        <form action="" enctype="multipart/form-data" method="post">

            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo set_value('name') ?>">

            <input type="file" class="form-control" name="image" id="image">

            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</div>
