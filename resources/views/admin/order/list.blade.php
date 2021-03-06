@extends('layout.admin.master')
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="css/jquery.datetimepicker.css">
@section('css')

<link rel="stylesheet" type="text/css" href="css/dung.css">
<link rel="stylesheet" href="AdminLTE-2.4.3/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
{{-- <link rel="stylesheet" href="team1/team1.css"> --}}
<link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.min.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

@endsection
@section('content')


  <div class="content-wrapper">
 {!! Toastr::message() !!}
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh sách người dùng
    <!--     <small>advanced tables</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="{{url('admin/product/list')}}">Sản phẩm</a></li>
        <li class="active"> Danh sách sản phẩm</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
  
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
                            <div id="dialog-confirm" title="Thông báo!" style="display: none;">
                  <p>Bạn có chắc muốn xóa phần tử này hay không?</p>
                </div>  
            <form action="{{url('admin/order/print')}}" method="post" id="print-form">    
         <div class="div-search">
            <select style="height: 30px;" name="status" id="status">

              <option selected value=""></option>
             
              <option value=""></option>
            
            </select>
            <input style="padding:5px;" name="keyword" type="text" class="form-controls" id="search" placeholder="Tìm kiếm theo tên" value="@if(Request::get('keyword')) {{ Request::get('keyword') }} @endif" />
              <span style="font-weight: bold">Từ:</span>
     
            
                <input class="startdate" id="some_class_1" name="domain_init_date" type="text" >
                                <span  class=""> <i class="fa fa-calendar"></i> </span>
          
     
                <span style="font-weight: bold;">Đến:</span>
                <input class="enddate" id="enddate" name="enddate" placeholder="{{date('Y-m-d',time())}}" type="text" value="@if(Request::get('enddate')) {{ Request::get('enddate') }} @endif" /> 
            
          </div>
          <div  class="bill" style="float: right;margin-bottom: 10px;">
             <div>
                
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                
                <a class="print" > <i style="color: black;" class="fa fa-print"></i>In hóa đơn</a>
                </form>
           </div>
            
          </div> {{-- endbill --}}
             <div style="clear: both"></div>
                
              
                <div id="result">
                    {!! view('ajax.order')->render() !!}
                </div>
               
                
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
@section('script')
<script src="AdminLTE-2.4.3/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="AdminLTE-2.4.3/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="AdminLTE-2.4.3/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="AdminLTE-2.4.3/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="AdminLTE-2.4.3/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="AdminLTE-2.4.3/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-2.4.3/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="AdminLTE-2.4.3/dist/js/demo.js"></script>
<script>

  
function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}
</script>

<!-- page script -->
{{-- <script>
  $(function () {+
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script> --}}
<script>
    $(document).ready(function(){

        $('select[name=category_id]').change(function(){
              var category_id = $(this).val();
              
              var url =  '{{url('admin/product/category/')}}' + '/' + category_id;
             
              $(location).attr('href', url);

        });
    });
</script>
<script src="js/jquery.js"></script>
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="js/delete.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script src="js/jquery.datetimepicker.js"></script>

 

<script>
      function callAjax(){
        var value = $('#search').val();
        var startdate = $('#startdate').val();
        var  status = $('#status').val();
        var enddate = $('#enddate').val();


        var url = "{{url('admin/order/list')}}";
        
        $.ajax({
        type :'get',
        url :url ,
        data:{keyword:value,startdate:startdate,enddate:enddate,status:status},
        success: function (data) { 
          console.log(data);
            $('#result').empty();
            $('#result').html(data.view);
          

        }
      });

      }
</script>
<script>
  $('.startdate').datetimepicker({
    formatTime:'H:i:s', 
    format:'d-m-Y H:i:s',
    lang:'vi'
    // formatDate:'d.m.Y H:i:s',
    
  });
  $('.enddate').datetimepicker();
</script>
<script>
  $(document).ready(function(){
  
    $('#search').on('keyup', function(){
        callAjax();
      
    });
    $('#enddate').change(function(){

      callAjax();
    });
      $('#startdate').change(function(){
      callAjax();
    });
       $('#status').change(function(){
      callAjax();
    });
   
   });
</script>
<script>
   $(document).ready(function(){
       $('.print').click(function(){
            $('#print-form').submit();
       }); 
        
   }); 

</script>

@endsection



