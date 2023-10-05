@extends('layout.app')


@section('contents')
    <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
    <div class="signupContainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header signupHeader">{{ __('Sign Up') }}</div>
                    <div class="card-body">
                        <form action="{{ route('signup') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autofocus autocomplete="off">
                                @error('name')
                                    <span class="invalid-feedback"
                                        style="margin-left:10px;font-size:1.3rem">{{ $message }}</span>
                                @enderror
                            </div>
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
                                <label for="location">{{ __('Location') }}</label>
                                <input id="location" type="text"
                                    class="form-control @error('location') is-invalid @enderror" name="location" required>
                                @error('location')
                                    <span class="invalid-feedback"
                                        style="margin-left:10px;margin-top:-7px;font-size:0.8rem">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-2" style="display: flex;flex-direction:column">
                                <label for="role">{{ __('Role') }}</label>
                                <select id="userTypeSelect " style="width: 63%;height:33px;border-radius:5px; text-align: center" name="role">
                                    <option value="2" selected>Farmer</option>
                                    <option value="3">Buyer</option>
                                    <option value="4">Seller</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required>
                                @error('password')
                                    <span class="invalid-feedback"
                                        style="margin-left:10px;margin-top:-7px;font-size:0.8rem">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-danger">{{ __('Register') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
