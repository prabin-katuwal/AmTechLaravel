@extends('front.main')


@section('content')

       <section class="heading breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <h1 class="page_title">Production List</h1>
                    </div>
                    <div class="col-xs-6">
                        <div class="breadcrumbs text-right">
                            <a class="breadcrumbs_item home" href="{{ route('index') }}">Home</a><span
                                class="breadcrumbs_delimiter icon-right-open"></span><span class="breadcrumbs_item current">Production List</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


            
<div class="container">
 <div class="row">
<div class="tabpanel">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">

        @foreach($mrpcategory as $count => $mm)

            <li role="presentation" @if($count == 0) class="active" @endif>
                <a href="#tab-{{ $mm->id }}" aria-controls="#tab-{{ $mm->id }}" role="tab" data-toggle="tab">{{ $mm->name }}</a>
            </li>

        @endforeach 
    
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">

        @foreach($mrp as $count => $m)

            <div role="tabpanel" @if($count == 0) class="tab-pane active" @else class="tab-pane" @endif id="tab-{{ $m->id }}">

                <h2>{{ $m->productname  }}</h2>
                <h2>{{ $m->composition  }}</h2>

               

            </div>

        @endforeach 
        
    </div>

</div>

</div>
</div>


    

@endsection