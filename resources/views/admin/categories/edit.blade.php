
@extends('admin.backend')

@section('title', 'Edit Tag')


@section('content')

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                    Edit Category
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Category</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Edit</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="block">
   
        <div class="content content-narrow">
        <form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }} 
            <div class="row push">
             
                <div class=" col-xl-12">
                     @include('admin.includes.errors')

                        <div class="form-group">
                                <label for="tag">Category</label>
                                <input type="text" name="name"  value="{{ $category->name }}" class="form-control" >
                         </div>

                             <div class="form-group">
                                <button class="btn btn-success" type="submit">Update Category</button>
                          </div>

                 
                </div>
            </div>
         
        </form>
    </div>
</div>


           

@endsection


