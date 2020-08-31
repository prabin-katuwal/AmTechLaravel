@extends('front.main')


@section('content')

       <section class="heading breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <h1 class="page_title">Mrp List</h1>
                    </div>
                    <div class="col-xs-6">
                        <div class="breadcrumbs text-right">
                            <a class="breadcrumbs_item home" href="{{ route('index') }}">Home</a><span
                                class="breadcrumbs_delimiter icon-right-open"></span><span class="breadcrumbs_item current">Mrp List</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


            
         <div id="services" class="container-fluid">
                  <div class="row">

                  <div class="col-md-3 col-sm-4 services_sidebar ">
                        <h3 class="margin-top-no">Our Products</h3>
                        <aside class="widget_nav_menu">
                              <ul class="nav nav-pills nav-stacked services_menu">
                            
                              <li role="presentation" class="active"><a
                                          a data-toggle="tab" href="#Capsule">{{ $Capsule->name }}</a>
                              </li>

                               <li role="presentation" class=""><a
                                          a data-toggle="tab" href="#Liquid">{{ $Liquid->name }}</a>
                              </li>

                               <li role="presentation" class=""><a
                                          a data-toggle="tab" href="#Cephalosporin">{{ $Cephalosporin->name }}</a>
                              </li>

                               <li role="presentation" class=""><a
                                          a data-toggle="tab" href="#Ointment">{{ $Ointment->name }}</a>
                              </li>

                               <li role="presentation" class=""><a
                                          a data-toggle="tab" href="#Tablet">{{ $Tablet->name }}</a>
                              </li>
            
            
                              </ul>
                        </aside>
                        
                  </div>

         <div class="col-md-9 col-sm-8 content">
          
            <div  class="tab-content">  
  
            <div  id="Capsule" class="tab-pane fade in active" class="tab-pane fade in"   style="overflow-y:scroll; height:340px;">         
            <table class="table table-hover">
                  <thead>
                  <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Composition</th>
                        <th scope="col">Pack Size</th>
                        <th scope="col">Dosage Form</th>
                  </tr>
                  </thead>
            <tbody>

              @foreach($Capsule->mrp()->orderBy('created_at','DESC')->get() as $m)
            
            <tr>
                  <td>{{ $m->productname}}</td>
                  <td>{{ $m->composition}}</td>
                  <td>{{ $m->packsize}}  </td>
                  <td>{{ $m->mrp}}</td>
            </tr>

            @endforeach
      

            </tbody>
            </table>

            </div> 



                   <div  id="Liquid" class="tab-pane fade in " class="tab-pane fade in"   style="overflow-y:scroll; height:340px;">         
            <table class="table table-hover">
                  <thead>
                  <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Composition</th>
                        <th scope="col">Pack Size</th>
                        <th scope="col">Dosage Form</th>
                  </tr>
                  </thead>
            <tbody>
            
         
              @foreach($Liquid->mrp()->orderBy('created_at','DESC')->get() as $m)
            
            <tr>
                  <td>{{ $m->productname}}</td>
                  <td>{{ $m->composition}}</td>
                  <td>{{ $m->packsize}}  </td>
                  <td>{{ $m->mrp}}</td>
            </tr>

            @endforeach
      

            </tbody>
            </table>

            </div> 





                   <div  id="Cephalosporin" class="tab-pane fade in " class="tab-pane fade in"   style="overflow-y:scroll; height:340px;">         
            <table class="table table-hover">
                  <thead>
                  <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Composition</th>
                        <th scope="col">Pack Size</th>
                        <th scope="col">Dosage Form</th>
                  </tr>
                  </thead>
            <tbody>
            
          
              @foreach($Cephalosporin->mrp()->orderBy('created_at','DESC')->get() as $m)
            
            <tr>
                  <td>{{ $m->productname}}</td>
                  <td>{{ $m->composition}}</td>
                  <td>{{ $m->packsize}}  </td>
                  <td>{{ $m->mrp}}</td>
            </tr>

            @endforeach
      

            </tbody>
            </table>

            </div> 





                   <div  id="Ointment" class="tab-pane fade in " class="tab-pane fade in"   style="overflow-y:scroll; height:340px;">         
            <table class="table table-hover">
                  <thead>
                  <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Composition</th>
                        <th scope="col">Pack Size</th>
                        <th scope="col">Dosage Form</th>
                  </tr>
                  </thead>
            <tbody>
            
          
              @foreach($Ointment->mrp()->orderBy('created_at','DESC')->get() as $m)
            
            <tr>
                  <td>{{ $m->productname}}</td>
                  <td>{{ $m->composition}}</td>
                  <td>{{ $m->packsize}}  </td>
                  <td>{{ $m->mrp}}</td>
            </tr>

            @endforeach
      

            </tbody>
            </table>

            </div> 





                   <div  id="Tablet" class="tab-pane fade in " class="tab-pane fade in"   style="overflow-y:scroll; height:340px;">         
            <table class="table table-hover">
                  <thead>
                  <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Composition</th>
                        <th scope="col">Pack Size</th>
                        <th scope="col">Dosage Form</th>
                  </tr>
                  </thead>
            <tbody>
            
          
              @foreach($Tablet->mrp()->orderBy('created_at','DESC')->get() as $m)
            
            <tr>
                  <td>{{ $m->productname}}</td>
                  <td>{{ $m->composition}}</td>
                  <td>{{ $m->packsize}}  </td>
                  <td>{{ $m->mrp}}</td>
            </tr>

            @endforeach
      

            </tbody>
            </table>

            </div> 

        </div>




      </div>

      </div>
</div>



    

@endsection