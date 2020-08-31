@extends('front.main')


@section('content')

       <section class="heading breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <h1 class="page_title">Vacancy List</h1>
                    </div>
                    <div class="col-xs-6">
                        <div class="breadcrumbs text-right">
                            <a class="breadcrumbs_item home" href="{{ route('index') }}">Home</a><span
                                class="breadcrumbs_delimiter icon-right-open"></span><span class="breadcrumbs_item current">Vacancy List</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div id="services" class="container">
                  <div class="row">

        
                  <table class="table table-hover">
                  <thead>
                  <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Position</th>
                        <th scope="col">Required No</th>
                        <th scope="col">Qualification</th>
                        <th scope="col">Location</th>
                  </tr>
                  </thead>
                  <tbody>
           @foreach($job as $j)
            <tr>
                  <th scope="row">{{ $j->id }}</th>
                  <td>{{ $j->position }}   </td>
                  <td>{{ $j->reqno }}</td>
                  <td>{{ $j->qualification }}</td>
                  <td> {{ $j->location }}</td>
            </tr>
            @endforeach


      </tbody>
      </table>



      </div>

      </div>

    </section>



    

@endsection