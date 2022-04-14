@extends('admin.layouts.auth')
@section('title','Masuk')
@section('content')

    <!-- Section -->
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image" data-background-lg="{{ asset('assets/img/illustrations/signin.svg') }}">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <img class="mb-2" width="200px" src="{{ asset('assets/img/invilogo.png') }}" alt="">
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa fa-envelope"></i>    
                                        </span>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email" autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                            </div>
                            <!-- End of Form -->
                            <div class="form-group">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2">
                                                <i class="fa fa-key"></i>    
                                            </span>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="d-flex justify-content-between align-items-top mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label mb-0" for="remember">
                                            Ingat Saya
                                        </label>
                                    </div>

                                    <div>@if (Route::has('password.request'))<a href="{{ route('password.request') }}" class="small text-right">Lupa Password?</a>@endif</div>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-sign-in"></i> &nbsp;&nbsp;&nbsp;Masuk
                                </button>
                            </div>
                        </form>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                                <span class="fw-normal">
                                    Kamu belum terdaftar?
                                    <a href="{{ route('register') }}" class="fw-bold">Buat akun disini</a>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
