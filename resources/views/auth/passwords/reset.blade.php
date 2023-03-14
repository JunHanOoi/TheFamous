@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row  center-screen">
            <div class="col-md-8">


                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <div style="font-size: 35px; ">Reset Password</div>

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <div class="pt-4">
                                <label for="email" style="font-size:18px;">{{ __('Email address') }}</label>

                                <div class="pt-2">
                                    <input id="email" type="email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                                        autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="pt-2">
                                <label for="password" style="font-size:18px;">{{ __('Password') }}</label>

                                <div class="pt-2">
                                    <input id="password" type="password"
                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="pt-2">
                            <label for="password-confirm"style="font-size:18px;">{{ __('Confirm Password') }}</label>

                            <div class="pt-2">
                                <input id="password-confirm" type="password" class="form-control form-control-lg"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="pt-4">
                                <div class="pt-2">
                                    <button type="submit" class="form-control form-control-lg btn btn-success"
                                        style="font-size: 18px;"> {{ __('Reset Password') }}</button>
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
