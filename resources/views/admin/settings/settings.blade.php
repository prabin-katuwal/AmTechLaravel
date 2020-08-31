@extends('admin.backend')


@section('title', 'Setting')


@section('content')

<div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Edit Site Settings
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Settings</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

<div class="block">
       
        <div class="content content-narrow">
            <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }} 
                <div class="row push">
               
                    <div class=" col-xl-12">
    
                        <div class="form-group">
                            <label for="site name">Site Name</label>
                            <input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control" >
                        </div>
                        <div class="form-group">
                                <label for="contact number">Contact Number</label>
                                <input type="text" name="contact_number" value="{{ $settings->contact_number }}" class="form-control" >
                        </div>
                        
                        <div class="form-group">
                            <label for="email" >Contact Email</label>
                            <input type="text" name="contact_email" value="{{ $settings->contact_email }}" class="form-control" >
                        </div>

                        <div class="form-group">
                           <label for="address">Address</label>
                           <input type="text" name="address" value="{{ $settings->address }}" class="form-control" >
                        </div>

                        <div class="form-group">
                           <button class="btn btn-success" type="submit">Update Site Settings</button>
                        </div>
                     
                    </div>
                </div>
             
            </form>
        </div>
    </div>

@endsection


