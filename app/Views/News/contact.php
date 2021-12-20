<div class="container bg-secondary">
    <div class="col-lg-8 m-auto d-block bg-gradient">

        <form action="#" id="contactForm" method="post">
            <div class="mb-3">
            <label class="form-label bg" for="name">Name</label>
            <input type="text" name="name" class="form-control bg-info" id="name">
            <span id="error1" class="text-danger"></span>
            </div>

            <div class="mb-3">
            <label class="form-label" for="address">Address</label>
            <input type="text" name="address" class="form-control bg-info" id="address">
            <span id="error2" class="text-danger"></span>
            </div>

            <input type="submit" class="btn btn-primary" value="Fetch">
        </form>

    </div>
</div>

<script>
    document.getElementById('contactForm').addEventListener('submit',validation);
    function validation(event)
    {
        //console.log('validating');
        document.getElementById('error1').innerHTML = '';
        var u_name = document.getElementById('name').value;
        var u_address = document.getElementById('address').value;
        var isValid = true;

        if (u_name === '')
        {
            document.getElementById('error1').innerHTML = "**Please Provide Valid Name";
            isValid = false;
        }

        if (u_name.length < 3  || u_name.length > 20)
        {
            document.getElementById('error1').innerHTML = "** Please Provide Valid Length";
            isValid = false;
        }

        if (!isNaN(u_name))
        {
            document.getElementById('error1').innerHTML = "** Please Provide Valid Character.";
            isValid = false;
        }

        if (u_address === '')
        {
            document.getElementById('error2').innerHTML = "** Please Provide Valid Address"
            isValid = false;
        }

        if (u_address.length > 200)
        {
            document.getElementById('error2').innerHTML = "** Please Provide Valid Address";
            isValid = false;
        }
        if (!isValid)
        {
            event.preventDefault();
        }
        return isValid;
    }
</script>












































































<!--<h2><?/*= esc($title) */?></h2>

    <?/*= service('validation')->listErrors() */?>

    <?php
/*    if ($success==true)
    {
        echo '<div class="alert alert-success">News Updated Successfully.</div>';
    }
    */?>
<style>
    input,select,textarea
    {
        background-color:#bacbe6 !important;
    }
</style>
<div class="container bg-dark">
    <form action="" method="post" onsubmit="return validate()" enctype="multipart/form-data">

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

<script>
    function validate()
    {
        return false;
    }
</script>-->
