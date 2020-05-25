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
        <form method="POST"　action="{{ route('register') }}">
          <!--inputタグの脆弱性からwebサービスを守るためのトークン情報--->  
        　 ＠csrf
        　　<p>ユーザー名</p>
           <input type="name" name="" placeholder="Enter your name">
           <p>Email Adress</p>
           <input type="text" name="" placeholder="Enter your Email adress">
           <p>パスワード</p>
           <input type="password" name="" placeholder="Enter Password">
           <p>パスワード（確認）</p>
           <input type="password" name="" placeholder="Enter Password Again">
           <input type="submit" name="" placeholder="Create">
        </form>
    </div>       
</body>
</head>
</html>