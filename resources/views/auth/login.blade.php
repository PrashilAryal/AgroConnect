@extends('layout.app')


@section('contents')
    <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
    <div class="signupContainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if (Session::has('fail'))
                        <div class="alert alert-danger" role="alert">
                            {{ SessioN::get('fail') }}
                        </div>
                    @endif
                    <div class="card-header signupHeader">{{ __('Login') }}</div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="off">
                                @error('email')
                                    <span class="invalid-feedback"
                                        style="margin-left:10px;margin-top:-7px;font-size:0.8rem">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="off">
                                @error('password')
                                    <span class="invalid-feedback"
                                        style="margin-left:10px;margin-top:-7px;font-size:0.8rem">{{ $message }}</span>
                                @enderror
                            </div>
                            <a href="/signup" class='newAccount'>Create an account</a>
                            <br>
                            <button type="submit" class="btn btn-danger">{{ __('Login') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
