@extends('layout.admin.master')
@section('css')

<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<link rel="stylesheet" href="css/addproduct.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@endsection
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Người dùng
        <small style="color: #D74802;">Thêm</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active"><a href="{{url('admin/user/list')}}">Người dùng</a> </li>
      </ol>
    </section>


    <!-- Main content -->
     <section class="content">
      <div class="container">
      <div class="row">
         @if($errors->any())
        <div class="col-md-12">
         
       <div class="alert alert-danger">
        <ul style="list-style-type: none">
            @foreach ($errors->all() as $error)
                <li >{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      
    
      </div> {{-- row- col-md --}}
        @endif
    </div> {{-- row end --}}
  </div>{{--  container   --}}

      <div class="row">
       {!! Toastr::message() !!}


        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           {!! Form::open(['url' => url('card/add') , 'method' => 'post','files'=>true]) !!}
              <div class="box-body">
             @include('form.user.user')
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Thêm</button>
              </div>
            {!! Form::close() !!}
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
         

       
         

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
@section('script')
<!-- jQuery 3 -->
<script src="AdminLTE-2.4.3/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="AdminLTE-2.4.3/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="AdminLTE-2.4.3/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-2.4.3/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="AdminLTE-2.4.3/dist/js/demo.js"></script>
<script src="js/vasplus_uploader.js"></script>

@endsection