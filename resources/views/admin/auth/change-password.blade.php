@extends('admin.backend')

@section('title', 'Change Password')

@section('content')

<div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                        Change Password
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Change Password</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <div class="block">
   
         <div class="content content-narrow">

                    <form method="POST" action="{{ route('password.update') }}">
                        {{ csrf_field() }}               
                        <div class=" col-xl-12">
                        @include('admin.includes.errors')
                        <div class="form-group row">
                                <label for="old" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('old') ? ' is-invalid' : '' }}" name="old" required>
    
                                    @if ($errors->has('old'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('old') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row ">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Change Password') }}
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
        
            </div>
</div>
@endsection
