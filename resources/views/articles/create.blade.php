<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <!-- レスポンシブに対応-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>インターンwebmedia</title>
    <!-- style.css -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head> 

<div class="container">
  <form method="POST" action="{{ route('articles.store') }}">
  @csrf
  <div class="md-form">
  <labe>タイトル</label> 
  <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
  </div>
  <div class="form-group">
  <label></label>
  <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ old('body') }}</textarea>
</div>
   <button type="submit" class="">投稿をする</button>
   </form>
</div>
