<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Blog</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glassy Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/styles.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
<!-- //web-fonts -->
<link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">

</head>
<body>
		<!--header-->
		<div class="header-w3l">
			<h1>Blog cùi bắp của tôi</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-w3layouts-agileinfo">
	           <!--form-stars-here-->
						<div class="wthree-form">
							<h2>Đăng nhập</h2>
							<form action="{{ route('login') }}" method="post">
								@csrf
								<div class="form-sub-w3">
									<input id="email" type="email"  name="email" value="{{ old('email') }}" placeholder="Email " required autocomplete="email" autofocus>
								<div class="icon-w3">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								</div>
								<div class="form-sub-w3">
									<input id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password">
								<div class="icon-w3">
									<i class="fa fa-unlock-alt" aria-hidden="true"></i>
								</div>
								</div>
								<label class="anim">
								<input type="checkbox" class="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
									<label class="form-check-label" for="remember" style="color: aliceblue">Nhớ tôi nhé</label> 
									@if (Route::has('password.request'))
										<a class="btn btn-link" href="{{ route('password.request') }}">Quên mật khẩu</a>
									@endif
								</label> 
								<div class="clear"></div>
								<div class="submit-agileits">
									<input type="submit" value="Đăng nhập">
									<div class="aitssendbuttonw3ls">
										<p> Đăng ký tài khoản mới<span>→</span> <a class="w3_play_icon1" href="{{ route('register') }}"> Click Here</a></p>
										<p><a class="w3_play_icon1" href="{{ route('index') }}">Go home</a></p>
									</div>
									
								</div>
							</form>

						</div>
				<!--//form-ends-here-->

		</div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<p>&copy; Chào mừng các bạn đã đến với Blog của tôi</p>
		</div>
		<!--//footer-->
</body>
</html>