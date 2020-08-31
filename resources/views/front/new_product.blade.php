@extends('front.main')

@section('gallery-css')
<style>

#profile-grid { overflow: auto; white-space: normal; }
#profile-grid .profile { padding-bottom: 40px; }
#profile-grid .panel { padding: 0 }
#profile-grid .panel-body { padding: 15px }
#profile-grid .profile-name { font-weight: bold; }
#profile-grid .thumbnail {margin-bottom:6px;}
#profile-grid .panel-thumbnail { overflow: hidden; }
#profile-grid .img-rounded { border-radius: 4px 4px 0 0;}

</style>

@endsection


@section('content')

<section class="heading breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h1 class="page_title">New Product</h1>
            </div>
            <div class="col-xs-6">
                <div class="breadcrumbs text-right">
                    <a class="breadcrumbs_item home" href="{{ route('index') }}">Home</a><span
                        class="breadcrumbs_delimiter icon-right-open"></span><span class="breadcrumbs_item current">New Product</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
<section id="profiles" class="page">
  
		<div class="container">
				
			<div class="container-fluid">
				<div class="row" id="profile-grid">
				 @foreach($nproduct as $gallery)
					<div class="col-sm-3 col-xs-12 profile">
				        <div class="panel panel-default">
				          <div class="panel-thumbnail">
				          	<a href="#" title="image 1" class="thumb">
				          		<img src="{{ $gallery->featured }}" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
				          	</a>
				          </div>
				          <div class="panel-body">
				            <p class="profile-name">{{ $gallery->title }}</p>
				          </div>
				        </div>
				    </div>
                 @endforeach
                  
                  
   				 </div>
			</div>
		</div>

	</section>
	
	<!-- .modal-profile -->
	<div class="modal fade modal-profile" tabindex="-1" role="dialog" aria-labelledby="modalProfile" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" type="button" data-dismiss="modal">×</button>
						<h3 class="modal-title"></h3>
					</div>
					<div class="modal-body">
					</div>
					<div class="modal-footer">
						<button class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
        
			</div>
		</div>
	<!-- //.modal-profile --> 
   
</section>






    

@endsection