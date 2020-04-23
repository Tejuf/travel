<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shop - Login</title>
	<link href="{{('public/backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{('public/backend/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{('public/backend/css/styles.css')}}" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="{{('public/backend/js/html5shiv.js')}}"></script>
	<script src="{{('public/backend/js/respond.min.js')}}"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Đăng Nhập</div>

				<?php
					

					$message = Session::get('message');
					if($message)
					{	echo '<span class="text-alert">'.$message.'</span>';
						Session::put('message',null);
					}
				?>
				<div class="panel-body">


					<form role="form" action="{{URL::to('/admin_login')}}" method="post">
						
						{{csrf_field()}}	
						
						
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="admin_email" type="email">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="admin_password" type="password" >
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Nhớ Tài Khoản
								</label>
							</div>
							
								<input class="btn btn-primary" type="submit" value="Đăng Nhập" name="Login">
							
							
						
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="{{('public/backend/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{('public/backend/js/bootstrap.min.js')}}"></script>
</body>
</html>
