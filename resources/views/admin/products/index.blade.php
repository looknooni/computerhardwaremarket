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
                            <h3 class="page-header"><i class="fa fa-shopping-basket"></i> สินค้า | Product</h3>
                            <!-- <ol class="breadcrumb">
                                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                    <li><i class="fa fa-table"></i>Table</li>
                                    <li><i class="fa fa-th-list"></i>Basic Table</li>
                                </ol> -->
                            <hr>
                        </div>
                        <!-- page start-->
                        <div class="row">
                            <section class="panel">

                                <!-- SweetAlert -->
                                @if (session('create'))
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
                                @if (session('update'))
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
                                @if (session('delete'))
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

                                <form action="{{ url('/admin/products/create') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="text-black">หมวดหมู่สินค้า</label>
                                                <select class="form-control" name="category_id">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->category_id }}">
                                                            {{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name" class="text-black">ชื่อสินค้า</label>
                                                <input class="form-control" type="name" name="name" id="name"
                                                    placeholder="ชื่อสินค้า">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name" class="text-black">ราคา</label>
                                                <input class="form-control" type="text" name="price" id="price"
                                                    placeholder="ราคา">
                                                @error('price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name" class="text-black">ราคาพิเศษ</label>
                                                <input class="form-control" type="text" name="special_price"
                                                    id="special_price" placeholder="ราคาพิเศษ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name" class="text-black">รายละเอียด</label>
                                                <input class="form-control" type="text" name="details" id="details"
                                                    placeholder="รายละเอียด">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name" class="text-black">รูปภาพ</label>
                                                <input class="form-control" type="file" name="image" id="image"
                                                    placeholder="รูปภาพ">
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
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
                                                    <th>ชื่อสินค้า</th>
                                                    <th>รายละเอียด</th>
                                                    <th>ราคา</th>
                                                    <th>ราคาพิเศษ</th>
                                                    <th>รูปภาพ</th>
                                                    <th>สร้างเมื่อ</th>
                                                    <th>แก้ไขเมื่อ</th>
                                                    <th>แก้ไข</th>
                                                    <th>ลบ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($product as $i)
                                                    <tr>
                                                        <td>{{ $i->products_id }}</td>
                                                        <td>{{ $i->category->name }}</td>
                                                        <td>{{ $i->name }}</td>
                                                        <td>{{ $i->details }}</td>
                                                        <td>{{ $i->price }}</td>
                                                        <td>{{ $i->special_price }}</td>
                                                        <td>
                                                            <img src="{{ asset('admin/img/' . $i->image) }}" alt=""
                                                                style="width:100px">
                                                        </td>
                                                        <td>{{ $i->created_at }}</td>
                                                        <td>{{ $i->updated_at }}</td>
                                                        <td>
                                                            <a href="{{ url('/admin/products/edit/' . $i->products_id) }}"
                                                                class="btn btn-edit">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a
                                                                href="{{ url('/admin/products/delete/' . $i->products_id) }}">
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
