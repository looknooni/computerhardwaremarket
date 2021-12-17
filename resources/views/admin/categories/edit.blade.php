@include('layouts/admin/head')

<body id="page-top">
    <!-- container section start -->
    <div id="wrapper">
        <!--sidebar start-->
        @include('layouts/admin/sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <!--header start-->
            @include('layouts/admin/header')
            <!--main content start-->
            <div class="container-fluid">
                <section id="main-content">
                    <section class="wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="page-header"><i class="fa fa-archive"></i> แก้ไขประเภทสินค้า</h3>
                                <!-- <ol class="breadcrumb">
                                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                    <li><i class="fa fa-table"></i>Table</li>
                                    <li><i class="fa fa-th-list"></i>Basic Table</li>
                                </ol> -->
                                <hr>
                            </div>
                        </div>
                        <!-- page start-->
                        <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                        <form action="{{url('/admin/categories/update/'.$category->category_id)}}" method="post">
                                            {{csrf_field()}}
                                            <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name" class="text-black">Name</label>
                                                <input class="form-control" type="name" name="name" id="name" value="{{$category->name}}">
                                                @error('name')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                                </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="text-black">ชื่อภาษาอังกฤษ</label>
                                                    <input class="form-control" type="name" name="engname" id="engname" value="{{$category->engname}}">
                                                @error('name')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                            <button type="submit" class="btn btn-primary btn-bottom">                                            
                                                <i class="fas fa-fw fa-arrow-up"></i>
                                                <span>อัพเดท</span>
                                            </button>
                                        </form>
                                </section>
                            </div>
                        </div>
                        <!-- page end-->
                    </section>
                </section>
            </div>
            <!--main content end-->
        </div>
    </div>

   @include('layouts/admin/footer')

</body>

</html>