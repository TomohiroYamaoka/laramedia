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
       <div class="card-text">
              <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="md-form">
                  <label for="email">メールアドレス</label>
                  <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}">
                </div>

                <div class="md-form">
                  <label for="password">パスワード</label>
                  <input class="form-control" type="password" id="password" name="password" required>
                </div>

                <input type="hidden" name="remember" id="remember" value="on">

                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ログイン</button>

              </form>
              </div>
           <a href="#">Lost your password?</a><br>
           <a href="{{ route('register') }}">Don't have an account?</a>
             
</body>
</head>
</html>
