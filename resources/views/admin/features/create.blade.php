
@extends('admin.backend')

@section('title', 'Create Features')

@section('summernote-css')

<link rel="stylesheet" href="{{ asset('assets/js/plugins/summernote/summernote-bs4.css') }}">

@endsection



@section('content')

<div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                        Create new Post
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item">Post</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Create</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

<div class="block">
   
        <div class="content content-narrow">
        <form action="{{ route('features.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }} 
        
                <div class=" col-xl-12">
                     @include('admin.includes.errors')

                        <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" >
                         </div>

                         <div class="form-group">
                                <label for="featured">Featured Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="featured" name="featured">
                                    <label class="custom-file-label" for="featured">Choose file</label>
                                </div>
                            </div>
                
                          <div class="form-group">
                                <button class="btn btn-success" type="submit">Store Post</button>
                          </div>

                 
                </div>

        </form>
    </div>
</div> 

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
        var editor_config = {
          path_absolute : "/",
          selector: "textarea.my-editor",
          plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
          ],
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
          relative_urls: false,
          file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
      
            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
              cmsURL = cmsURL + "&type=Images";
            } else {
              cmsURL = cmsURL + "&type=Files";
            }
      
            tinyMCE.activeEditor.windowManager.open({
              file : cmsURL,
              title : 'Filemanager',
              width : x * 0.8,
              height : y * 0.8,
              resizable : "yes",
              close_previous : "no"
            });
          }
        };
      
        tinymce.init(editor_config);
      </script>


@endsection





