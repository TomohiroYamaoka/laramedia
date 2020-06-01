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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>    

<!------------------------------------------------------------------>
<body>
@include('nav')
<main>
    <section class="site-title">
        <div class="site-background" data-aos="fade-up" data-aos-delay="100">
            <h3>VENECT</h3>
            <h1>INTERN WEBMEDIA</h1>
        </div>
    </section>
    
    <section class="container">
            <div class="site-content">
              　　<!---------------Card content ------------------>
              @foreach($articles as $article)　
                <div class="card card-cascade narrower">
                　　<!-- Card image -->
                　　　　<div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                　　　　　　<img class="card-img-top" src="./assets/index.jpg" alt="Card image cap">
                　　　　　　　<a><div class="mask rgba-white-slight"></div></a>
                　　　　</div>
                　　　　　<!-- Card content -->
                　　　　<div class="card-body card-body-cascade">
                　　　　　<!-- Label -->
                　　　　　　<h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i>{{ $article->user->name }} {{ $article->created_at->format('Y/m/d H:i') }} </h5>
                　　　　　　<!-- Title -->
                　　　　　　　<h4 class="font-weight-bold card-title">{{ $article->title }}</h4>
                　　　　　　　　　<!-- Text -->
                　　　　　　　　　　<p class="card-text">{!! nl2br(e( $article->body )) !!}</p>
                　　　　　　　　　　<!-- Button -->
                　　　　　　　　　　　　<a class="btn btn-unique">Read more</a>
                　　　　　　　</div>
                　　　　　</div>
                @endforeach 
　　　　　　　　　　　<!---------------- content ----------------->
                <!---------------Card content ------------------>
                <div class="card card-cascade narrower">
                　　<!-- Card image -->
                　　　　<div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                　　　　　　<img class="card-img-top" src="./assets/index.jpg" alt="Card image cap">
                　　　　　　　<a><div class="mask rgba-white-slight"></div></a>
                　　　　</div>
                　<!-- Card content -->
                　　　　<div class="card-body card-body-cascade">
                　　　　　<!-- Label -->
                　　　　　　<h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i> Culinary</h5>
                　　　　　　<!-- Title -->
                　　　　　　　<h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
                　　　　　　　　　<!-- Text -->
                　　　　　　　　　　<p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipitlaboriosam, nisi ut aliquid ex ea commodi.</p>
                　　　　　　　　　　<!-- Button -->
                　　　　　　　　　　　　<a class="btn btn-unique">Button</a>
                　　　　</div>
                　</div>
　　　　　　　　　　　<!---------------- content ----------------->


                    <!-----------ページ遷移------------------->
                    <div class="pagination flex-row">
                        <a href="#"><i class="fas fa-chevron-left"></i></a>
                        <a href="#" class="pages">1</a>
                        <a href="#" class="pages">2</a>
                        <a href="#" class="pages">3</a>
                        <a href="#"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>

                <!--------サイドバーを作成する---------------->
                <aside class="sidebar">
                    <div class="category">
                        <h2>Category</h2>
                        <ul class="category-list">
                            <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                                <a href="#">Software</a>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="200">
                                <a href="#">Techonlogy</a>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="300">
                                <a href="#">Lifestyle</a>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="400">
                                <a href="#">Shopping</a>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="500">
                                <a href="#">Food</a>
                            </li>
                        </ul>
                    </div>
                  </div>
                </aside>
            　<!-------------------------------------------------->
            </div>
        </section>
    </main>

    <!-------------------------------------------------->
    <footer class="footer">
        <div class="rights flex-row">
            <h4 class="text-gray">
                Copyright ©2019 All rights reserved | made by TomohiroYamaoka
            </h4>
        </div>
    </footer>
    <!-- Jqueryをインポート -->
    <script src="./js/jquery3.5.1.min.js"></script>
    <!-- Javascript fileをインポートする -->
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
    </body>
</html>
