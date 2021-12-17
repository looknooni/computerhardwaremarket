@include('layouts/front/head')
<title>ตลาดคอมฮาร์ดแวร์ ซื้อขาย ช้อปสินค้าประมูล หลุดจอง ราคาน่าโดน</title>
@include('layouts/front/header')

<body>
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb font-th">
                <li class="breadcrumb-item"><a href="index.html">หน้าหลัก</a></li>
                <li class="breadcrumb-item active">สินค้า</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product List Start -->
    <div class="product-view">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-view-top">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="product-search">
                                            <input type="name" value="Search">
                                            <button><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="product-short font-th">
                                            <div class="dropdown">
                                                <div class="dropdown-toggle" data-toggle="dropdown">จัดเรียงตาม</div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">ล่าสุด</a>
                                                    <a href="#" class="dropdown-item">เข้าชม</a>
                                                    <a href="#" class="dropdown-item">ขายดี</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="product-price-range font-th">
                                            <div class="dropdown">
                                                <div class="dropdown-toggle" data-toggle="dropdown">เรทราคา</div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">น้อยกว่า 500฿</a>
                                                    <a href="#" class="dropdown-item">น้อยกว่า 1,000฿</a>
                                                    <a href="#" class="dropdown-item">มากกว่า 1,000฿</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @foreach ($product as $i)
                            <div class="col-md-4">
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
                    <!-- Pagination Start -->
                    <div class="col-md-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Pagination Start -->
                </div>

                <!-- Side Bar Start -->
                <div class="col-lg-4 sidebar">
                    <div class="sidebar-widget category font-th">
                        <h2 class="title font-th">หมวดหมู่</h2>
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                @foreach ($category as $i)
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="#"></i>{{ $i->engname }}&nbsp;{{ $i->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>

                    <div class="sidebar-widget widget-slider">
                        <div class="sidebar-slider normal-slider">
                            @foreach ($product as $i)
                            <div class="product-item block">
                                <div class="product-title">
                                    <a href="#">{{$i->name}}</a>
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
                                    <h3><span>฿</span>{{$i->price}}</h3>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy
                                        Now</a>
                                </div>
                            </div>                                
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Footer Start -->
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

</html>
