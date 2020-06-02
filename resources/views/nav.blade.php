<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark  deep-blue-gradient">
  <a class="navbar-brand" href="#">Venect Intern Media</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#">ホーム
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('articles.create') }}">投稿をする</a>
      </li>
      <li class="nav-item">
              <button form="logout-button" class="dropdown-item" type="submit">
                  <a class="nav-link">ログアウト</a>
              </button>   
      </li>
      <form id="logout-button" method="POST" action="{{ route('logout') }}"> 
          @csrf
    </form>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
   
   
   
   
   
   
 <!--
   <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
               
                <a href="#" class="text-gray">Blog</a>
            </div>
           
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
                    
                    <form id="logout-button" method="POST" action="{{ route('logout') }}"> 
                        @csrf
                    </form>
                </ul>
            </div>
        </div>
    </nav>
-->