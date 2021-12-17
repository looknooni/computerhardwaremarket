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
                                <h3 class="page-header"><i class="fa fa-address-card"></i> ข้อมูลบริษัท | Company</h3>
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

                                    <div class="breadcrumb">
                                        <div class="table-responsive">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>ชื่อบริษัท</th>
                                                        <th>ชื่อภาษาอังกฤษ</th>
                                                        <th>อีเมล</th>
                                                        <th>เบอร์</th>
                                                        <th>โลโก้เว็บ</th>
                                                        <th>โลโก้เฮด</th>
                                                        <th>โลโก้ล็อกอิน/ล็อกเอาท์</th>
                                                        <th>แก้ไข</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($company as $i)
                                                        <tr>
                                                            <td>{{ $i->name }}</td>
                                                            <td>{{ $i->engname }}</td>
                                                            <td>{{ $i->email }}</td>
                                                            <td>{{ $i->phone }}</td>
                                                            <td>{{ $i->web_logo }}</td>
                                                            <td>{{ $i->head_logo }}</td>
                                                            <td>{{ $i->authen_logo }}</td>
                                                            <td>
                                                                <a href=""
                                                                    class="btn btn-edit">
                                                                    <i class="fas fa-edit"></i>
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
