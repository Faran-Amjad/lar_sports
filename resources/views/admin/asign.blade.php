
@extends('layouts.app2')

@section('content')
<!doctype html>
<html lang="en">
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

<title>Admin Page</title>
</head>

<body>

	<a href="photos.php"> Add User photos</a>
	<br>
    <a href="{{route('users_all')}}"> See Users</a>
    <br>
    <a href="{{url('/')}}">Logout</a>
    <br>
    <table align="center">
        <tr><th>ADD ITEMS</th></tr>
        <tr><th>Boxing</th><th>Cricket</th><th>Athletics</th><th>Swimming</th></tr>
        <tr>
            <td><a href="{{route('b_cloth_showall')}}">clothes</a></td>
            <td><a href="{{route('c_bat_quip_showall')}}">Batting Equipment</a></td>
            <td><a href="{{route('a_trackers_showall')}}">Activity Trackers</a></td>
            <td><a href="{{route('s_boys_swimwear_showall')}}">Boy's Swimwear</a></td>
            
        </tr>
        <tr>
            <td><a href="box_clothes.php">Accessories</a></td>
            <td><a href="cricket/cric_accessories.php">Cricket Accessories</a></td>
            <td><a href="box_clothes.php">Running Footwear</a></td>
            <td><a href="box_clothes.php">Men's Swimwear</a></td>
        </tr>
        <tr>
            <td><a href="box_clothes.php">Boxing Gloves</a></td>
            <td><a href="box_clothes.php">Cricket bags</a></td>
            <td><a href="box_clothes.php">Training Footwear</a></td>
            <td><a href="box_clothes.php">Girl's Swimwear</a></td>
        </tr>
        <tr>
            <td><a href="box_clothes.php">Trainers</a></td>
            <td><a href="box_clothes.php">Cricket balls</a></td>
            <td><a href="box_clothes.php">Walking Footwear</a></td>
            <td><a href="box_clothes.php">Women's Swimwear</a></td>
        </tr>
        <tr>
            <td><a href="box_clothes.php">Boxing Sets</a></td>
            <td><a href="box_clothes.php">Cricket Bowling Machines</a></td>
            <td></td>
            <td><a href="box_clothes.php">Swimming Accessories</a></td>
        </tr>
        <tr>
            <td><a href="box_clothes.php">MMA Gloves</a></td>
            <td><a href="box_clothes.php">Cricket Bats</a></td>
            <td></td>
            <td><a href="box_clothes.php">Swimming Caps</a></td>
        </tr>
        <tr>
            <td><a href="box_clothes.php">Protective Equipment</a></td>
            <td><a href="box_clothes.php">Cricket Clothing</a></td>
            <td></td>
            <td><a href="box_clothes.php">Swimming Googles</a></td>
        </tr>
        <tr>
            <td></td>
            <td><a href="box_clothes.php">Cricket Footwear</a></td>
            <td></td>
            <td><a href="box_clothes.php">Training Aids</a></td>
        </tr>
        <tr>
            <td></td>
            <td><a href="box_clothes.php">Cricket Memoribilia</a></td>
        </tr>
        <tr>
            <td></td>
            <td><a href="box_clothes.php">Karachi Kings Merchandise</a></td>
        </tr>
        <tr>
            <td></td>
            <td><a href="box_clothes.php">Wicket Keeping Equipment</a></td>
        </tr>
        <tr>
            <td></td>
            <td><a href="cricket/cric_wicket.php">Wicket Set</a></td>
        </tr>
    

    
    </table>
	

</body>
</html>
@endsection