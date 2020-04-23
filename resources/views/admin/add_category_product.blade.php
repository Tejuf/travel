@extends('admin_layout')
@section('content_admin')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Danh Mục Sản Phẩm
                        </header>
                        <?php
						$message = Session::get('message');
						if($message)
						{	echo '<span class="text-notification">'.$message.'</span>';
							Session::put('message',null);
						}

						?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-category-product')}}" method="POST">
                                	{{csrf_field()}}
										<div class="form-group">
		                                    <label for="exampleInputEmail1">Tên Danh Mục Sản Phẩm</label>
		                                    <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Danh Mục">
		                                </div>
		                                <div class="form-group">
		                                    <label for="exampleInputPassword1">Mô Tả Danh Mục</label>
		                                    <textarea style="resize:none" rows="5" class="form-control" name="category_product_desc" id="exampleInputPassword1" placeholder="Mô Tả Danh Mục"></textarea>
		                                </div>
		                                
		                                <div class="form-group">
		                                    <label for="exampleInputPassword1">Hiển Thị</label>
			                                <select name="category_product_status" class="form-control input-sm m-bot15">
			                                <option value="0">Ẩn</option>
			                                <option value="1">Hiển Thị</option>
			                                </select>
		                                </div>
		                            
		                            <button type="submit" name="add_category"  class="btn btn-info">Thêm Danh Mục</button>  
                            	</form>
                            </div>

                        </div>
                    </section>

            </div>
            
 </div>
  @endsection