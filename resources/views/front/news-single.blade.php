@extends('front.main')

@section('content')


<section class="heading breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <h1 class="page_title">{{ $post->title }}</h1>
                    </div>
                    <div class="col-xs-6">
                        <div class="breadcrumbs text-right">
                            <a class="breadcrumbs_item home" href="{{ route('index' )}}">Home</a><span
                                class="breadcrumbs_delimiter icon-right-open"></span><span class="breadcrumbs_item current">Post Single</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="no_vertical_padding">
        <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-8">
            <div class="content">
                <article class="post_item">
                    <h5 class="post_title">{{ $post->title }}</h5>
                    <section class="post_featured">
                        
                    <div class="post_info">
                                    <span class="post_info_item post_info_posted"><a href="{{ route('news.single', ['id' => $post->id])}}" class="post_info_date">{{ $post->created_at->toFormattedDateString() }}</a></span>
                                    <span class="post_info_item post_info_posted_by">by <a href="#"
                                                                                           class="post_info_author">amtech</a></span>
                                  
                                </div>
                        <div class="post_thumb"
                             data-image="images/Depositphotos_24652121_original.jpg"
                             data-title="How to Prevent Dental Caries">
                            <a class="hover_icon hover_icon_view"
                               href="images/Depositphotos_24652121_original.jpg"
                               title="How to Prevent Dental Caries" rel="magnific"><img class="img-responsive" width="1150"
                                                                                        height="647"
                                                                                        alt=""
                                                                                        src="{{ $post->featured }}"
                                                                                        itemprop="image">
                            </a>
                        </div>
                    </section>

                    <section class="post_content" itemprop="reviewBody"><p>Sed ut perspiciatis, unde omnis iste natus error
                        sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo
                        inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam
                        voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
                        eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor
                        sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore
                        et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem
                        ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>

                    </section>
                  
                </article>
            
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