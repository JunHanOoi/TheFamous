<x-header data ="User Login"/>
<head>
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

</head>
<style>

body {
	font-family: poppins;
	font-size: 16px;
	color: #fff;
}
 .form-box {
	background-color: rgba(0, 0, 0, 0.5);
	margin: auto auto;
	padding: 40px;
	border-radius: 5px;
	box-shadow: 0 0 10px #000;
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	width: 500px;
	height: 430px;
} 
.form-box:before {
	background-image: url("https://i.postimg.cc/8cnYLpfc/ddddd.jpg");
	width: 100%;
	height: 100%;
	background-size: cover;
	content: "";
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	z-index: -1;
	display: block;
	filter: blur(2px);
}

.form-box button {
	background-color: deepskyblue;
	color: #fff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	width: 100%;
	font-size: 18px;
	padding: 10px;
	margin: 20px 0px;
}



</style>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Famous</title>
	<link href="style.css" rel="stylesheet">
</head>

<body>
<form action="login" method="POST">
@csrf
	<div class="form-box">
		<div class="text-center fs-2 ">
			The Famous
		</div>

        <div class="pt-4">
        <input class="form-control" placeholder="Username" type="text" name ="username">
        <span class="text-danger fs-6 ">@error('username'){{$message}}@enderror</span>
        </div>
        
        <div class="pt-4">
        <input  class="form-control" placeholder="Password" type="password" name ="password"> 
        </div>
        <span class="text-danger fs-6">@error('password'){{$message}}@enderror</span>
        
        <button type = "submit"> Login </button>
           
	</div>
</form>
</body>
</html>