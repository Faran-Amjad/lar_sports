<?php
session_start();
//use App\User;
//session_destroy();
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <title>TheSportsStore.pk</title>


  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<style>

#login
{
    position: absolute;
    top:0px;
    left:1020px;
}
#logout
{
    position: absolute;
    top:50px;
    left:1020px;
}
#reg
{
    position: absolute;
    top:0px;
    left:1080px;
}
#car
{
    display: 'block'; 

}
#signup
{
    display: none;
}
#signin
{
    display: none;
}
#ediv
{
    position: absolute;
    top:243px;
    left:673px;

}
#pdiv
{
    position: absolute;
    top:311px;
    left:673px;

}
#slogin
{
    position: absolute;
    top:441px;
    left:672px;
}
.pbtn
 {
        cursor: pointer;
        font-size: 16px;    
        border: none;
        outline: none;
        color: black;
        padding: 0px 0px;
        background-color: #fff;
        font-family: inherit;
 }
 #a1
 {
        position: absolute;
        top:0px;
        left:947px;
 }
 #a2
 {
        position: absolute;
        top:8px;
        left:980px;
 }
 #sports
 {
    display: block ;
 }
 #boxing
 {
    
    display: none;
 }
 #cricket
 {
    display: none;
 }
 #athletics
 {
    display: none;
 }
 #swimming
 {
    display: none;
 }
 #box_clothing
 {
    display: none;
 }
 #box_accessories
 {
    display: none;
 }
 #box_gloves
 {
    display: none;
 }
 #box_trainers
 {
    display: none;
 }
 #box_sets
 {
    display: none;
 }
 #box_mmagloves
{
    display: none;
}
#box_protect
{
    display: none;
}
#cart
{
  position: absolute;
  top:76px;
  left:1210px;
}
#cricket
{
  display: none;
}
#cric_equipments
{
    display: none;
}
#cric_accessories
{
  display: none;
}
#cric_bags
{
  display: none;
}
#cric_balls
{
  display: none;
}
#cric_bowling_machines
{
  display: none;
}
#cric_bats
{
  display: none;
}
#cric_clothings
{
  display: none;
}
#cric_footwear
{
  display: none;
}
#cric_Memorabilia
{
  display: none;
}
#cric_Karachi_Kings_Merchandise
{
  display: none;
}
#cric_Wicket_Keeping_Equipment
{
  display: none;
}
#cric_Wicket_Set
{
  display: none;
}
#login
{
  position: absolute;
  top:0px;
  left:1020px;
}


#logout
{
    position: absolute;
    top:23px;
    left:1040px;
}
#cart
{
  position: absolute;
  top:76px;
  left:1210px;
}
#cricket
{
  display: none;
}
#cric_equipments
{
    display: none;
}
#cric_accessories
{
  display: none;
}
#cric_bags
{
  display: none;
}
#cric_balls
{
  display: none;
}
#cric_bowling_machines
{
  display: none;
}
#cric_bats
{
  display: none;
}
#cric_clothings
{
  display: none;
}
#cric_footwear
{
  display: none;
}
#cric_Memorabilia
{
  display: none;
}
#cric_Karachi_Kings_Merchandise
{
  display: none;
}
#cric_Wicket_Keeping_Equipment
{
  display: none;
}
#cric_Wicket_Set
{
  display: none;
}
#ath_Activity_Trackers
{
  display: none;
}
#ath_Running_Footwears
{
  display: none;
}
#ath_Training_Footwear
{
  display: none;
}
#ath_Walking_Footwear
{
  display: none;
}
#swim_b_swimwear
{
  display: none;
}
</style>


