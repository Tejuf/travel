@extends('admin_layout')
@section('content_admin')
<div class="table-agile-info">
  <?php
            $message = Session::get('message');
            if($message)
            { echo '<span class="text-notification">'.$message.'</span>';
              Session::put('message',null);
            }
      ?>
  <div class="panel panel-default">

     
    <div class="table-responsive">
    	
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên Sản Phẩm</th>
            <th>Hiển Thị</th>
           
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>

		@foreach($all_brand_product as $cate_pro)

          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $cate_pro->brand_name}}</td>
            
            <td><span class="text-ellipsis">
            	
            	<?php
            	if ($cate_pro->brand_status==1){
            	?>
            	
            		<a href="{{URL::to('/unactive-brand-product/'.$cate_pro->brand_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
            	<?php } ?>
				<?php
            	if ($cate_pro->brand_status==0){
 				?>           	
            		<a href="{{URL::to('/active-brand-product/'.$cate_pro->brand_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
            	
            	<?php } ?>
            	
            </span></td>
            
            <td>
              <a href="{{URL::to('/edit-brand-product-'.$cate_pro->brand_id)}}" class="acctive styling-edit" ui-toggle-class="">
              	<i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có muốn xóa Thương Hiệu sản phẩm?')" href="{{URL::to('/delete-brand-product-'.$cate_pro->brand_id)}}" class="acctive styling-edit" ui-toggle-class="">
              	<i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>

@endsection