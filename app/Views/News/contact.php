<h2><?= esc($title) ?></h2>

    <?= service('validation')->listErrors() ?>

    <?php
    if ($success==true)
    {
        echo '<div class="alert alert-success">News Updated Successfully.</div>';
    }
    ?>

<div class="container">
    <form action="" method="post" enctype="multipart/form-data">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="country">Country</label>
        <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="India">India</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
        </select>

        <label for="contact">Contact</label>
        <input type="number" name="contact" placeholder="Your Contact..">

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit">

    </form>
</div>
