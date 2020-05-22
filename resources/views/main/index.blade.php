@extends('app')

@section('title', '記事一覧')

@section('content')

<!--ナビゲーションバーを挿入する-->
@include('nav')
    <!----------------------------- Main Site Section ------------------------------>
    <main>
        <!------------------------ Site Title ---------------------->
        <section class="site-title">
            <div class="site-background" data-aos="fade-up" data-aos-delay="100">
                <h3>VENECT</h3>
                <h1>INTERN WEBMEDIA</h1>
                <button class="btn">投稿を見る</button>
            </div>
        </section>
        <!-- ----------x----------Site Title --------x-------- -->

        <!-- ---------------------- Site Content -------------------------->

        <section class="container">
            <div class="site-content">
                <div class="posts">
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <!--投稿した画面をアップロードを--->
                                <img src="./assets/index.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14, 2019</span>
                            </div>
                        </div>
                        
                        <!--コンテンツ1-->
                        <div class="post-title">
                            <a href="#">Why should boys have all the fun? it's the women who are making india an
                                alcohol-loving contry</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae
                            </p>
                            <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <hr>
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
        <!-- -----------x---------- Site Content -------------x------------>
    </main>

    <!---------------x------------- Main Site Section ---------------x-------------->

    <!-- --------------------------- Footer ---------------------------------------- -->
    <footer class="footer">
        <div class="rights flex-row">
            <h4 class="text-gray">
                Copyright ©2019 All rights reserved | made by
            </h4>
        </div>
    </footer>
    <!-- -------------x------------- Footer --------------------x------------------- -->
</html>
@endsection