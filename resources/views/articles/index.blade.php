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


<body>
@include('nav')
<main>
    <section class="site-title">
        <div class="site-background" data-aos="fade-up" data-aos-delay="100">
            <h3>VENECT</h3>
            <h1>INTERN WEBMEDIA</h1>
            <button class="btn">投稿を見る</button>
        </div>
    </section>
    
    <section class="container">
            <div class="site-content">
    　          <div class="posts">
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <!--投稿した画像--->
                                <img src="./assets/index.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                            @foreach($articles as $article)
                            　　 <!--作成者-->
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;
                                {{ $article->user->name }} 
                                </span> 
                                <!--日付-->
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;
                                {{ $article->created_at->format('Y/m/d H:i') }} 
                                </span>
                           
                            </div>
                        </div>
                        　　　　<!--コンテンツ1-->
                        　　　<div class="post-title">
                        　　 　<!--ブログのタイトル-->　　
                           　 <a href="#">{{ $article->title }}</a>
                           　 <!--ブログの本文-->
                            　<p>{!! nl2br(e( $article->body )) !!}</p>
                             @endforeach 
                            　<!--ブログに付属しているボタン-->
                             <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
                
                <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./assets/pic1.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 16, 2019</span>
                            </div>
                        </div>
                        
                        <!--コンテンツ----->
                        <div class="post-title">
                            <a href="#">Why should boys have all the fun? it's the women who are making india an
                                alcohol-loving contry</a>
                            <p>Lorem  fugit. Eligendi quidem ipsam ducimus minus magni</p>
                            <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./assets/pic2.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 19, 2019</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">New data recording system to better analyse road accidents</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae</p>
                            <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./assets/pic3.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 21, 2019</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">New data recording system to better analyse road accidents</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae</p>
                            <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>

                    <div class="pagination flex-row">
                        <a href="#"><i class="fas fa-chevron-left"></i></a>
                        <a href="#" class="pages">1</a>
                        <a href="#" class="pages">2</a>
                        <a href="#" class="pages">3</a>
                        <a href="#"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>


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
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="rights flex-row">
            <h4 class="text-gray">
                Copyright ©2019 All rights reserved | made by
            </h4>
        </div>
    </footer>
    <!-- Jqueryをインポート -->
    <script src="./js/jquery3.5.1.min.js"></script>
    <!-- Javascript fileをインポートする -->
    </body>
</html>
