<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<div class="container bg-secondary">
    <div class="col-lg-8 m-auto d-block">

        <form action="#" onclick="return validation()" method="post">
            <label class="form-label" for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name">
            <span id="error1" class="text-danger"></span>

            <label class="form-label" for="address">Address</label>
            <input type="text" name="address" class="form-control" id="address">
            <span id="error2" class="text-danger"></span>

            <input type="submit" class="btn btn-primary">
        </form>

    </div>
</div>

<script>
    function validation()
    {
       var u_name = document.getElementById('name').value;
       var u_address = document.getElementById('address').value;

       if (u_name == null)
       {
           document.getElementById('error1').innerHTML = "Please Provide Valid Name";
       }
       if (u_address == null)
       {
           document.getElementById('error2').innerHTML = "Please Provide Valid Address"
       }
    }
</script>



</body>
</html>
