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
    <form method = "post" action = "{{route('store')}}" class="form-signin">
      <div id="img">
<img src="tss.png">
</div>
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>

      {{csrf_field()}}

      <input type="text" id="u" name="username"  placeholder="UserName" class="form-control "required />
      <label for="inputPassword"  class="sr-only">Password</label>
      <input type="password" id="p" name="pass"  placeholder="Password" class="form-control "required />
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <!--<button type="submit" name="a_signin" value="submit" class="btn btn-lg btn-primary btn-block">Sign In</button>-->
      <button  type="submit" name="a_signup" value="submit" class="btn btn-lg btn-primary btn-block">Sign Up</button>

      <!--<a class="signup" href="a_signup.php">SIGNUP</a>-->
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
    
    </div>
    
  </body>
</html>