<!doctype html>
<html lang="en">
<head>
<title>form</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
     <link href="bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link>

  </head>
<style>
#b
{
    position:absolute;
    width:300px;
    left:450px;
}
#u
{

    background-color:#4e4e4e;
    color:white;
}
#p
{
    
    background-color:#4e4e4e;
color:white;
}
body
{

    background-color:#4e4e4e;
}

</style>


<body  class="text-center">
<div id="b">
    
    

   
    <a href="{{route('asignin')}}" name="a_signin"  class="btn btn-lg btn-primary btn-block">Sign In</a>
    <a href="{{route('asignup')}}" name="a_signup"  class="btn btn-lg btn-primary btn-block">Sign Up</a>
    <a href="show-all" name="see_users"  class="btn btn-lg btn-primary btn-block">See Admins</a>
    </div>
  </body>
</html>