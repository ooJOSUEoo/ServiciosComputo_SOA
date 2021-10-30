@extends('layouts.app')

@section('content')
<!--perfil of user-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header pri text-white">{{ __('Perfil') }}</div>

                <div class="card-body sec text-white">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{Auth::user()->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{Auth::user()->email}}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="oldpass" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>

                            <div class="col-md-6">
                                <input id="oldpass" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="oldpass" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="newpass" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                            <div class="col-md-6">
                                <input id="newpass" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="newpass" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="repeatpass" class="col-md-4 col-form-label text-md-right">{{ __('Repeat Password') }}</label>

                            <div class="col-md-6">
                                <input id="repeatpass" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="repeatpass" value="" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
