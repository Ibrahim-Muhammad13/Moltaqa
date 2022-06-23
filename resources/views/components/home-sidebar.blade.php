
<section id="nav">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand" aria-current="page" href="{{route('home')}}">
       <h3 class="w-50">Real estate</h3>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item ">
            <a class="nav-link "  href="{{route('seller')}}">Sell</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('buy')}}">Buy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('search')}}">Search</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Contact us</a>
          </li>
          @guest
        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a href="{{route('admin')}}" class="dropdown-item">Admin</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
        </ul>
      </div>
    </div>
  </nav></section>



   <!-- Right Side Of Navbar -->
   <ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
   
</ul>