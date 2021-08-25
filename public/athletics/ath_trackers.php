<?php
ini_set('mysqli.connect_timeout',300);
ini_set('default_socket_timeout',300);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Activity Trackers</title>


    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


    <title>TheSportsStore.pk</title>

    </head>
<body>
    <form method="post"  enctype="multipart/form-data" >
    <br>
    <br>
    <input type="file" name="image"/>
    <br><br>
    <input type="number" name="price" placeholder="price" />
    <br><br>
    <input type="submit" name="sumit" value="Upload"/>
</form>

</body>
<?php 

if(isset($_POST['sumit']))
    {
        $p=$_POST['price'];

        if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
        {
            echo "please select an image.";
        }
        else
        {
            $image= addslashes($_FILES['image']['tmp_name']);
            $name= addslashes($_FILES['image']['name']);
            $image=file_get_contents($image);
            $image=base64_encode($image);
            saveimage($name,$image,$p);
        }
    }
displayimage();
function saveimage($name,$image,$price)
    {
        //$con=mysql_connect("localhost","root","");
        $mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
        //mysql_select_db("testing",$con);
        $qry="INSERT into ath_trackers(name,image,price) VALUES('$name','$image','$price')";
        $result=mysqli_query($mysqli,$qry) or die(mysqli_error($mysqli));
        if($result)
        {
            echo "<br/> Image Uploaded.";
        }
        else
        {
            echo "<br/> Image Not Uploaded.";
        }
    }

function displayimage()
    {
        
        $mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
        //mysql_select_db("testing",$con);
        $qry="select * from ath_trackers";
        $result=mysqli_query($mysqli,$qry);
        $c=0;
        echo'<table align="center"><tr>';
        //$row2=$result->fetch_assoc();
        //echo $c;
        
        while ($row= mysqli_fetch_array($result))
        {
            
            echo'<th>'; echo '<img height="200" width="200" src="data:image;base64,'.$row[1].'" >'; echo '</th>'; ?>
   <?php      echo '<td>'.str_replace(".PNG", '', $row[2]).'</td>'; 
                echo '<td>'.$row[3].'</td>';
   ?>
            <td> <a href="main_reg.php?a_t_delete=<?php echo $row[0];?>" class="btn btn-danger"> Delete </a></td>
             <!--var_dump($row[3]);-->

<?php 
            $c++;
            if($c==4 || $c==8)
            { 
                echo '</tr>'.'<tr>';
            } 
            else
            {

            }
        }
        
        echo'<tr>
        </table>';
    }

    

?>
</html>