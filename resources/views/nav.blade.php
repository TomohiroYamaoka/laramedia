   <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <!--メインのロゴの場所-->
                <a href="#" class="text-gray">Blog</a>
            </div>
            <!--バーのアイコンの編集をする-->
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="#">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">About</a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ route('articles.create') }}">投稿をする</a>
                    </li>
                    <li cs="nav-link">
                        <button form="logout-button" type="submit">ログアウト</button>
                    </li>
                    <!--完了済-->
                    <form id="logout-button" method="POST" action="{{ route('logout') }}"> 
                        @csrf
                    </form>
                </ul>
            </div>
        </div>
    </nav>
