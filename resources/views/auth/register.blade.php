@extends('layouts.app')
@section('content')
<div class="container">
    
 <div class="row center-screen">
 <div class="col-md-8">


 <div class="card-body">
 @isset($url)
<form method="POST" action='{{ url("register/$url") }}'
aria-label="{{ __('Register') }}">
 @else
<form method="POST" action="{{ route('register') }}" arialabel="{{ __('Register') }}">
    @endisset
 @csrf
  <div class="text-center "style="font-size: 35px; ">Add User</div>
  
 <div class="form-group row">
    <div class="pt-2">
 <label for="name" style="font-size:18px;" class="col-md-4 col-form-label
text-md-right">{{ __('Name') }}</label>

 <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name"
value="{{ old('name') }}" required autocomplete="name" autofocus>
 @error('name')
 <span class="invalid-feedback"
role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 

 <div class="form-group row">
    
 <label for="email" style="font-size:18px;" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
 <div class="pt-2">
 <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
value="{{ old('email') }}" required autocomplete="email">
 @error('email')
 <span class="invalid-feedback"
role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
    <div class="pt-2">
 <label for="password" style="font-size:18px;" class="col-md-4 col-formlabel text-md-right">{{ __('Password') }}</label>
 <div class="pt-2">
 <input id="password" type="password"
class="form-control form-control-lg @error('password') is-invalid @enderror" name="password"
required autocomplete="new-password">
 @error('password')
 <span class="invalid-feedback"
role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror

 </div>
 <div class="form-group row">
    <div class="pt-2">
 <label for="password-confirm" style="font-size:18px;" class="col-md-6 colform-label text-md-right">{{ __('Confirm Password') }}</label>
<div class="pt-2">
 <input id="password-confirm" type="password"
class="form-control form-control-lg" name="password_confirmation" required autocomplete="newpassword">
 </div>
 </div>

 <div class="pt-4">
    <div class="pt-2">
 <button id="regisBtn"type="submit" class=" form-control form-control-lg ">
 {{ __('Register') }}
 </button>
</div>
</div>
<a class="btn btn-link" style="color: white;font-size: 17px;"href="{{ route('login') }}">
 {{ __('Back to login') }}
                        </div>
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection