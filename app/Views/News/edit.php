<div class="row">
    <div class="col-12">
<h2><?= esc($title) ?></h2>

<?= service('validation')->listErrors() ?>

        <?php
        if ($success==true)
        {
            echo '<div class="alert alert-success">News Updated Successfully.</div>';
        }
        ?>

<form action="<?php echo base_url('news/edit/'.$row['id']) ?>" method="post">
    <?= csrf_field() ?>

    <div class="mb-3">
       <label for="title" class="form-label">Title</label>
       <input type="text" class="form-control" value="<?php echo set_value('title',$row['title']) ?>" id="1" name="title" />
    </div>

    <div class="mb-3">
       <label for="body" class="form-label">Body</label>
       <textarea name="body" id="2" class="form-control" cols="45" rows="4"><?php echo set_value('body',$row['body']); ?></textarea>
    </div>


    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" name="status" id="3">
            <option value="published" <?php echo set_select('status','published',$row['status']=='published');?>>Published</option>
            <option value="pending" <?php echo set_select('status','pending',$row['status']=='pending');?>>Pending</option>
        </select>
    </div>

    <input type="submit" class="btn btn-secondary" name="submit" value="Update news item" />
</form>
    </div>
</div>
