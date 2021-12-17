@include('layouts/admin/head')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                                <h3 class="page-header"><i class="fa fa-archive"></i> แก้ไขสินค้า</h3>
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
                                        <form action="{{url('/admin/services/update/'.$service->service_id)}}" method="post" enctype="multipart/form-data"">
                                            {{csrf_field()}}
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="text-black">ข้อความ</label>
                                                                <input class="form-control" type="text" name="name" id="name" value="{{$service->name}}">
                                                        @error('name')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="name" class="text-black">รูปภาพ</label>
                                                            <input class="form-control" type="file" name="image" id="image" placeholder="รูปภาพ">
                                                            @error('image')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="mt-4">
                                                            <img id="showImage" src="{{asset('admin/img/'.$service->image)}}" width="150px">
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
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
</html>