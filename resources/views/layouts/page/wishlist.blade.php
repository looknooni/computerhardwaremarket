@include('layouts/front/head')
<title>ตลาดคอมฮาร์ดแวร์ สินค้าในตะกร้า พร้อมรอคุณสอยแล้ว</title>

<body>
    <!-- Header Start -->
    @include('layouts/front/header')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">หน้าหลัก</a></li>
                <li class="breadcrumb-item"><a href="product-list.html">สินค้า</a></li>
                <li class="breadcrumb-item active">ถูกใจ</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Wishlist Start -->
    <div class="wishlist-page">
        <div class="container-fluid">
            <div class="wishlist-page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>สินค้า</th>
                                        <th>ราคา</th>
                                        <th>จำนวน</th>
                                        <th>ใส่ตะกร้า</th>
                                        <th>ลบ</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle">
                                    <tr>
                                        <td>
                                            <div class="img">
                                                <a href="#"><img src="{{asset('front_end/img/product-1.jpg')}}" alt="Image"></a>
                                                <p>Product Name</p>
                                            </div>
                                        </td>
                                        <td>$99</td>
                                        <td>
                                            <div class="qty">
                                                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                <input type="text" value="1">
                                                <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </td>
                                        <td><button class="btn-cart">Add to Cart</button></td>
                                        <td><button><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="img">
                                                <a href="#"><img src="{{asset('front_end/img/product-1.jpg')}}" alt="Image"></a>
                                                <p>Product Name</p>
                                            </div>
                                        </td>
                                        <td>$99</td>
                                        <td>
                                            <div class="qty">
                                                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                <input type="text" value="1">
                                                <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </td>
                                        <td><button class="btn-cart">Add to Cart</button></td>
                                        <td><button><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="img">
                                                <a href="#"><img src="{{asset('front_end/img/product-1.jpg')}}" alt="Image"></a>
                                                <p>Product Name</p>
                                            </div>
                                        </td>
                                        <td>$99</td>
                                        <td>
                                            <div class="qty">
                                                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                <input type="text" value="1">
                                                <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </td>
                                        <td><button class="btn-cart">Add to Cart</button></td>
                                        <td><button><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wishlist End -->

    <!-- Footer Start -->
    @include('layouts/front/footer')

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
