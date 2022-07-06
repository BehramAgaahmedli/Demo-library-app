@extends('layouts.app')

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{route('index')}}">Ana səhifə</a></li>
                    <li class="active">Giriş </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="account">
        <div class="container">
            <div class="account-top heading">
                <h2>GİRİŞ </h2>
            </div>
            <div class="account-main">
                <div class="col-md-6 account-left">
                    <h3>Mövcud İstifadəçi</h3>
                    <div class="account-bottom">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <input placeholder="Email" name="email" value="{{ old('email') }}" type="text" tabindex="3" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        <input placeholder="Password" name="password"  type="password" tabindex="4" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        <div class="address">
                            <input type="submit" value="Giriş">
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 account-right account-left">
                    <h3>Yeni İstifadəçisən ? Qeydiyyatdan keç</h3>
                    <p>Mağazamızda hesab yaratmaqla siz ödəniş prosesindən daha sürətli keçə, çoxlu çatdırılma ünvanlarını saxlaya, hesabınızda sifarişlərinizə baxa və izləyə biləcəksiniz və s..</p>
                    <a href="{{route('register')}}">Pulsuz Qeydiyyat</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

@endsection
