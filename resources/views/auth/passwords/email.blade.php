@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row center-screen">
        <div class="col-md-8">
        
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div style="font-size: 35px; ">Forgot your Password?</div>
                         <div class="pt-4">
                            <div class="row">
                                <div class="col-sm-2  ">
                            <i class="fa-solid fa-lock fa-3x "></i>
</div>
 <div class="col-sm-10">
                          <div style="font-size: 18px; ">Please enter the email address you'd like your password reset information send to</div>
</div>
                          <div class="form-group row">
                            <div class="pt-4">
                            <label for="name" style="font-size:18px;" >{{ __('Enter email address') }}</label>
                            <div class="pt-2">
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="eg. email@domain.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                            <div class="pt-4">
                                <button class="form-control form-control-lg btn btn-success" style="font-size: 18px;"id = "resetLink" type="submit">
                                    {{ __('Request Reset Link') }}
                                </button>
                            </div>
                             <a class="btn btn-link" style="color: white;font-size: 17px;"href="{{ route('login') }}">
 {{ __('Back to login') }}
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
