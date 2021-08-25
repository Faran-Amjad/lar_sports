<?php
$mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
session_start();
if (isset($_POST['submit2']))
{
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$email=$_POST['email'];
	$tel=$_POST['telephone'];
	$add=$_POST['address'];
	$city=$_POST['zone_id'];
	$country=$_POST['country_id'];
	$pass=$_POST['password'];
	$cpass=$_POST['confirm'];
	$news=$_POST['newsletter'];
	$tc=$_POST['agree'];
	//echo $news.'<br>'.$tc;


	if($pass==$cpass && $tc=='1')
	{
		$res=$mysqli->query("INSERT INTO sports (firstname,lastname,email,telephone,address,city,country,password,newsletter,agreement) VALUES ('$fname','$lname','$email','$tel','$add','$city','$country','$pass','$news','$tc')") or die($mysqli->error());
		if($res)
			echo "Record saved";
		sleep(5);
		header('location:main.php');

	}
	else 
		echo 'Your Passwors is not same or you might forget to check Term & Conditions';
}

if (isset($_POST['s_submit']))
{
	//echo "hello";
	$email=$_POST['semail'];
	$pass=$_POST['spass'];
	//echo $email.$pass;
	//$con =mysqli_connect("localhost","root","","crud");
	//$query=mysqli_query($con,'select * from sports where fullname="'.$username.'" and rollno="'.$password.'"');
	//$query=mysqli_query($con,'select * from sports where email="'.$email.'" AND password="'.$pass.'"');

	$res=$mysqli->query("SELECT * FROM sports WHERE  email='$email' AND password='$pass'") or die($mysqli->error());
	/*if (count($res)==1)
	{
		echo "hello";
	}*/
	//echo $res;
	if((mysqli_num_rows($res))>=1)
	{	//echo "signed in successfully";
		$row= $res->fetch_assoc();
		$_SESSION['userid']=$row['id'];
		header('location:main.php');
	 }
	else 
	{	echo "not signed in";		}

}

if (isset($_POST['a_signin']))
{
	$un=$_POST['username'];
	$pass=$_POST['pass'];

	//echo $un.$pass;
$res=$mysqli->query("SELECT * FROM admin WHERE  username='$un' AND password='$pass'") or die($mysqli->error());


if((mysqli_num_rows($res))>=1)
	{	echo "signed in successfully";
		header('location:asign.php');
	 }
	else 
	{	
		//sleep(5);
		echo "not signed in";
		sleep(5);
		header('location:admin.php');
	}

}


if (isset($_POST['a_signup']))
{
		$un=$_POST['username'];
	$pass=$_POST['pass'];

	//echo $un.$pass;
$res=$mysqli->query("INSERT into admin(username,password) VALUES ('$un','$pass')") or die($mysqli->error());

echo "Record has been added" .'<br>'. 'click here to '.'<a href="asign.php">sign in</a>';

}

if(isset($_GET['edit']))
{
	$id=$_GET['edit'];
	$_SESSION['edit_id']=$id;
	//$update=true;
	//echo $id;
	$result=$mysqli->query("SELECT * FROM sports WHERE id=$id") or die($mysqli->error());
	if (count($result)==1)
	{
		//$row= $result->fetch_array();
		//$name=$row['name'];
		//$location=$row['location'];

			header('location:edit.php');
	}
}

if (isset($_GET['delete'])){
	$id=$_GET['delete'];
	$mysqli->query("DELETE FROM sports WHERE id=$id") or die($mysqli->error());
	


	//$_SESSION['message']= "Record has been deleted!";
	//$_SESSION['msg_type']= "danger";
	header('location:users.php');
}


