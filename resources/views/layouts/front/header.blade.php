<div class="top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <i class="fa fa-envelope"></i>
                chhcompany@email.com
            </div>
            <div class="col-sm-6">
                <i class="fa fa-phone-alt"></i>
                +012-345-6789
            </div>
        </div>
    </div>
</div>
<!-- Top bar End -->

<!-- Nav Bar Start -->
<div class="nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto font-th">
                    <a href="{{url('/')}}" class="nav-item nav-link">หน้าหลัก</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">หมวดหมู่</a>
                        <div class="dropdown-menu">

                            {{-- <a href="" class="dropdown-item">{{$i->engname}}&nbsp;{{$i->name}}</a> --}}

                            <a href="wishlist.html" class="dropdown-item">CPU ซีพียู</a>
                            <a href="login.html" class="dropdown-item">Ram แรม</a>
                            <a href="contact.html" class="dropdown-item">Harddisk ฮาร์ดดิสก์</a>
                            <a href="contact.html" class="dropdown-item">SSD เอสเอสดี</a>
                            <a href="contact.html" class="dropdown-item">Monitor จอคอม</a>
                            <a href="contact.html" class="dropdown-item">Power Supply พาวเวอร์ซัพพลาย</a>
                            <a href="contact.html" class="dropdown-item">Keyboard แป้นพิมพ์</a>
                            <a href="contact.html" class="dropdown-item">Mouse เมาส์</a>
                            <a href="contact.html" class="dropdown-item">Headset หูฟัง</a>
                        </div>
                    </div>
                    <a href="{{url('/page/product')}}" class="nav-item nav-link">สินค้า</a>
                    <a href="{{url('/page/cart')}}" class="nav-item nav-link">ตะกร้า</a>
                    <a href="{{url('/page/wishlist')}}" class="nav-item nav-link">ถูกใจ</a>
                </div>
                
                    @if (Route::has('login'))
                    <div class="navbar-nav">
                    @auth
                        <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font-th" data-toggle="dropdown">แอคเคาท์</a>
                            <div class="dropdown-menu">
                                <a href="{{route('home')}}" class="dropdown-item font-drop">หน้าหลัก</a>
                                @if (Auth::user()->checkAdmin())
                                <a href="{{route('admin')}}" class="dropdown-item font-drop">หน้าแอดมิน</a>
                                @endif
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button class="dropdown-item font-drop">ล็อกเอาท์</button>
                                </form>
                            </div>
                        </div>
                    </div>
                        
                    @else
                    <div class="navbar-nav">
                        <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font-th" data-toggle="dropdown">แอคเคาท์</a>
                            <div class="dropdown-menu">
                                <a href="{{route('login')}}" class="dropdown-item font-drop">ล็อกอิน</a>
                    @if (Route::has('register')) 
                                <a href="{{route('register')}}" class="dropdown-item font-drop">สมัครสมาชิก</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endauth
                    @endif

                <div class="navbar-nav">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle font-th" data-toggle="dropdown">ภาษา</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item font-drop">อังกฤษ</a>
                            <a href="#" class="dropdown-item font-drop">ไทย</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->      

<!-- Bottom Bar Start -->
<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{asset('front_end/img/logo2.png')}}" alt="ตลาดคอมฮาร์ดแวร์">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="search">
                    <input type="text" placeholder="Search">
                    <button><i class="fa fa-search"></i></button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="user">
                    <a href="wishlist.html" class="btn wishlist">
                        <i class="fa fa-heart"></i>
                        <span>(0)</span>
                    </a>
                    <a href="cart.html" class="btn cart">
                        <i class="fa fa-shopping-cart"></i>
                        <span>(0)</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
