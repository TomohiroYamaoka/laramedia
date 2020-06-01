<!DOCTYPE html>
<head>
    <title>Create Form</title>
    <link rel="stylesheet" href="css/styles3.css">
<body>
    <div class="createbox">
    <!--avatarは現在なし-->
    <img src="avatar.png" class="avatar">    
       <h1>Create an account Form</h1>
       <!------入力されたデータをroute/registerに送信する--------------->
       <form method="POST" action="{{ route('register') }}">
                @csrf
           <div class="md-form">
        　　<p>ユーザー名</p>
           <input class="form-control" type="text" id="name" name="name" required value="{{ old('name') }}">
           </div>
           <div class="md-form">
           <p>Eメールアドレス</p>
           <small>英数字3〜16文字(登録後の変更はできません)</small>
           <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}">
           </div>
           <div class="md-form">
           <p>パスワード</p>
           <input class="form-control" type="password" id="password" name="password" required>
           </div>
           <div>
           <p>パスワード（確認）</p>
           <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
           </div>
           <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ユーザー登録</button>
        </form>
    </div>       
</body>
</head>
</html>