<div class="form-group">
      <label for="exampleInputUserName">UserName</label>

    {!!Form::text('username',null,['class'=>'form-control','id'=>'exampleInputUserName','placeholder'=>'User Name']) !!}
</div>
<div class="form-group">
      <label for="exampleInputUserName">FullName</label>

    {!!Form::text('fullname',null,['class'=>'form-control','id'=>'exampleInputFullName','placeholder'=>'Tên đầy đủ']) !!}
 </div>
 <div class="form-group">
      <label for="exampleInputUserName">Email</label>

    {!!Form::email('email',null,['class'=>'form-control','id'=>'exampleInputEmail','placeholder'=>'Nhập Email']) !!}
 </div>
  @if(empty($user))
 <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      
      <input name="password" type="password" class="form-control" id="" placeholder="Re-Password">
       
  </div>

   <div class="form-group">
      <label for="exampleInputPassword1">Re-Password</label>
      <input name="re-password" type="password" class="form-control" id="" placeholder="Re-Password">
  </div>
  @endif
   <div class="form-group">
  
      {{-- {!!Form::select('is_admin','',null,['class'=>'form-control','id'=>'exampleInputFullName']) !!} --}}
      
  </div>
  <div class="form-group">
      <label for="exampleInputPhone">Phone</label>
      {!!Form::text('phone',null,['class'=>'form-control','id'=>'exampleInputFullName','placeholder'=>'phone']) !!}
  </div>
  
  <div class="form-group">
      <label for="exampleInputAddress">Address</label>
      {!!Form::text('address',null,['class'=>'form-control','id'=>'exampleInputFullName','placeholder'=>'adress']) !!}
  </div>
 
   <div class="form-group">
      <label for="exampleInputFile">Hình ảnh</label>
      <input type="file" name="picture[]" style="display: none;" id="vpb-data-file" onchange="vpb_image_preview(this)" multiple="multiple">
      <div id="vpb-display-preview">
        
      </div>
      <div style="margin-top:10px" >
        <span class="vpb_browse_file" onclick="document.getElementById('vpb-data-file').click();" > <img src="images/addfile.png" alt="">
          
      </span>
      <
      </div>

  </div>