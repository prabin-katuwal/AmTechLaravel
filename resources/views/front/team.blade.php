@extends('front.main')


@section('content')


<section class="heading breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <h1 class="page_title">Team Members</h1>
                    </div>
                    <div class="col-xs-6">
                        <div class="breadcrumbs text-right">
                            <a class="breadcrumbs_item home" href="{{ route('index') }}">Home</a><span
                                class="breadcrumbs_delimiter icon-right-open"></span><span class="breadcrumbs_item current">Team Members</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<section id="team_section_3" class="">
        <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3 class="title">AMTECHMED Board Director</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="sc_team_item sc_team_item_style_2">
                    <div class="sc_team_item_avatar"><img class="sc_image sc_image_shape_round" width="80"
                                                          height="80" alt=""
                                                          src="{{ asset('front/images/dr-joseph-phillips-400x400.jpg') }}">
                    </div>
                    <div class="team_item_info-container">
                        <div class="sc_team_item_info"><h5 class="sc_team_item_title"><a
                                href="/dr-joseph-phillips/">MANISH AGRAWAL</a></h5>

                            <div class="sc_team_item_position">Managing Director</div>
                          
                           
                            <div class="sc_team_item_description_span_icon_container">
                                <span class="sc_team_item_description_span_icon sc_icon icon-plus"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="sc_team_item sc_team_item_style_2">
                    <div class="sc_team_item_avatar"><img class="sc_image sc_image_shape_round" width="80"
                                                          height="80" alt=""
                                                          src="{{ asset('front/images/dr-joseph-phillips-400x400.jpg') }}">
                    </div>
                    <div class="team_item_info-container">
                        <div class="sc_team_item_info"><h5 class="sc_team_item_title"><a
                                href="/dr-joseph-phillips/">RAJ KUMAR AGRAWAL</a></h5>

                            <div class="sc_team_item_position">Chairman</div>

                            <div class="sc_team_item_description_span_icon_container">
                                <span class="sc_team_item_description_span_icon sc_icon icon-plus"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="sc_team_item sc_team_item_style_2">
                    <div class="sc_team_item_avatar"><img class="sc_image sc_image_shape_round" width="80"
                                                          height="80" alt="g"
                                                          src="{{ asset('front/images/dr-joseph-phillips-400x400.jpg') }}">
                    </div>
                    <div class="team_item_info-container">
                        <div class="sc_team_item_info"><h5 class="sc_team_item_title"><a
                                href="/dr-joseph-phillips/">SABITA AGRAWAL</a></h5>

                            <div class="sc_team_item_position">Director</div>
                            
                            <div class="sc_team_item_description_span_icon_container">
                                <span class="sc_team_item_description_span_icon sc_icon icon-plus"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="sc_team_item sc_team_item_style_2">
                    <div class="sc_team_item_avatar"><img class="sc_image sc_image_shape_round" width="80"
                                                          height="80" alt=""
                                                          src="{{ asset('front/images/dr-joseph-phillips-400x400.jpg') }}">
                    </div>
                    <div class="team_item_info-container">
                        <div class="sc_team_item_info"><h5 class="sc_team_item_title"><a
                                href="/dr-joseph-phillips/">MUKESH AGRAWAL</a></h5>

                            <div class="sc_team_item_position">Executive Director</div>
                            
                            <div class="sc_team_item_description_span_icon_container">
                                <span class="sc_team_item_description_span_icon sc_icon icon-plus"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        </div>
        </section>


@endsection