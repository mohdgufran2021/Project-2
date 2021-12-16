<h2><?= esc($title) ?></h2>

    <?= service('validation')->listErrors() ?>

    <?php
    if ($success==true)
    {
        echo '<div class="alert alert-success">News Updated Successfully.</div>';
    }
    ?>
<style>
    input,select,textarea
    {
        background-color:#bacbe6 !important;
    }
</style>
<div class="container bg-dark">
    <form action="" method="post" enctype="multipart/form-data">

        <label for="fname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="fname" name="firstname" placeholder="Your name..">

        <label for="lname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lname" name="lastname" placeholder="Your last name..">

        <label for="country" class="form-label">Country</label>
        <select id="country" class="form-control" name="country">
            <option value="australia">Australia</option>
            <option value="India">India</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
        </select>

        <label for="contact" class="form-label">Contact</label>
        <input type="number" id="contact" class="form-control" name="contact" placeholder="Your Contact..">

        <label for="subject" class="form-label">Subject</label>
        <textarea id="subject" class="form-control" name="subject" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" class="btn btn-dark" value="Submit">

    </form>
</div>
