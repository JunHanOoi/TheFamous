@extends('layouts.app')
@section('content')


<div class="container">
  
 <div class="row center-screen">
 <div class="col-md-8">


 <div class="card-body">
 @isset($url)
<form method="POST" action='{{ url("login/$url") }}' arialabel="{{ __('Login') }}">
 @else
<form method="POST" action="{{ route('login') }}" arialabel="{{ __('Login') }}">
 @endisset
 @csrf
  <div class="text-center "style="font-size: 50px; ">The Famous</div>
 <div class="form-group row">

 <div class="pt-4">
 <input id="email" type="email" placeholder="Email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
value="{{ old('email') }}" required autocomplete="email" autofocus>
 @error('email')
 <span class="invalid-feedback"
role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <div class="pt-4">
 <input id="password" type="password" placeholder="Password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password"
required autocomplete="current-password">
 @error('password')
 <span class="invalid-feedback"
role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
           <div class="pt-4">
				<select req
uired class="form-select form-select-lg" id="role" name="role">
				<option value=""  selected hidden>-- Select Role --</option>
				<option value="manager">Manager</option>
		 		<option value="sales">Sales Associate</option>
				</select>
			</div>
 <div class="form-group row">
 <div class="pt-3">
 <div class="form-check">
 <input class="form-check-input"
type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' :
'' }}>
 <label class="form-check-label"
for="remember">
 {{ __('Remember Me') }}
 </label>
 </div>
 </div>
 </div>
 <div class="form-group row mb-0">
 <div class="">
 <button id="loginBtn" type="submit">{{ __('Login') }}</button>

 @if (Route::has('password.request'))
 <a class="btn btn-link" style="color: red;"href="{{ route('password.request') }}">
 {{ __('Forgot Your Password?') }}
 </a>
 @endif
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
  </div>
</div>
@endsection