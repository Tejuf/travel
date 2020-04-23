@extends('admin_layout')
@section('content_admin')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhập Danh Mục Sản Phẩm
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
                            	
                                <form role="form" action="{{URL::to('/update-category-product-'.$edit_value->category_id)}}" method="POST">
                                	{{csrf_field()}}
										<div class="form-group">
		                                    <label for="exampleInputEmail1">Tên Danh Mục Sản Phẩm</label>
		                                    <input type="text" value="{{$edit_value->category_name}}" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Danh Mục">
		                                </div>
		                                <div class="form-group">
		                                    <label for="exampleInputPassword1">Mô Tả Danh Mục</label>
		                                    <textarea style="resize:none" rows="5" class="form-control" name="category_product_desc" id="exampleInputPassword1" placeholder="Mô Tả Danh Mục">{{$edit_value->category_desc}}</textarea>
		                                </div>
		                                
		                                
		                            
		                            <button type="submit" name="add_category"  class="btn btn-info">Cập Nhập</button>  
                            	</form>
                            	
                            </div>
							@endforeach
                        </div>
                    </section>

            </div>
            
 </div>
  @endsection