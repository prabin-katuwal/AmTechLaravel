


@extends('admin.backend')

@section('title', 'Trashed Posts')

@section('data-table-css')

<link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">

@endsection


@section('content')

<div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Dashboard  </li>
                        <li class="breadcrumb-item">Post  </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Trash</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <!-- Dynamic Table with Export Buttons -->
    <div class="block">
    
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Image</th>
                        <th style="width: 15%;">Edit</th>
                        <th style="width: 15%;">Trash</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td class="font-w600 font-size-sm">
                             {{ $post->title }}
                        </td>
                        <td class="font-w600 font-size-sm">
                          <img src="{{ $post->featured }}" alt="{{ $post->title }}" class="img-responsive" width="50px" height="50px">
                        </td>
                        <td class="font-w600 font-size-sm">
                          <a href="{{ route('post.restore', ['id' => $post->id ]) }} " class="dt-button buttons-copy buttons-html5 btn btn-sm btn-primary">Restore <i class="fa fa-check-square-o"></i></a>  
                        </td>
                        <td class="font-w600 font-size-sm">
                         <a href="{{ route('post.kill', ['id' => $post->id ]) }}" class="dt-button buttons-copy buttons-html5 btn btn-sm btn-danger">Delete <i class="fa fa-delete"></i></a>  
                        </td>
                    </tr>
                  @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->


 
@endsection

@section('data-table-js')

<script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script>

<script src="{{ asset('assets/js/be_tables_datatables.min.js') }}"></script>

@endsection