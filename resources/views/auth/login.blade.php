@extends('layouts.app')

@section('content')

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="{{ asset('css/log.css')}}">

<div class="container col-xxx-4 py-5">
    <div class="d-flex justify-content-center">
            <div class="card shadow cardCustom p-4">
                <i class="fa-solid fa-right-to-bracket fa-2xl py-3"></i>
                <h3 class="fw-bold">Login</h3><p>Akses Lebih Mudah Dengan Akun Google Anda</p>
               <a href="" class="text-decoration-none text-dark">
                <div class="d-flex align-items-center shadow-sm btnGoogle">
                    <div>
                        <img src="{{ asset('../images/google.png')}}" height="25" width="25" alt="">
                    </div>
                    <div class="ms-2 fw-bold">
                        Login With Google
                    </div>
                </div>
               </a>

               <div class="d-flex justify-content-between align-items-center py-4">
                    <div class="stripKiri"></div>
                    <div class="stripLabel">atau login dengan</div>
                    <div class="stripKanan"></div>
               </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="row mb-3">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>

                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                
                            </div>
                        </div>

                        <div class="row mb-0">
                                <button type="submit" class="btn btn-outline-primary w-100">
                                    {{ __('Login') }}
                                </button>

                               
                        </div>

                        <div class="d-flex justify-content-center py-3">
                            <p>Dont Have an Account ? </p>
                            @if (Route::has('register'))
                            <a href="{{ route('register')}}" class="text-decoration-none"> Register Here!</a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/766f35d2e9.js" crossorigin="anonymous"></script>
@endsection
