@include('layouts/admin/head')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                                <h3 class="page-header"><i class="fa fa-archive"></i> หมวดหมู่สินค้า | Category</h3>
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

                                <!-- SweetAlert -->
                                @if(session('create'))
                                    <script>
                                        Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'บันทึกข้อมูลสำเร็จ',
                                        showConfirmButton: false,
                                        timer: 1200
                                        })
                                    </script>
                                @endif
                                @if(session('update'))
                                    <script>
                                        Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'อัพเดทข้อมูลแล้ว',
                                        showConfirmButton: false,
                                        timer: 1200
                                        })
                                    </script>
                                @endif
                                @if(session('delete'))
                                    <script>
                                        Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'ลบข้อมูลแล้ว',
                                        showConfirmButton: false,
                                        timer: 1200
                                        })
                                    </script>
                                @endif
                                <!-- End SweerAlert -->

                                        <form action="{{url('/admin/categories/create')}}" method="post">
                                            {{csrf_field()}}
                                            <div class="col-md-12">
                                                <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="text-black">ชื่อหมวดหมู่</label>
                                                    <input class="form-control" type="name" name="name" id="name" placeholder="ชื่อหมวดหมู่สินค้า">
                                                @error('name')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="text-black">ชื่อภาษาอังกฤษ</label>
                                                    <input class="form-control" type="name" name="engname" id="engname" placeholder="ชื่อหมวดหมู่สินค้าภาษาอังกฤษ">
                                                @error('name')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                            <button type="submit" class="btn btn-primary btn-bottom">
                                                <i class="fas fa-fw fa-check"></i>
                                                <span>Submit</span>
                                            </button>
                                        </form>
                                    <div class="breadcrumb">
                                        <div class="table-responsive">
                                        <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>ไอดี</th>
                                                        <th>หมวดหมู่สินค้า</th>
                                                        <th>ภาษาอังกฤษ</th>
                                                        <th>จำนวนสินค้า</th>
                                                        <th>สร้างเมื่อ</th>
                                                        <th>แก้ไขเมื่อ</th>
                                                        <th>แก้ไข</th>
                                                        <th>ลบ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($category as $i)
                                                        <tr>
                                                            <td>{{$i->category_id}}</td>
                                                            <td>{{$i->name}}</td>
                                                            <td>{{$i->engname}}</td>
                                                            <td>{{$i->product->count()}}</td>
                                                            <td>{{$i->created_at}}</td>
                                                            <td>{{$i->updated_at}}</td>
                                                            <td>
                                                                <a href="{{url('/admin/categories/edit/'.$i->category_id)}}" class="btn btn-edit">
                                                                    <i class="fas fa-edit"></i>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="{{url('/admin/categories/delete/'.$i->category_id)}}">
                                                                    <button type="submit" class="btn btn-danger">
                                                                        <i class="fas fa-trash-alt"></i>
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
