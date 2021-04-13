
<!doctype html>
<html>
<head>
<title>Đăng ký tài khoản Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Official Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/styless.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css -->
</head>
<body>
<h1 class="w3ls">Đăng ký tài khoản Blog</h1>
<div class="content-w3ls">
	<div class="content-agile1">
		<h2 class="agileits1">Blog cùi bắp</h2>
		<p class="agileits2">Học hỏi, giao lưu và chia sẻ kiến thức</p>
	</div>
	<div class="content-agile2">
		<form action="{{ route('register') }}" method="post">
            @csrf

			<div class="form-control w3layouts"> 
				<input type="text" id="firstname" name="name" placeholder="Họ tên" title="Please enter your First Name" required="">
			</div>

			<div class="form-control w3layouts">	
				<input type="email" id="email" name="email" placeholder="mail@example.com" title="Please enter a valid email" required="">
			</div>

			<div class="form-control agileinfo">	
				<input type="password" class="lock" name="password" placeholder="Password" id="password1" required="">
			</div>	

			<div class="form-control agileinfo">	
				<input type="password" class="lock" name="password_confirmation" placeholder="Confirm Password" id="password2" required="">
			</div>			
			
			<input type="submit" class="register" value="Đăng ký">
		</form>
		<script type="text/javascript">
			window.onload = function () {
				document.getElementById("password1").onchange = validatePassword;
				document.getElementById("password2").onchange = validatePassword;
			}
			function validatePassword(){
				var pass2=document.getElementById("password2").value;
				var pass1=document.getElementById("password1").value;
				if(pass1!=pass2)
					document.getElementById("password2").setCustomValidity("Passwords Don't Match");
				else
					document.getElementById("password2").setCustomValidity('');	 
					//empty string means no validation error
			}
		</script>
        <div class="aitssendbuttonw3ls">
            <p> Đăng nhập<span>→</span> <a class="w3_play_icon1" href="{{ route('login') }}"> Click Here</a></p>
            <p><a class="w3_play_icon1" href="{{ route('index') }}">Go home</a></p>
        </div>
		{{-- <p class="wthree w3l">Fast Signup With Your Favourite Social Profile</p>
		<ul class="social-agileinfo wthree2">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-youtube"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		</ul> --}}
	</div>
	<div class="clear"></div>
</div>
<p class="copyright w3l">© Chúng ta ở đây - Chúng ta là bạn</p>
</body>
</html>