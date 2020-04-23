@extends('admin_layout')
@section('content_admin')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhập Thương Hiệu Sản Phẩm
                        </header>
                        <?php
						$message = Session::get('message');
						if($message)
						{	echo '<span class="text-notification">'.$message.'</span>';
							Session::put('message',null);
						}

						?>
                        <div class="panel-body">
                        	@foreach($data as $edit_value)
                            <div class="position-center">
                            	
                                <form role="form" action="{{URL::to('/update-brand-product-'.$edit_value->brand_id)}}" method="POST">
                                	{{csrf_field()}}
										<div class="form-group">
		                                    <label for="exampleInputEmail1">Tên Thương Hiệu Sản Phẩm</label>
		                                    <input type="text" value="{{$edit_value->brand_name}}" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Thương Hiệu">
		                                </div>
		                                <div class="form-group">
		                                    <label for="exampleInputPassword1">Mô Tả Thương Hiệu</label>
		                                    <textarea style="resize:none" rows="5" class="form-control" name="brand_product_desc" id="exampleInputPassword1" placeholder="Mô Tả Thương Hiệu">{{$edit_value->brand_desc}}</textarea>
		                                </div>
		                                
		                                
		                            
		                            <button type="submit" name="add_brand"  class="btn btn-info">Cập Nhập</button>  
                            	</form>
                            	
                            </div>
							@endforeach
                        </div>
                    </section>

            </div>
            
 </div>
  @endsection