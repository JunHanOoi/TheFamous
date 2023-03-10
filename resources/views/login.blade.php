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
.form {
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
.form:before {
	background-image: url('/images/login-bg.jpg');
	background-size: cover;
	content: "";
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	z-index: -1;
	display: block;
}
.form button {
	background-color: deepskyblue;
	color: #fff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	width: 100%;
	font-size: 18px;
	padding: 10px;
}
</style>

<body>
<title>The Famous</title>

<form action="login" method="POST">
@csrf
    <div class="form">
        <div class="text-center "style="font-size: 50px; ">The Famous</div>
            <div class="pt-4">
                <input class="form-control form-control-lg" placeholder="Username" type="text" name ="username">
                <span class="text-danger fs-6 ">@error('username'){{$message}}@enderror</span>
            </div>
            
            <div class="pt-4">
                <input  class="form-control form-control-lg" placeholder="Password" type="password" name ="password"> 
                <span class="text-danger fs-6">@error('password'){{$message}}@enderror</span>
            </div>
            <div class="pt-4">
                <button type="submit">Login</button>
            </div> 
        </div>
    </div>
</form>
</body>
</html>

