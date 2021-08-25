<!doctype html>
<html lang="en">
  <head>
  	<title>Edit Info</title>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
session_start();
$mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
$id=$_SESSION['edit_id'];
$res=$mysqli->query("SELECT * FROM sports WHERE id=$id") or die($mysqli->error());
$row= $res->fetch_assoc();
//echo $row['firstname'];
?>
<body>
	<div id="signup">



            <h1>Edit Account</h1><br><br>

            <h2 >Your Personal details</h2>
        <form action="main_reg.php" method="post" enctype="multipart/form-data" class="form-horizontal">
            <label>First Name</label>
            <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" placeholder="First Name" id="input-firstname" class="form-control">
            <label>Last Name</label>
            <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" placeholder="Last Name" id="input-lastname" class="form-control">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="E-Mail" id="input-email" class="form-control">
            <label>Mobile Number</label>
            <input type="tel" name="telephone" value="<?php echo $row['telephone']; ?>" placeholder="Mobile Number" id="input-telephone" class="form-control">

                <br>
            <h2 >Your Address</h2>
                <label>Address</label>
                <input type="text" name="address" value="<?php echo $row['address']; ?>" placeholder="Address" id="input-address" class="form-control">
                <label>City</label>
                <!--<select name="zone_id" id="input-zone"  class="form-control">
                    <option value="Lahore">Lahore</option>
                    <option value="karachi">Karachi</option>
                    <option value="islamabad">Islamabad</option>
                </select>-->
                <input type="text" name="zone_id" value="<?php echo $row['city']; ?>" placeholder="City" id="input-zone" class="form-control">
                <label>Country</label>
                <!--<select name="country_id" id="input-country" class="form-control">
                    <option value="Pakistan">Pakistan</option>
                    <option value="Australia">Australia</option>
                    <option value="Canada">Canada</option>
                    <option value="Iran">Iran</option>
                </select>-->
                <input type="text" name="country_id" value="<?php echo $row['country']; ?>" placeholder="Country" id="input-country" class="form-control">
                <br>

                <h2>Your Password</h2>
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $row['password']; ?>" placeholder="Password" id="input-password" class="form-control">
                <!--<label>Password Confirm</label>
                <input type="password" name="confirm" value placeholder="Password Confirm" id="input-confirm" class="form-control">-->
                <br>

                <h2>Newsletter</h2>
                <!--<label>Subscribe</label>
                <br>
                <label class="radio-inline">
                <input type="radio" name="newsletter" value="1">
                Yes</label>
                <br>
                <label class="radio-inline">
                <input type="radio" name="newsletter" value="0" checked="checked">
                No</label>-->
                <input type="text" name="news" value="<?php echo $row['newsletter']; ?>" placeholder="Newsletter" id="input-newsletter" class="form-control">
                <br><br>

                <!--<div class="pull-right">I have read and agree to the <a href="JavaScript:void(0);" class="agree"><b>Terms &amp; Conditions</b></a>                        
                    <input type="checkbox" name="agree" value="1">
                        &nbsp;
            <input type="submit" name="submit2" value="Continue" class="btn btn-primary button">
          </div>--><button type="submit" class="btn btn-info" name="update">Update</button>
</div>
</body>
</html>