if(isset($_POST['update']))
{
	/*$id=$_POST['id'];
	$name=$_POST['name'];
	$location=$_POST['location'];

	$mysqli->query("UPDATE data SET  name='$name' , location='$location' WHERE id=$id") or die($mysqli->error());

	$_SESSION['message']= "Record has been updated!";
	$_SESSION['msg_type']= "warning";
	header('location:crud.php');*/
	$id=$_SESSION['edit_id'];
	$fn=$_POST['firstname'];
	$ln=$_POST['lastname'];
	$em=$_POST['email'];
	$tel=$_POST['telephone'];
	$add=$_POST['address'];
	$city=$_POST['zone_id'];
	$country=$_POST['country_id'];
	$pass=$_POST['password'];
	$news=$_POST['news'];
		//echo $pass;
	$mysqli->query("UPDATE sports SET  firstname='$fn' ,lastname='$ln',email='$em',telephone='$tel',address='$add',city='$city',country='$country',password='$pass',newsletter='$news' WHERE id=$id") or die($mysqli->error());

   header('location:users.php');
}

 if (isset($_GET['pdelete'])){
	$id=$_GET['pdelete'];
	$mysqli->query("DELETE  FROM images WHERE id=$id") or die($mysqli->error());
	

	echo $id;
	//$_SESSION['message']= "Record has been deleted!";
	//$_SESSION['msg_type']= "danger";
	header('location:photos.php');
}


if (isset($_GET['b_c_delete'])){
	$id=$_GET['b_c_delete'];
	$mysqli->query("DELETE  FROM box_clothes WHERE id=$id") or die($mysqli->error());
	

	
	//$_SESSION['message']= "Record has been deleted!";
	//$_SESSION['msg_type']= "danger";
	header('location:box_clothes.php');
	//echo $id;
}







if (isset($_GET['b_c_detail'])){
	if (isset($_SESSION['userid']))
{
	$id=$_GET['b_c_detail'];
	$res=$mysqli->query("SELECT  * FROM box_clothes WHERE id=$id") or die(mysqli_error($mysqli));
	$row=$res->fetch_assoc();

	$_SESSION['name']=$row['name'];
	$_SESSION['price']=$row['price'];
		$_SESSION['image']=$row['image'];
	//echo $_SESSION['name'];
	//$_SESSION['message']= "Record has been deleted!";
	//$_SESSION['msg_type']= "danger";
	header('location:b_clothes.php');
	//echo $id;
	}
else
{
	echo "Please sign in to buy products".'<br>';
	echo '<a href="main.php">click here to goto home</a>';
}
}



if (isset($_GET['c_w_detail'])){
	if (isset($_SESSION['userid']))
{
	$id=$_GET['c_w_detail'];
	$res=$mysqli->query("SELECT  * FROM cric_wicket_set WHERE id=$id") or die(mysqli_error($mysqli));
	$row=$res->fetch_assoc();

	$_SESSION['name']=$row['name'];
	$_SESSION['price']=$row['price'];
	$_SESSION['image']=$row['image'];
	//echo $_SESSION['name'];
	//$_SESSION['message']= "Record has been deleted!";
	//$_SESSION['msg_type']= "danger";
	header('location:b_clothes.php');
	//echo $_SESSION['image'];
	//echo '<img height="200" width="200" src="data:image;base64,'.$_SESSION['image'].'" >';
	}
else
{
	echo "Please sign in to buy products".'<br>';
	echo '<a href="main.php">click here to goto home</a>';
}
}



if (isset($_GET['c_e_detail'])){
	if (isset($_SESSION['userid']))
{
	$id=$_GET['c_e_detail'];
	$res=$mysqli->query("SELECT  * FROM cric_b_equip WHERE id=$id") or die(mysqli_error($mysqli));
	$row=$res->fetch_assoc();

	$_SESSION['name']=$row['name'];
	$_SESSION['price']=$row['price'];
		$_SESSION['image']=$row['image'];
	//echo $_SESSION['name'];
	//$_SESSION['message']= "Record has been deleted!";
	//$_SESSION['msg_type']= "danger";
	header('location:b_clothes.php');
	//echo $id;
	}
else
{
	echo "Please sign in to buy products".'<br>';
	echo '<a href="main.php">click here to goto home</a>';
}
}



if (isset($_GET['c_a_detail'])){
	if (isset($_SESSION['userid']))
{
	$id=$_GET['c_a_detail'];
	$res=$mysqli->query("SELECT  * FROM cric_accessories WHERE id=$id") or die(mysqli_error($mysqli));
	$row=$res->fetch_assoc();

	$_SESSION['name']=$row['name'];
	$_SESSION['price']=$row['price'];
		$_SESSION['image']=$row['image'];
	//echo $_SESSION['name'];
	//$_SESSION['message']= "Record has been deleted!";
	//$_SESSION['msg_type']= "danger";
	header('location:b_clothes.php');
	//echo $id;
	}
else
{
	echo "Please sign in to buy products".'<br>';
	echo '<a href="main.php">click here to goto home</a>';
}
}


