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
                                <h3 class="page-header"><i class="fas fa-fw fa-wrench"></i> บริการอื่นๆ | Other Services</h3>
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

                                <form action="{{url('/admin/services/create')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="text-black">ข้อความ</label>
                                                            <input class="form-control" type="name" name="name" id="name" placeholder="คำอธิบายรูปภาพ">
                                                        @error('name')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="text-black">รูปภาพ</label>
                                                                <input class="form-control" type="file" name="image" id="image" placeholder="รูปภาพโปรโมท">
                                                        @error('image')
                                                            <span class="text-danger">{{$message}}</span>
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
                                                        <th>รูปภาพ</th>
                                                        <th>ข้อความ</th>
                                                        <th>สร้างเมื่อ</th>
                                                        <th>แก้ไขเมื่อ</th>
                                                        <th>แก้ไข</th>
                                                        <th>ลบ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($service as $i)
                                                        <tr>
                                                            <td>{{$i->service_id}}</td>
                                                            <td>{{$i->name}}</td>
                                                            <td>
                                                                <img src="{{asset('admin/img/'.$i->image)}}" alt="" style="width:100px">
                                                            </td>
                                                            <td>{{$i->created_at}}</td>
                                                            <td>{{$i->updated_at}}</td>
                                                            <td>
                                                                <a href="{{url('/admin/services/edit/'.$i->service_id)}}" class="btn btn-edit">
                                                                    <i class="fas fa-edit"></i>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="{{url('/admin/services/delete/'.$i->service_id)}}">
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