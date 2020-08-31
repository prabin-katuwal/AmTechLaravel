@extends('front.main')

@section('content')


<section class="heading breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <h1 class="page_title">All Posts</h1>
                    </div>
                    <div class="col-xs-6">
                        <div class="breadcrumbs text-right">
                            <a class="breadcrumbs_item home" href="index.html">Home</a><span
                                class="breadcrumbs_delimiter icon-right-open"></span><span class="breadcrumbs_item current">All Posts</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <div class="content">
                        @foreach($posts as $post)
                            <article class="post_item post_item_excerpt">
                                <h5 class="post_title"><a href="#"><span class="post_icon icon-book-2"></span>{{ $post->title }}</a>
                                </h5>

                                <div class="post_info">
                                    <span class="post_info_item post_info_posted"><a href="{{ route('news.single', ['id' => $post->id])}}" class="post_info_date">{{ $post->created_at->toFormattedDateString() }}</a></span>
                                    <span class="post_info_item post_info_posted_by">by <a href="#"
                                                                                           class="post_info_author">amtech</a></span>
                                  
                                </div>
                                <div class="post_featured">
                                    <div class="post_thumb"
                                         data-image="Depositphotos_1761864_original-750x422.jpg"
                                         data-title="">
                                        <a class="hover_icon hover_icon_link"
                                           href="{{ route('news.single', ['id' => $post->id])}}"><img class="img-responstive"
                                                         width="750" height="422"
                                                         alt=""
                                                         src="{{ $post->featured }}"></a>
                                    </div>
                                </div>

                                <div class="post_content clearfix">
                                    <div class="post_descr">
                                        <p>{!! str_limit($post->content, 200) !!}</p>
                                        <a href="{{ route('news.single', ['id' => $post->id])}}" class="btn btn-default">Read More</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach


                
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3 col-lg-offset-1">
                    <div class="sidebar">
                    <aside class="widget widget_categories"><h5 class="widget_title">Quick Links </h5>
                        <ul>
                            <li class="cat-item"><a href="#">Home</a> 
                            </li>
                            <li class="cat-item"><a href="#">About</a> 
                            </li>
                            <li class="cat-item"><a href="#">Products</a>
                            </li>
                            <li class="cat-item"><a href="#">News</a>
                            </li>
                            <li class="cat-item"><a href="#">Contact</a>
                            </li>
                        </ul>
                    </aside>
                
        
                    </div>
                    </div>
                </div>
            </div>
        </section>



	
    
    @endsection