<body>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <div id="container">
    <div id="top">
      <img src="top2.png" width="100%">
    </div>

    <div id="cart">
      <a href="{{route('orders')}}">
        <img src="cart.png">
      </a>
    </div>
    <div id="car">
      <div  style="width:100%" id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="carousel/car_1.png" >
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="carousel/car_2.png" >
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="carousel/car_3.png"  @>
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="carousel/car_4.png" >
          </div>

          <div class="carousel-item ">
            <img class="d-block w-100" src="carousel/car_5.png"  @>
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="carousel/car_6.png"  @>
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="carousel/car_7.png"  @>
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="carousel/car_8.png"  @>
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="carousel/car_9.png"  @>
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="carousel/car_10.png"  @>
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="carousel/car_11.png"  @>
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="carousel/car_12.png"  @>
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="carousel/car_13.png"  @>
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="carousel/car_14.png"  @>
          </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div id="signin">
      <img src="signin.png">
      <form action="{{route('ulogin')}}" method="post" enctype="multipart/form-data" class="form-horizontal">  
        {{csrf_field()}}
        <div id="ediv">
          <input type="email" name="semail" size="78" placeholder="E-Mail Address">
        </div>
        <div id="pdiv">
          <input type="password" name="spass" size="78" placeholder="Password">
        </div>
        <div id="slogin">
          <!--<a href="main_reg.php?edit"> <img src="login2.png"></a>-->
          <button class="pbtn" name="s_submit"><img src="login2.png"></button>
        </div>
      </form>
      <hr style="border: 2px solid red;" />
    </div>



    <div id="signup">



      <h1>Register Account</h1><br><br>

      <h2 >Your Personal details</h2>
      <form action="{{route('user_store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">

        {{csrf_field()}}
        <label>First Name</label>
        <input type="text" name="firstname" value placeholder="First Name" id="input-firstname" class="form-control">
        <label>Last Name</label>
        <input type="text" name="lastname" value placeholder="Last Name" id="input-lastname" class="form-control">
        <label>Email</label>
        <input type="email" name="email" value placeholder="E-Mail" id="input-email" class="form-control">
        <label>Mobile Number</label>
        <input type="tel" name="telephone" value placeholder="Mobile Number" id="input-telephone" class="form-control">

        <br>
        <h2 >Your Address</h2>
        <label>Address</label>
        <input type="text" name="address" value placeholder="Address" id="input-address" class="form-control">
        <label>City</label>
        <select name="zone_id" id="input-zone" class="form-control">
          <option value="Lahore">Lahore</option>
          <option value="karachi">Karachi</option>
          <option value="islamabad">Islamabad</option>
        </select>
        <label>Country</label>
        <select name="country_id" id="input-country" class="form-control">
          <option value="Pakistan">Pakistan</option>
          <option value="Australia">Australia</option>
          <option value="Canada">Canada</option>
          <option value="Iran">Iran</option>
        </select>
        <br>

        <h2>Your Password</h2>
        <label>Password</label>
        <input type="password" name="password" value placeholder="Password" id="input-password" class="form-control">
        <label>Password Confirm</label>
        <input type="password" name="confirm" value placeholder="Password Confirm" id="input-confirm" class="form-control">
        <br>

        <h2>Newsletter</h2>
        <label>Subscribe</label>
        <br>
        <label class="radio-inline">
          <input type="radio" name="newsletter" value="1">
        Yes</label>
        <br>
        <label class="radio-inline">
          <input type="radio" name="newsletter" value="0" checked="checked">
        No</label>
        <br><br>

        <div class="pull-right">I have read and agree to the <a href="JavaScript:void(0);" class="agree"><b>Terms &amp; Conditions</b></a>                        
          <input type="checkbox" name="agree" value="1">
          &nbsp;
          <input type="submit" name="submit2" value="Continue" class="btn btn-primary button">
        </div>
        <hr style="border: 2px solid red;" />
      </div>

      <!--<input type="button" id="btn" class="btncss" value="filter" />-->
      <div id="login">
        <a href="JavaScript:void(0);" onclick="toggle_visibility('car','signin');" > <img src="login.png"></a>
          
      </div>
      <div id="logout">
        <a href="{{route('logout')}}"  > <img src="logout.png"></a>
      </div>
      <div id="reg">

        <a href="JavaScript:void(0);" onclick="toggle_visibility('car','signup');"> <img src="register.png"></a>

      </div>
      <div id="admin">
        <div id="a1">
          <a href="{{route('admin2')}}" ><img src="admin1.png"> </a>
        </div>

        <div id="a2">
          <a href="{{route('admin2')}}"><img src="admin2.png"></a>
        </div>
      </div>

      <br>
      <div id="sports" align="center">
        <a href="JavaScript:void(0);" onclick="toggle_visibility('sports','boxing');"><img src="sports/boxing.png"></a>
        <a href="JavaScript:void(0);" onclick="toggle_visibility('sports','cricket');"><img src="sports/cricket.png"></a>
        <a href="JavaScript:void(0);" onclick="toggle_visibility('sports','athletics');"><img src="sports/athletics.png"></a>
        <a href="JavaScript:void(0);" onclick="toggle_visibility('sports','swimming');"><img src="sports/swimming.png"></a>
        <hr style="border: 2px solid red;" />
      </div>

      <div id="boxing">
       <table align="center">   
        <tr >
          <td><a href="{{route('b_cloth_add')}}" onclick="toggle_visibility('boxing','box_clothing');"><img src="boxing/Clothing.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('boxing','box_accessories');"><img src="boxing/Accessories.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('boxing','box_gloves');"><img src="boxing/Gloves.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('boxing','box_trainers');"><img src="boxing/Trainers.png"></a></td>
        </tr>
        <tr align="center">
          <td>Clothing</td><td>Accessories</td><td>Gloves</td><td>Trainers</td>
        </tr>

        <tr align="center">

          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('boxing','box_sets');"><img src="boxing/Boxing sets.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('boxing','box_mmagloves');"><img src="boxing/MMA Gloves.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('boxing','box_protect');"><img src="boxing/Protective Equipment.png"></a></td>
        </tr>
        <tr align="center">
          <td>Boxing sets</td><td>MMA Gloves</td><td>Protective Equipment</td>
        </tr>
      </table>
      <hr style="border: 2px solid red;" />
    </div>

    <div id="box_clothing">
      box_clothing
      <?php display_box_clothes();?>
      <hr style="border: 2px solid red;" />
    </div>
    <div id="box_accessories">
      box_accessories
      <hr style="border: 2px solid red;" />
    </div>
    <div id="box_gloves">
      box_gloves
      <hr style="border: 2px solid red;" />
    </div>
    <div id="box_trainers">
      box_trainers
      <hr style="border: 2px solid red;" />
    </div>
    <div id="box_sets">
      box_sets
      <hr style="border: 2px solid red;" />
    </div>
    <div id="box_mmagloves">
      box_mmagloves
      <hr style="border: 2px solid red;" />
    </div>
    <div id="box_protect">
      box_protect
      <hr style="border: 2px solid red;" />
    </div>

    <div id="cricket">
      cricket
      <table align="center">   
        <tr >
          <td><a href="{{route('c_bat_quip_add')}}" onclick="toggle_visibility('cricket','cric_equipments');"><img src="cricket/Batting Equipment.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('cricket','cric_accessories');"><img src="cricket/Cricket Accessories.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('cricket','cric_bags');"><img src="cricket/Cricket Bags.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('cricket','cric_balls');"><img src="cricket/Cricket Balls.png"></a></td>
        </tr>
        <tr align="center">
          <td>Batting Equipment</td><td>Cricket Accessories</td><td>Cricket Bags</td><td>Cricket Balls</td>
        </tr>

        <tr align="center">

          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('cricket','cric_bowling_machines');"><img src="cricket/Cricket Bowling Machines.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('cricket','cric_bats');"><img src="cricket/Cricket Bats.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('cricket','cric_clothings');"><img src="cricket/Cricket Clothing.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('cricket','cric_footwear');"><img src="cricket/Cricket Footwear.png"></a></td>
        </tr>
        <tr align="center">
          <td>Cricket Bowling Machines</td><td>Cricket Bats</td><td>Cricket Clothing</td><td>Cricket Footwear</td>
        </tr>

          <tr align="center">

          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('cricket','cric_Memorabilia');"><img src="cricket/Cricket Memorabilia.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('cricket','cric_Karachi_Kings_Merchandise');"><img src="cricket/Karachi Kings Merchandise.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('cricket','cric_Wicket_Keeping_Equipment');"><img src="cricket/Wicket Keeping Equipment.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('cricket','cric_Wicket_Set');"><img src="cricket/Wicket Set.png"></a></td>
        </tr>
        <tr align="center">
          <td>Cricket Memorabilia</td><td>Karachi Kings Merchandise</td><td>Wicket Keeping Equipment</td><td>Wicket Set</td>
        </tr>

      </table>
      <hr style="border: 2px solid red;" />
    </div>

      <div id="cric_equipments">
      batting Equipments
      <?php //display_box_clothes();
      display_cric__b_equipments();
      ?>
      <hr style="border: 2px solid red;" />
    </div>
    <div id="cric_accessories">
      cric_accessories
      <?php
      display_cric_accessories();
      ?>
      <hr style="border: 2px solid red;" />
    </div>
    <div id="cric_bags">
      cric_bags
      <hr style="border: 2px solid red;" />
    </div>
    <div id="cric_balls">
      cric_balls
      <hr style="border: 2px solid red;" />
    </div>
    <div id="cric_bowling_machines">
      bowling machines
      <hr style="border: 2px solid red;" />
    </div>
    <div id="cric_bats">
      cric_bats
      <hr style="border: 2px solid red;" />
    </div>
    <div id="cric_clothings">
      cric_clothings
      <hr style="border: 2px solid red;" />
    </div>
    <div id="cric_footwear">
      cric_footwear
      <hr style="border: 2px solid red;" />
    </div>
      <div id="cric_Memorabilia">
        cric_Memorabilia
        <hr style="border: 2px solid red;" />
    </div>
    <div id="cric_Karachi_Kings_Merchandise">
      merchandise
      <hr style="border: 2px solid red;" />
    </div>
    <div id="cric_Wicket_Keeping_Equipment">
      keeping
      <hr style="border: 2px solid red;" />
    </div>
    <div id="cric_Wicket_Set">
      cric_Wicket Set
     <?php display_cric_wickets(); ?>
      <hr style="border: 2px solid red;" />
    </div>


    <div id="athletics">
      athletics
        <table align="center">
      <tr >
          <td><a href="{{route('a_trackers_add')}}" onclick="toggle_visibility('athletics','ath_Activity_Trackers');"><img src="athletics/Activity Trackers.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('athletics','ath_Running_Footwears');"><img src="athletics/Running Footwear.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('athletics','ath_Training_Footwear');"><img src="athletics/Training Footwear.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('athletics','ath_Walking_Footwear');"><img src="athletics/Walking Footwear.png"></a></td>
        </tr>
        <tr align="center">
          <td>Activity Trackers</td><td>Running Footwears</td><td>Training Footwear</td><td>Walking Footwear</td>
        </tr>
          </table>
      <hr style="border: 2px solid red;" />
    </div>

 <div id="ath_Activity_Trackers">
        ath_Activity_Trackers
        <?php display_ath_trackers();?>
        <hr style="border: 2px solid red;" />
    </div>
    <div id="ath_Running_Footwears">
      ath_Running_Footwears
      <hr style="border: 2px solid red;" />
    </div>
    <div id="ath_Training_Footwear">
      ath_Training_Footwear
      <hr style="border: 2px solid red;" />
    </div>
    <div id="ath_Walking_Footwear">
      ath_Walking_Footwear
     <?php //display_cric_wickets(); ?>
      <hr style="border: 2px solid red;" />
    </div>



    <div id="swimming">
      swimming
      <table align="center">
      <tr >
          <td><a href="{{route('s_boys_swimwear_add')}}" onclick="toggle_visibility('swimming','swim_b_swimwear');"><img src="swimming/Boy's Swimwear.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('swimming','cric_accessories');"><img src="swimming/Men's Swimwear.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('swimming','cric_bags');"><img src="swimming/Girl's Swimwear.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('swimming','cric_balls');"><img src="swimming/Women's Swimwear.png"></a></td>
        </tr>
        <tr align="center">
          <td>Boy's Swimwear</td><td>Men's Swimwear</td><td>Girl's Swimwear</td><td>Women's Swimwear</td>
        </tr>

        <tr >
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('swimming','cric_equipments');"><img src="swimming/Swimming Accessories.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('swimming','cric_accessories');"><img src="swimming/Swimming Caps.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('swimming','cric_bags');"><img src="swimming/Swimming Goggles.png"></a></td>
          <td><a href="JavaScript:void(0);" onclick="toggle_visibility('swimming','cric_balls');"><img src="swimming/Training Aids.png"></a></td>
        </tr>
        <tr align="center">
          <td>Swimming Accessories</td><td>Swimming Caps</td><td>Swimming Goggles</td><td>Training Aids</td>
        </tr>
          </table>
      <hr style="border: 2px solid red;" />
    </div>

