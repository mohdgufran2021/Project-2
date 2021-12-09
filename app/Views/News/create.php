<div class="row">
    <div class="col-12">
<h2><?= esc($title) ?></h2>

<?= service('validation')->listErrors() ?>

<form action="/news/create" enctype="multipart/form-data" method="post">
    <?= csrf_field() ?>

    <div class="mb-3">
       <label for="title" class="form-label">Title</label>
       <input type="text" class="form-control" name="title" />
    </div>

    <div class="mb-3">
       <label for="body" class="form-label">Body</label>
       <textarea name="body" class="form-control" cols="45" rows="4"></textarea>
    </div>


    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" name="status">
            <option value="published">Published</option>
            <option value="pending">Pending</option>
        </select>
    </div>

    <div class="mb-3">
        <input type="file" name="image" id="image">
    </div>

    <input type="submit" class="btn btn-secondary" name="submit" value="Create news item" />
</form>
    </div>
</div>
