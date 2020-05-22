<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <!-- レスポンシブに対応-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <!-- style.css -->
  <link rel="stylesheet" href="/css/styles.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>

<!----------------------------------------------------->

<body>
  @yield('content')
  <!-- Jqueryをインポート -->
  <script src="./js/jquery3.5.1.min.js"></script>
  <!-- Javascript fileをインポートする -->
  <script src="./js/main.js"></script>
</body>
