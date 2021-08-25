<!doctype html>
<html lang="en">
  <head>
  	<title>Users</title>


  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <style type="text/css">
  	#main
  	{
  		position: absolute;
  		left:10px;
  	}
  </style>

 <body>
 	<div id="main">
 		<?php 
          $mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
          
          $result= $mysqli->query("SELECT * FROM sports  ") or die($mysqli->error());
          ?>

          <div class="row justify-content-center">
            <table class="table">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Telephone</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>Country</th>
                  <th>News Letter</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>

              <?php
                  while($row = $result->fetch_assoc()):  ?>

                  <tr>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['telephone']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['country']; ?></td>
                    <td><?php echo $row['newsletter']; ?></td>
                    <td>
                    <a href="main_reg.php?edit=<?php  echo $row['id'];?>" class="btn btn-info"> Edit </a>
                    <a href="main_reg.php?delete=<?php echo $row['id'];?>" class="btn btn-danger"> Delete </a>
                    <!--<a href="process.php?signin=<?php echo $row['id'];?>" class="btn btn-info">Add/View Photo</a>-->
                    <?php //<button type="submit" class="btn btn-primary" name="signin">Sign In</button> ?>
                    </td>
                  </tr>;

              <?php 
                    endwhile; 
              ?>
            </table>
          </div>


 	</div>
 </body>
</html>