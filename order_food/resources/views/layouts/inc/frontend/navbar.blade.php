
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e75b1e;">
   {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-4 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('collections') }}">All Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery"> Our Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog"> Our Blog</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Fashions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Appliances</a>
                    </li> --}}
                </ul>


  </div>
 <ul class="nav justify-content-end">

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('cart')}}">
                                <i class="fa fa-shopping-cart"></i> Cart (<livewire:frontend.cart.cart-count/>)
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-heart"></i> Wishlist (0)
                            </a>
                        </li> --}}
                        @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user"></i> {{ Auth::user()->name }}

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                {{-- <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a></li> --}}
                                {{-- <li><a class="dropdown-item" href="#"><i class="fa fa-list"></i> My Orders</a></li> --}}
                                {{-- <li><a class="dropdown-item" href="#"><i class="fa fa-heart"></i> My Wishlist</a></li> --}}
                                <li><a class="dropdown-item" href="{{url('/cart')}}"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        Logout
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                    </ul>
</nav>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> --}}