if (isset($_GET['a_t_detail'])){
	if (isset($_SESSION['userid']))
{
	$id=$_GET['a_t_detail'];
	$res=$mysqli->query("SELECT  * FROM ath_trackers WHERE id=$id") or die(mysqli_error($mysqli));
	$row=$res->fetch_assoc();

	$_SESSION['name']=$row['name'];
	$_SESSION['price']=$row['price'];
		$_SESSION['image']=$row['image'];
	//echo $_SESSION['name'];
	//$_SESSION['message']= "Record has been deleted!";
	//$_SESSION['msg_type']= "danger";
	header('location:b_clothes.php');
	//echo $id;
	}
else
{
	echo "Please sign in to buy products".'<br>';
	echo '<a href="main.php">click here to goto home</a>';
}
}



if (isset($_GET['s_b_s_detail'])){
	if (isset($_SESSION['userid']))
{
	$id=$_GET['s_b_s_detail'];
	$res=$mysqli->query("SELECT  * FROM s_boy_swimwear WHERE id=$id") or die(mysqli_error($mysqli));
	$row=$res->fetch_assoc();

	$_SESSION['name']=$row['name'];
	$_SESSION['price']=$row['price'];
		$_SESSION['image']=$row['image'];
	//echo $_SESSION['name'];
	//$_SESSION['message']= "Record has been deleted!";
	//$_SESSION['msg_type']= "danger";
	header('location:b_clothes.php');
	//echo $id;
	}
else
{
	echo "Please sign in to buy products".'<br>';
	echo '<a href="main.php">click here to goto home</a>';
}
}


if (isset($_POST['s_order']) )
{
	if(isset($_SESSION['b_clothes']) && $_POST['randcheck']==$_SESSION['rand'])//$_SESSION['b_clothes']=="true")
{
	$qty=$_POST['num'];
	$size=$_POST['size'];
	//if($size=="n/a")
	//echo $size;
	
	//$pass=$_POST['pass'];
	if($size=="n/a")
	{if($qty>=1)
	{
	$id=$_SESSION['userid'];
	//echo $un.$pass;
	$name=$_SESSION['name'];
	$price=$_SESSION['price'];
	$res=$mysqli->query('INSERT INTO `crud`.`order` (`customer_id`, `quantity`, `price`, `product` ) VALUES ("'.$id.'", "'.$qty.'", "'.$price.'", "'.$name.'" )') or die(mysqli_error($mysqli)); //or die($mysqli->error());
	
if($res)
echo "Your order is placed successfully";
echo '<br>';
echo '<a href="cart.php">YOUR CART</a>';
//$_SESSION['b_clothes']="happy";
unset($_SESSION['b_clothes']);

}
else
{
echo "Insufficient quantity";
echo '<br>';
echo '<a href="cart.php">YOUR CART</a>';
//$_SESSION['b_clothes']="happy";
unset($_SESSION['b_clothes']);
} }
else
	{	//echo 'choose size';
		$qty=$_POST['num'];
		$size=$_POST['size'];
		$id=$_SESSION['userid'];
		$name=$_SESSION['name'];
	    $price=$_SESSION['price'];
	    if($qty>=1)
	{
	    $res=$mysqli->query('INSERT INTO `crud`.`order` (`customer_id`, `quantity`, `price`, `product`,`size` ) VALUES ("'.$id.'", "'.$qty.'", "'.$price.'", "'.$name.'", "'.$size.'"  )') or die(mysqli_error($mysqli));

	    if($res)
echo "Your order is placed successfully";
echo '<br>';
echo '<a href="cart.php">YOUR CART</a>';
//$_SESSION['b_clothes']="happy";
unset($_SESSION['b_clothes']);
}
else
{
echo "Insufficient quantity";
echo '<br>';
echo '<a href="cart.php">YOUR CART</a>';
unset($_SESSION['b_clothes']);
}
	}
	//$_SESSION['b_clothes']="happy";
	unset($_SESSION['b_clothes']);
}
else
	echo '<a href="cart.php">YOUR CART</a>';

	
}
?>