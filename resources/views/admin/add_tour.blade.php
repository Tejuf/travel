@extends('admin_layout')
@section('content_admin')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Thương Hiệu Sản Phẩm
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
                                <form role="form" action="{{URL::to('/save-brand-product')}}" method="POST">
                                	{{csrf_field()}}
										<div class="form-group">
		                                    <label for="exampleInputEmail1">Tên Tour Du Lịch</label>
		                                    <input type="text" name="tour_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Tour">
		                                </div>
		                                <div class="form-group">
		                                    <label for="exampleInputEmail1">Địa Điểm</label>
		                                    <input type="text" name="tour_place" class="form-control" id="exampleInputEmail1" placeholder="Địa điểm">
		                                </div>
		                                <div class="form-group">
		                                    <label for="exampleInputEmail1">Thời gian kéo dài tour</label>
		                                    <input type="text" name="tour_date" class="form-control" id="exampleInputEmail1" placeholder="Tổng số thời gian diễn ra tour">
		                                </div>
		                                <div class="form-group">
		                                    <label for="exampleInputEmail1">Số người</label>
		                                    <input type="text" name="tour_amount_people" class="form-control" id="exampleInputEmail1" placeholder="số người">
		                                </div>
		                                <div class="form-group">
		                                    <label for="exampleInputPassword1">Chi Tiết Tour</label>
		                                    <textarea style="resize:none" rows="5" class="form-control" name="brand_product_desc" id="exampleInputPassword1" placeholder="Mô Tả Thương Hiệu"></textarea>
		                                </div>
		                                
		                                <div class="form-group">
		                                    <label for="exampleInputPassword1">Hiển Thị</label>
			                                <select name="brand_product_status" class="form-control input-sm m-bot15">
			                                <option value="0">Ẩn</option>
			                                <option value="1">Hiển Thị</option>
			                                </select>
		                                </div>
		                            
		                            <button type="submit" name="add_brand"  class="btn btn-info">Thêm Thương Hiệu</button>  
                            	</form>
                            </div>

                        </div>
                    </section>

            </div>
            
 </div>
  @endsection