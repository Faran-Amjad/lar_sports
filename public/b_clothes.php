<?php 
session_start();
$_SESSION['b_clothes']="true";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<style>
#increase
{
  position: absolute;
  top:70px;
  left:110px;
}
#decrease
{
  position: absolute;
  top:70px;
  left:10px;
}
#number
{
  position: absolute;
  top:70px;
  left:25px;
}
.box-content
{
  position: absolute;
  top:150px;
}
#s
{
  position: absolute;
  top:300px;
  left:5px;
}
#size
{
  position: absolute;
  top:105px;
}
#contain
{
  position: absolute;
  left:550px;
}
#si
{
  position: absolute;
  top:150px;
}
.image
{
  position: absolute;
  top:600px;
  left:200px;
}
#header
{
  position: relative;
  left:0px;
  top:0px;
}
#line
{
  position: absolute;
  top:900px;
  left:0px;
  width:1400px;
}
#footer
{
  position: relative;
  top:400px;
}
</style>
<body>
<div id="header">
<?php require'header.php';?>
</div>
<!--<a href="javascript:void(0);" class="journal-stepper">-</a>
<input type="text" name="quantity" value="1" size="2" data-min-value="1" id="input-quantity" class="form-control">
<a href="javascript:void(0);" class="journal-stepper">+</a>-->
<div id="contain">
<h3>please enter quantity</h3>
<form method="post" action="main_reg.php">
  <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"><h4>-</h4></div>
  <input type="number" id="number" name="num" value="1" style="width: 80px; text-align:center; " />
  <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"><h4>+</h4></div>

  <?php
   $rand=rand();
   $_SESSION['rand']=$rand;
  ?>
 <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
 
<div id="size"><h3>Please Select Size</h3></div>
<!--<div class="box-content">
        <ul class="">
                                    <li><label><input data-keyword="size-small" type="checkbox" name="option1" value="small"><span class="sf-name">Small</span> </label></li>
                                                <li><label><input data-keyword="size-medium" type="checkbox" name="option" value="medium"><span class="sf-name">Medium</span> </label></li>
                                                <li><label><input data-keyword="size-large" type="checkbox" name="option" value="large"><span class="sf-name">Large</span> </label></li>
                                                <li><label><input data-keyword="size-x-large" type="checkbox" name="option" value="X-large"><span class="sf-name">X-Large</span> </label></li>
                                </ul>-->
<div id="si">
    <label>Size</label>
        <select name="size" id="input-size" class="form-control">
          <option value="n/a">Not Avalible</option>
          <option value="small">Small</option>
          <option value="medium">Medium</option>
          <option value="large">Large</option>
          <option value="x-large">X-Large</option>
        </select>
      </div>
    

  <div id="s"><input type="submit" value="submit" name="s_order"></div>
</form>

</div>



<div class="image">
  <?php
      //session_start();
      echo '<img height="200" width="200" src="data:image;base64,'.$_SESSION['image'].'" >';
  ?>
  
</div>

<div id="line">
  <!--<hr style="border: 2px solid red;" />-->
</div>

<div id="footer">
  <?php require'footer.php';?>
</div>


</body>
</html>
<script>
	function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}
	</script>