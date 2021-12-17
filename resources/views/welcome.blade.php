@include('layouts/front/head')
<title>ตลาดคอมฮาร์ดแวร์ ซื้อขาย ช้อปสินค้าประมูล หลุดจอง ราคาน่าโดน</title>
@include('layouts/front/header')

<body>
    @csrf
    <!-- Header Start -->

    <!-- Main Slider Start -->
    <div class="header">
        <div class="container-fluid row-category">
            <div class="row">
                <div class="col-md-3">
                    <nav class="navbar bg-light category-shadow">
                        <ul class="navbar-nav scroller">
                            @foreach ($category as $i)
                            <li class="nav-item">
                                <a class="nav-link" href="#"></i>{{$i->engname}}&nbsp;{{$i->name}}</a>
                            </li>                                
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9">
                    <div class="header-slider normal-slider block">
                        @foreach ($promote as $i)

                        <div class="header-slider-item">
                            <img src="{{asset('admin/img/'.$i->image)}}" alt="Slider Image" />
                        </div>
                       @endforeach 
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
                    <div class="feature-content category-shadow">
                        <i class="fab fa-cc-mastercard"></i>
                        <h2>Credit Card</h2>
                        <p>
                            รองรับทุกบัตรเครดิต และ MasterCard
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content category-shadow">
                        <i class="fa fa-truck"></i>
                        <h2>Delivery</h2>
                        <p>
                            จัดส่งทั้งในปริมณฑล และต่างจังหวัด
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content block category-shadow">
                        <i class="fa fa-sync-alt"></i>
                        <h2>Insured</h2>
                        <p>
                            สินค้ามีประกัน รับผิดชอบตลอดอายุประกัน
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content category-shadow">
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
            <div class="section-header section-shadow">
                <h1 style="font-family: 'IBM Plex Sans Thai', sans-serif;">สินค้าแนะนำ</h1>
            </div>
            <div class="row align-items-center product-slider product-slider-4">
                @foreach ($product as $i)
                    
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-title">
                            <a href="#">{{ $i->name }}</a>
                        </div>
                        <div class="product-image card-shadow">
                            <a href="product-detail.html">
                                <img src="{{ asset('admin/img/' . $i->image) }}" alt="Product Image">
                            </a>
                            <div class="product-action">
                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-price">
                            <h3><span>฿</span>{{ $i->price }}</h3>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Featured Product End -->

    <!-- Recent Product Start -->
    <div class="recent-product product">
        <div class="container-fluid">
            <div class="section-header2 section-shadow">
                <h1 style="font-family: 'IBM Plex Sans Thai', sans-serif;">ประวัติการเข้าชมสินค้า</h1>
            </div>
            <div class="row align-items-center product-slider product-slider-4">
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-title">
                            <a href="#">Product Name</a>
                        </div>
                        <div class="product-image">
                            <a href="product-detail.html">
                                <img src="{{ asset('front_end/img/product-6.jpg') }}" alt="Product Image">
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
                        </div>
                        <div class="product-image">
                            <a href="product-detail.html">
                                <img src="{{ asset('front_end/img/product-7.jpg') }}" alt="Product Image">
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
                        </div>
                        <div class="product-image">
                            <a href="product-detail.html">
                                <img src="{{ asset('front_end/img/product-8.jpg') }}" alt="Product Image">
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
                        </div>
                        <div class="product-image">
                            <a href="product-detail.html">
                                <img src="{{ asset('front_end/img/product-9.jpg') }}" alt="Product Image">
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
                        </div>
                        <div class="product-image">
                            <a href="product-detail.html">
                                <img src="{{ asset('front_end/img/product-10.jpg') }}" alt="Product Image">
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
            <div class="section-header section-shadow">
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
                                <img src="{{ asset('front_end/img/slider-1.jpg') }}" alt="Slider Image" />
                            </div>
                            <div class="header-slider-item">
                                <img src="{{ asset('front_end/img/slider-2.jpg') }}" alt="Slider Image" />
                            </div>
                            <div class="header-slider-item">
                                <img src="{{ asset('front_end/img/slider-3.jpg') }}" alt="Slider Image" />
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
    <!-- Footer End -->
    @include('layouts/front/footer')

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('front_end/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('front_end/lib/slick/slick.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('front_end/js/main.js') }}"></script>
</body>
