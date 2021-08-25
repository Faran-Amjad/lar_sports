<?php
session_start();
require_once'header.php';
$mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
$con =mysqli_connect("localhost","root","","crud");

//echo $_SESSION['b_clothes'];
if(isset($_SESSION['userid']))
{
$id= $_SESSION['userid'];
echo 'customer id = '.$id.'<br>';
$res=$mysqli->query("SELECT * FROM crud.`order` WHERE customer_id = '$id' ") or die (mysqli_error($mysqli));
//$query=mysqli_query($con,'select * from order where customer_id = "'.$id.'" ') or die (mysqli_error($con));

//if($res)

if((mysqli_num_rows($res))>=1)
{
	echo '<table align="center">';
	echo '<th></th><th>Item Name</th><th>Price</th><th>Quantity</th><th>Size</th>';
	$c=1;
	$t=0;
	while($row=$res->fetch_assoc())
	{
		echo '<tr>'.'<td>'.$c.'. '.'</td>'.'<td>'.str_replace(".PNG", "", $row['product']).'</td>'.'<td>'.$row['price'].'</td>'.'<td align="center">'.$row['quantity'].'</td>'.'<td>'.$row['size'].'</td>'.'</tr>';
		$c++;
		$t=$t+($row['price']*$row['quantity']);
	}
	//echo 'wait for car';
	echo '<tr><td></td><td></td><th>Total</th></tr>';
	
	echo '<tr><td></td><td></td><th>'.$t.'</th></tr>';
	echo '</table>';
	echo '<a href="main.php" >Click here to goto home</a>';
}
else
echo 'There is no order placed to your customer id'.'<br>'.'<a href="main.php" >Click here to goto home</a>';

}
else
echo 'you are not signed in';
require_once'footer.php';
?>