<!DOCTYPE html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="css/styles2.css">
<body>
    

  <div class="loginbox">
    <!--avatarは現在なし-->
    <img src="avatar.png" class="avatar">    
       <h1>Login Form</h1>
       <!--post処理記事一覧のページに-->
        <form　method="POST" action="{{ route('login') }}">
           <p>Username</p>
           <input type="text" name="" placeholder="Enter Username">
           <p>Password</p>
           <input type="password" name="" placeholder="Enter Password">
           <input type="submit" name="" placeholder="Login">
           
           <a href="#">Lost your password?</a><br>
           <a href="{{ route('register') }}">Don't have an account?</a>
        </form>
  </div>       
</body>
</head>
</html>
