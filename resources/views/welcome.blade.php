<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ตลาดคอมฮาร์ดแวร์ ซื้อขาย ช้อปสิ้นค้าประมูล หลุด ราคาน่ารัก</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="/back_end/images/logo.png" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{asset('front_end/lib/slick/slick.css')}}" rel="stylesheet">
        <link href="{{asset('front_end/lib/slick/slick-theme.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('front_end/css/style.css')}}" rel="stylesheet">
    </head>

    <body>
        @csrf
        <!-- Top bar Start -->
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
                            <a href="index.html" class="nav-item nav-link active">หน้าหลัก</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">หมวดหมู่</a>
                                <div class="dropdown-menu">
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
                            <a href="product-list.html" class="nav-item nav-link">สินค้า</a>
                            <a href="cart.html" class="nav-item nav-link">ตะกร้า</a>
                            <a href="wishlist.html" class="nav-item nav-link">ถูกใจ</a>
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
                                <img src="{{asset('front_end/img/logo.png')}}" alt="ตลาดคอมฮาร์ดแวร์">
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
        <!-- Bottom Bar End -->       
        
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"></i>CPU ซีพียู</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"></i>Ram แรม</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"></i>Harddisk ฮาร์ดดิสก์</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"></i>SSD เอสเอสดี</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"></i>Monitor จอคอม</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"></i>Power Supply พาวเวอร์ซัพพลาย</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"></i>Keyboard แป้นพิมพ์</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"></i>Mouse เมาส์</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"></i>Headset หูฟัง</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-6">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img src="{{asset('front_end/img/slider-1.jpg')}}" alt="Slider Image" />
                            </div>
                            <div class="header-slider-item">
                                <img src="{{asset('front_end/img/slider-2.jpg')}}" alt="Slider Image" />
                            </div>
                            <div class="header-slider-item">
                                <img src="{{asset('front_end/img/slider-3.jpg')}}" alt="Slider Image" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="{{asset('front_end/img/category-1.jpg')}}" />
                            </div>
                            <div class="img-item">
                                <img src="{{asset('front_end/img/category-2.jpg')}}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
                
        <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>Credit Card</h2>
                            <p>
                                รองรับทุกบัตรเครดิต และ MasterCard
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Delivery</h2>
                            <p>
                                จัดส่งทั้งในปริมณฑล และต่างจังหวัด
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>90 Days Return</h2>
                            <p>
                                สินค้าชำรุดเสียหาย เทิร์นได้ใน 90 วัน
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>Support</h2>
                            <p>
                                ติดต่อปัญหา ปรึกษาเรื่องคอม
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->      
                
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>สอบถามรายละเอียดเพิ่มเติม</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0123456789">+012-345-6789</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->       
        
        <!-- Featured Product Start -->
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1 style="font-family: 'IBM Plex Sans Thai', sans-serif;">สินค้าแนะนำ</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Product Name</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="{{asset('front_end/img/product-1.jpg')}}" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>฿</span>99</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Product Name</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="{{asset('front_end/img/product-2.jpg')}}" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>฿</span>99</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Product Name</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="{{asset('front_end/img/product-3.jpg')}}" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>฿</span>99</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Product Name</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="{{asset('front_end/img/product-4.jpg')}}" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>฿</span>99</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Product Name</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="{{asset('front_end/img/product-5.jpg')}}" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>฿</span>99</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured Product End -->       
                
        <!-- Recent Product Start -->
        <div class="recent-product product">
            <div class="container-fluid">
                <div class="section-header2 ">
                    <h1 style="font-family: 'IBM Plex Sans Thai', sans-serif;">ประวัติการเข้าชมสินค้า</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Product Name</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="{{asset('front_end/img/product-6.jpg')}}" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>฿</span>99</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Product Name</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="{{asset('front_end/img/product-7.jpg')}}" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>฿</span>99</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Product Name</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="{{asset('front_end/img/product-8.jpg')}}" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>฿</span>99</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Product Name</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="{{asset('front_end/img/product-9.jpg')}}" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>฿</span>99</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Product Name</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="{{asset('front_end/img/product-10.jpg')}}" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>฿</span>99</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Product End -->
        
        <!-- Newsletter Start -->
        <div class="newsletter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h1>ติดตามข่าวสารใหม่ทางอีเมล</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <input type="email" value="Your email here">
                            <button>Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->

        <!-- Others Start -->
        <div class="recent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1 style="font-family: 'IBM Plex Sans Thai', sans-serif;">บริการอื่น</h1>
                </div>
            </div>
        </div>
        <!-- Others End -->

        <!-- Devices Start -->
        <div class="header">
            <div class="container-fluid">
               <div class="device">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="header-slider normal-slider">
                                <div class="header-slider-item">
                                    <img src="{{asset('front_end/img/slider-1.jpg')}}" alt="Slider Image" />
                                </div>
                                <div class="header-slider-item">
                                    <img src="{{asset('front_end/img/slider-2.jpg')}}" alt="Slider Image" />
                                </div>
                                <div class="header-slider-item">
                                   <img src="{{asset('front_end/img/slider-3.jpg')}}" alt="Slider Image" />
                               </div>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="container">
                                <div class class="row">
                                    <div class="device-content">
                                        <p>ทำความสะอาดคอมพิวเตอร์</p>
                                    </div>
                                </div>
                                <div class class="row">
                                    <div class="device-content">
                                        <p>จัดสเปคตรงใจลูกค้า</p>
                                    </div>
                                </div>
                                <div class class="row">
                                    <div class="device-content">
                                        <p>ลูกแมวพันธุ์ดี ราคาน่ารัก</p>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Devices End -->        
        
        <!-- Footer Bottom Start -->
        <footer class="footer">
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Computer Hardware House
                            <br>ห้างหุ้นส่วนจำกัดคอมพิวเตอร์ ฮาร์ดแวร์ เฮาส์
                        </p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>00-000-0000
                            <br>chhcompany@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </footer>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('front_end/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('front_end/lib/slick/slick.min.js')}}"></script>
        
        <!-- Template Javascript -->
        <script src="{{asset('front_end/js/main.js')}}"></script>
    </body>
</html>