<div id="swim_b_swimwear">
  <?php display_swim_b_swimwear(); ?>
  <hr style="border: 2px solid red;" />
</div>

    <br>

    <div id="images">
      <!--<hr style="border: 2px solid red;" />-->
      <?php  displayimage(); ?>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">

     /*function show_box(id,id2)
     {
        var e = document.getElementById(id);
            e.style.display = 'block';
        if(e.style.display == 'block')
          e.style.display = 'none';
      else
          e.style.display = 'block';


      var f= document.getElementById(id2);
      //f.style.display = 'none';
      if(f.style.display == 'block')
          f.style.display = 'none';
      else
          f.style.display = 'block';
      }  */ 

      function toggle_visibility(id,id2) {

        console.log("abc");
        var e = document.getElementById(id);
        e.style.display = 'block';
        if(e.style.display == 'block')
          e.style.display = 'none';
        else
          e.style.display = 'block';


        var f= document.getElementById(id2);
      //f.style.display = 'none';
      if(f.style.display == 'block')
        f.style.display = 'none';
      else
        f.style.display = 'block';

     /*<!-- var g=document.getElementById(id3);
      if(g.style.display == 'block')
          g.style.display = 'none';
      else
        g.style.display = 'block';-->*/


    }
    <?php
    function s_destroy()
    {
      //session_destroy();
      //unset($_SESSION['userid']);
    }

    function displayimage()
    {

      $mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
        //mysql_select_db("testing",$con);
      $qry="select * from images";
      $result=mysqli_query($mysqli,$qry);
      $c=0;
      echo'<table align="center"><tr>';

        //echo $c;

      while ($row= mysqli_fetch_array($result))
      {
        echo'<td>'; echo '<img height="200" width="200" src="data:image;base64,'.$row[3].'" >'; echo'</td>';
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

    function display_box_clothes()
    {

      $mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
        //mysql_select_db("testing",$con);
      $qry="select * from box_cloths";
      $result=mysqli_query($mysqli,$qry);
      $c=0;
      echo'<table align="center"><tr>';

        //echo $c;
      
      while ($row= mysqli_fetch_array($result))
      {
            //echo '<a href="sports.php" >';
        echo'<th>';?> <a href="main_reg.php?b_c_detail=<?php echo $row[0];?>" ><?php echo '<img height="200" width="200" src="data:image;base64,'.$row[1].'" >';?></a> 
          <?php 
          echo'</th>';
            //echo '</a>';
          echo '<th>'.$row[2].'</th>';
            //echo '<br>';
          echo '<td>'.$row[3].'</td>';

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

      function display_cric_wickets()
    {

      $mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
        //mysql_select_db("testing",$con);
      $qry="select * from cric_wicket_set";
      $result=mysqli_query($mysqli,$qry);
      $c=0;
      echo'<table align="center"><tr>';

        //echo $c;

      while ($row= mysqli_fetch_array($result))
      {
            //echo '<a href="sports.php" >';
        echo'<th>';?> <a href="main_reg.php?c_w_detail=<?php echo $row[0];?>" ><?php echo '<img height="200" width="200" src="data:image;base64,'.$row[1].'" >';?></a> 
          <?php 
          echo'</th>';
            //echo '</a>';
          echo '<th>'.$row[2].'</th>';
            //echo '<br>';
          echo '<td>'.$row[3].'</td>';

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
      function display_cric__b_equipments()
    {

      $mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
        //mysql_select_db("testing",$con);
      $qry="select * from c_batting_equipments";
      $result=mysqli_query($mysqli,$qry);
      $c=0;
      echo'<table align="center"><tr>';

        //echo $c;

      while ($row= mysqli_fetch_array($result))
      {
            //echo '<a href="sports.php" >';
        echo'<th>';?> <a href="main_reg.php?c_e_detail=<?php echo $row[0];?>" ><?php echo '<img height="200" width="200" src="data:image;base64,'.$row[1].'" >';?></a> 
          <?php 
          echo'</th>';
            //echo '</a>';
          echo '<th>'.$row[2].'</th>';
            //echo '<br>';
          echo '<td>'.$row[3].'</td>';

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
      function display_cric_accessories()
    {

      $mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
        //mysql_select_db("testing",$con);
      $qry="select * from cric_accessories";
      $result=mysqli_query($mysqli,$qry);
      $c=0;
      echo'<table align="center"><tr>';

        //echo $c;

      while ($row= mysqli_fetch_array($result))
      {
            //echo '<a href="sports.php" >';
        echo'<th>';?> <a href="main_reg.php?c_a_detail=<?php echo $row[0];?>" ><?php echo '<img height="200" width="200" src="data:image;base64,'.$row[1].'" >';?></a> 
          <?php 
          echo'</th>';
            //echo '</a>';
          echo '<th>'.$row[2].'</th>';
            //echo '<br>';
          echo '<td>'.$row[3].'</td>';

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

      function display_ath_trackers()
    {

      $mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
        //mysql_select_db("testing",$con);
      $qry="select * from ath_trackers";
      $result=mysqli_query($mysqli,$qry);
      $c=0;
      echo'<table align="center"><tr>';

        //echo $c;

      while ($row= mysqli_fetch_array($result))
      {
            //echo '<a href="sports.php" >';
        echo'<th>';?> <a href="main_reg.php?a_t_detail=<?php echo $row[0];?>" ><?php echo '<img height="200" width="200" src="data:image;base64,'.$row[1].'" >';?></a> 
          <?php 
          echo'</th>';
            //echo '</a>';
          echo '<th>'.$row[2].'</th>';
            //echo '<br>';
          echo '<td>'.$row[3].'</td>';

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

       function display_swim_b_swimwear()
    {

      $mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
        //mysql_select_db("testing",$con);
      $qry="select * from s_boys_swimwears";
      $result=mysqli_query($mysqli,$qry);
      $c=0;
      echo'<table align="center"><tr>';

        //echo $c;

      while ($row= mysqli_fetch_array($result))
      {
            //echo '<a href="sports.php" >';
        echo'<th>';?> <a href="main_reg.php?s_b_s_detail=<?php echo $row[0];?>" ><?php echo '<img height="200" width="200" src="data:image;base64,'.$row[1].'" >';?></a> 
          <?php 
          echo'</th>';
            //echo '</a>';
          echo '<th>'.$row[2].'</th>';
            //echo '<br>';
          echo '<td>'.$row[3].'</td>';

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
    </script>
    </html>
