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
                @if( Auth::id() === $article->user_id )
                <!-- dropdown -->
                <div class="ml-auto card-text">
                <div class="dropdown">
                　　<a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button type="button" class="btn btn-link text-muted m-0 p-2">
                  <i class="fas fa-ellipsis-v"></i>
                </button>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ route("articles.edit", ['article' => $article]) }}">
                  <i class="fas fa-pen mr-1"></i>記事を更新する
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $article->id }}">
                  <i class="fas fa-trash-alt mr-1"></i>記事を削除する
                </a>
              </div>
            </div>
          </div>
          <!-- dropdown -->
  
          <!-- modal -->
          <div id="modal-delete-{{ $article->id }}" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form method="POST" action="{{ route('articles.destroy', ['article' => $article]) }}">
                  @csrf
                  @method('DELETE')
                  <div class="modal-body">
                    {{ $article->title }}を削除します。よろしいですか？
                  </div>
                  <div class="modal-footer justify-content-between">
                    <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                    <button type="submit" class="btn btn-danger">削除する</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- modal -->
        @endif
        {{-- ここまで追加 --}}
                　　　　　<!-- Card content -->
                　　　　<div class="card-body card-body-cascade">
                　　　　　<!-- Label -->
                　　　　　　<h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i>{{ $article->user->name }} {{ $article->created_at->format('Y/m/d H:i') }} </h5>
 
                　　　　　　<!-- Title -->
                　　　　　　　<h4 class="font-weight-bold card-title">{{ $article->title }}</h4>
                　　　　　　　　　<!-- Text -->
                　　　　　　　　　　<p class="card-text">{!! nl2br(e( $article->body )) !!}</p>
                　　　　　　　　　　<!-- Button -->
                　　　　　　　　　　　<button type="button" class="btn btn-outline-secondary btn-rounded waves-effect">Read More</button>
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