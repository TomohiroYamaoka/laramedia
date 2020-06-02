@extends('app')

@section('content')
<!------------------------------------------------------------------>
@include('nav')
<main>
    <section class="site-title">
        <div class="site-background" data-aos="fade-up" data-aos-delay="100">
            <h3>VENECT</h3>
            <h1>INTERN WEBMEDIA</h1>
        </div>
    </section>
    <!---------------Card content ------------------>
    <section class="container">
            <div class="site-content">
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
@endsection