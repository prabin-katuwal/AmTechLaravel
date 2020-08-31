@extends('admin.backend')

@section('title', 'Users')

@section('data-table-css')

<link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">

@endsection


@section('content')

<div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Edit Profile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="{{ route('user.create') }}" class="btn btn-success">Add New User <i class="fa fa-plus-circle"></i></a>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Dashboard  </li>
                      
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Profile</a>
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
                        <th class="text-center" style="width: 80px;">Profile</th>
                        <th>Name</th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">PERMISSIONS</th>
                        <th style="width: 15%;">DELETE</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($users as $user)
                    <tr>
                        <td class="text-center">
                            <img class="img-avatar img-avatar48" src="{{ asset($user->profile->avatar) }}" alt="">
                        </td>
                        <td class="font-w600 font-size-sm">
                          {{ $user->name }}
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                           {{ $user->email }}
                        </td>
                        <td class="d-none d-sm-table-cell">  
                          @if($user->admin)
                            <a href="{{ route('user.not.admin',['id' => $user->id]) }}" class="dt-button buttons-copy buttons-html5 btn btn-sm btn-danger"> Remove Permissions</a>
                          @else
                            <a href="{{ route('user.admin',['id' => $user->id]) }}" class="dt-button buttons-copy buttons-html5 btn btn-sm btn-success">Make Admin </a>
                          @endif
                        </td>
                        <td>
                           @if(Auth::id() !== $user->id)
                             <a href="{{ route('user.delete',['id' => $user->id]) }}" class="dt-button buttons-copy buttons-html5 btn btn-sm btn-danger"> <i class="fa fa-fw fa-times"></i></a>
                           @endif
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