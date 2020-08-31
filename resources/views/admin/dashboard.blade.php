@extends('admin.backend')

@section('title', 'Dashboard')

@section('content')

                <!-- Hero -->
                <div class="bg-image overflow-hidden" style="background-image: url('/assets/media/photos/photo3@2x.jpg');">
                    <div class="bg-primary-dark-op">
                        <div class="content content-narrow content-full">
                            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left">
                                <div class="flex-sm-fill">
                                    <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Dashboard</h1>
                                    <h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250">Welcome Administrator - {{ Auth::user()->name }}</h2>
                                </div>
                                <div class="flex-sm-00-auto mt-3 mt-sm-0 ml-sm-3">
                                    <span class="d-inline-block invisible" data-toggle="appear" data-timeout="350">
                                        <a class="btn btn-primary px-4 py-2" data-toggle="click-ripple" href="{{ route('post.create') }}">
                                            <i class="fa fa-plus mr-1"></i> Add Post
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content content-narrow">
                    <!-- Stats -->
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">All Posts</div>
                                    <div class="font-size-h2 font-w400 text-dark">{{ $post_count }}</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Category</div>
                                    <div class="font-size-h2 font-w400 text-dark">{{ $category_count }}</div>
                                </div>
                            </a>
                        </div>
                
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Admin/Users
                                        </div>
                                    <div class="font-size-h2 font-w400 text-dark">{{ $user_count }}</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END Stats -->
   
                    <div class="row">
                           
                           <div class="col-lg-12 col-md-12">
                               <div class="panel panel-white">
                                   <div class="panel-heading clearfix">
                                       <h4 class="panel-title">Inuiry User</h4>
                                   </div>

                                   <div class="panel-body">
                                  <div class="table-responsive">
                                   <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Name</th>
                                               <th>LName</th>
                                               <th>Email</th>
                                               <th>Phone</th>
                                               <th>Message</th>
                                               <th>Service</th>
                                           </tr>
                                       </thead>
                                  
                                      <tbody>
                                           @foreach($inuiryform as $regform)
                                           <tr>
                                               <td>{{ $regform->name }}</td>
                                               <td>{{ $regform->lname }}</td>
                                               <td>{{ $regform->email }}</td>
                                               <td>{{ $regform->phone }}</td>
                                               <td>{{ $regform->msg }}</td>
                                               <td>{{ $regform->service }}</td>

                                           
                                           </tr>
                                         @endforeach
                                       </tbody>

                                      </table> 
                                      <div class="d-flex justify-content-center">
                                        {{ $inuiryform->links() }}
                                      </div>
                                   </div>
                               </div>
                                   
                               </div>
                           </div>
                       </div><!-- Row -->



                </div>
                <!-- END Page Content -->

@endsection