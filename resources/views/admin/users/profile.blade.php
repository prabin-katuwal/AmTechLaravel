@extends('admin.backend')

@section('title', 'Profile')


@section('content')

<div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Edit Profile
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Profile</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

<div class="block">
       
        <div class="content content-narrow">
            <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }} 
                <div class="row push">
            
                    <div class=" col-xl-12">
    
                        <div class="form-group">
                            <label for="user name">User Name</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" >
                        </div>

                        <div class="form-group">
                          <label for="email" >Email</label>
                          <input type="text" value="{{ $user->email }}" name="email" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="avatar" >Upload New Avatar</label>
                            <div class="custom-file">
                            <input class="custom-file-input" type="file" name="avatar" >
                            <label class="custom-file-label" for="featured">Choose file</label>
                            </div>
                        </div>

              

                        <div class="form-group">
                            <label  for="facebook" >Facebook</label>
                            <input type="text" value="{{ $user->profile->facebook }}" name="facebook" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="youtube" >Youtube</label>
                            <input type="text" value="{{ $user->profile->youtube }}" name="youtube" class="form-control" > 
                        </div>

                        <div class="form-group">
                            <label for="about" >About</label>
                              <textarea id="about" cols="6" rows="6" class="form-control" name="about">{{ $user->profile->about }}
                              </textarea>
                            </div>
                       
                        <div class="form-group">
                           <button class="btn btn-success" type="submit">Update Profile</button>
                        </div>
                     
                    </div>
                </div>
             
            </form>
        </div>
    </div>

           

@endsection


