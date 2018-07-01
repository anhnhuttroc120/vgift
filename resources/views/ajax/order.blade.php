<table id="example1" class="table table-bordered table-striped animated fadeIn">

                <thead style="background: #398ebd">
                <tr >
                  <th style="width: 13%;">Mã số đơn hàng</th>
                  <th style="width: 13%;">Tên người order</th>
                  <th style="width: 18%;">Địa chỉ</th>
                  <th style="width: 13%;">Ngày Giao hàng</th>
                  <th style="width: 10%;" >Tổng tiền</th>
                  <th style="width: 10%;">Trạng thái</th>
                  <th style="width: 10%;">Hành động</th>
                </tr>
                </thead>
                <tbody>
               
                
                <tr>
                  <td></td>
                  <td> </td>
                  <td></td>
                  <td></td>
                  <td> VNĐ</td>
                  <td > </td>
                  <td > <a href="{{url('admin/order/detail/')}}">Chi tiết</a> </td>
                </tr>
                
                <tr>
                  <td colspan="7">Không có đơn hàng nào đc tìm thấy</td>
                </tr>
            
                </tbody>
                <tfoot>
               </tfoot>  
              </table>
              <div style="float:right" class="pagination">
                {{-- {!! $orders->links() !!} --}}
              </div>
               <div class="shiping-report">
                  <p>Tổng đơn hàng đã xử lý:   </p>
                  <p>Tổng đơn hàng đang xử lý :  </p>
                  <p>Tổng đơn hàng hủy : </p>
                   <p ><b>Tổng tiền đơn hàng </b> : <span style="color: red;" class="subtotal">  </span> <span style="color: red;">VNĐ</span></p>
                </div>
         
              