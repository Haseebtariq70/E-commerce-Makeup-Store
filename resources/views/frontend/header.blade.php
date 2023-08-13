
<header class="header trans_300">


    <!-- Main Navigation -->

    <div class="main_nav_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-right">
                    <div class="logo_container">
                        <a href="{{url('/')}}">colo<span>shop</span></a>
                    </div>
                    <nav class="navbar">
                        <ul class="navbar_menu">
                            <li><a href="{{url('/')}}">home</a></li>
                            <!--<li><a href="">shop</a></li>-->
                            <li><a href="{{url('/all_product')}}">Products</a></li>
                            <li><a href="">blog</a></li>
                            <li><a href="{{url('/contact')}}">contact</a></li>
                            <li><a href="{{url('/show_order')}}">Order</a></li>


                            
                    @if (Route::has('login'))

                    @auth
                    <li class="nav-item">
                    <x-app-layout>

</x-app-layout>
                    </li>
                     
                    @else
                    <li class="nav-item">
                       <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>

                    <li class="nav-item">
                       <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    @endauth
                    @endif

                        </ul>
                        <ul class="navbar_user">
                            <li><a href="home/#"><i class="fa fa-search" aria-hidden="true"></i></a></li> 
                            <!--<li><a href="home/#"><i class="fa fa-user" aria-hidden="true"></i></a></li>-->
                            <li class="checkout">
                                <a href="{{url('/show_cart')}}">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span id="checkout_items" class="checkout_items"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="hamburger_container">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>