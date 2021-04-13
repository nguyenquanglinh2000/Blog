<div class="header" id="header">
      <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fas fa-bars"></i>
            </button>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
                <li class="nav-item active" style="padding-right: 50px;">
                  <a class="nav-link" aria-current="page" href="{{route('index')}}">Trang chủ</a>
                </li>
                <li class="nav-item" style="padding-right: 50px;">
                  <a class="nav-link" href="{{route('author.index')}}">Tác giả</a>
                </li>
                <li class="nav-item" style="padding-right: 50px;">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item" style="padding-right: 50px;">
                  <a class="nav-link" style="padding-right: 50px;" href="#">About</a>
                </li>
              </ul>
              <div class="btn"id="icon-login">
                @guest
                        <a class="button-login" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                @else
                    <a class="button-logout" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ Auth::user()->name }}(Đăng xuất)
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </div>
            </div>
          </div>
        </nav>
        <!-- Navbar -->
      
        
      </header>
</div>