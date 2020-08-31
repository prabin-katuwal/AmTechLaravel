@extends('front.main')


@section('content')



<section class="fullwidth">
        <div class="container">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="{{ asset('front/images/slide-1.jpg') }}" alt=""/>
                        <div class="slide_description_wrapper">
                            <div class="container">
                                <div class="slide_description">
                                    <div>

                                        <a class="btn btn-default btn-lg slide_button" href="#contact">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('front/images/slide-2.jpg') }}" alt=""/>
                        <div class="slide_description_wrapper">
                            <div class="container">
                                <div class="slide_description">
                                    <div>
                                      
                                        <a class="btn btn-default btn-lg slide_button" href="#contact">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
        
                </ul>
            </div>
        </div>
    </section>

    <section class="">
<!--Welcome Message-->

        <section id="welcome_section_2">
            <div class="container">
                <div class="row">
                <h3 class="title margin-bottom-middle ">Welcome to <span class="text-primary">AMTECH MED(P) LTD</span></h3>
                    <div class="col-md-5 col-sm-7">
                        <img src="{{ asset('front/images/home_3_11.jpg') }}" alt="">
                    </div>
                    <div class="col-md-7 col-sm-5 shift">

                        <p>With our distinct vision to become a dominant player in Nepalese pharmaceutical sector our journey started from 2004. At AMTECH MED (P) LTD our efforts make us set benchmarks in pharmaceutical fraternity. For more than a decade, we have been manufacturing affordable quality products trusted by healthcare professionals and patients. Today, we have a robust presence in developing pharmaceutical market of Nepal. This WHO-GMP certified company has been awarded ISO 9001:2015& 14001:2015 byUnited Registrar of Systems (URS) acknowledging quality consciousness with manufacturing facility at par with international standards.</p>
                    </div>
              
                </div>
            </div>

            <div class="container">
            <h2>Feature Product</h2>
            <section class="customer-logos slider">
                  @foreach($fproduct as $f)
                  <div class="slide"><img src="{{ $f->featured }}"></div>
                  @endforeach
            </section>

            </div>



                  <div id="services" class="container">
                  <div class="row">

                  <div class="col-md-3 col-sm-4 services_sidebar ">
                    
                        <aside class="widget_nav_menu">
                              <ul class="nav nav-pills nav-stacked services_menu">
                            
                              <li role="presentation" class="active"><a
                                          {{-- a data-toggle="tab" href="#Capsule">{{ $Capsule->name }}</a> --}}
                              </li>

                               <li role="presentation" class=""><a
                                          {{-- a data-toggle="tab" href="#Liquid">{{ $Liquid->name }}</a> --}}
                              </li>

                               <li role="presentation" class=""><a
                                          {{-- a data-toggle="tab" href="#Cephalosporin">{{ $Cephalosporin->name }}</a> --}}
                              </li>

                               <li role="presentation" class=""><a
                                          a data-toggle="tab" href="#Ointment"></a>
                              </li>

                               <li role="presentation" class=""><a
                                          a data-toggle="tab" href="#Tablet"></a>
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

              {{-- @foreach($Capsule->product()->orderBy('created_at','DESC')->get() as $m)
            
            <tr>
                  <td>{{ $m->productname }}</td>
                  <td>{{ $m->composition}}</td>
                  <td>{{ $m->packsize}}  </td>
                  <td>{{ $m->dosage}}</td>
            </tr>

            @endforeach --}}
      

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
            
         
              {{-- @foreach($Liquid->product()->orderBy('created_at','DESC')->get() as $m)
            
            <tr>
                  <td>{{ $m->productname }}</td>
                  <td>{{ $m->composition}}</td>
                  <td>{{ $m->packsize}}  </td>
                  <td>{{ $m->dosage}}</td>
            </tr>

            @endforeach --}}
      

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
            
          
              {{-- @foreach($Cephalosporin->product()->orderBy('created_at','DESC')->get() as $m)
            
           <tr>
                  <td>{{ $m->productname }}</td>
                  <td>{{ $m->composition}}</td>
                  <td>{{ $m->packsize}}  </td>
                  <td>{{ $m->dosage}}</td>
            </tr>
            
            @endforeach --}}
      

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
            
          
              {{-- @foreach($Ointment->product()->orderBy('created_at','DESC')->get() as $m)
            
            <tr>
                  <td>{{ $m->productname }}</td>
                  <td>{{ $m->composition}}</td>
                  <td>{{ $m->packsize}}  </td>
                  <td>{{ $m->dosage}}</td>
            </tr>

            @endforeach --}}
      

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
            
          
              {{-- @foreach($Tablet->product()->orderBy('created_at','DESC')->get() as $m)
            
            <tr>
                  <td>{{ $m->productname }}</td>
                  <td>{{ $m->composition}}</td>
                  <td>{{ $m->packsize}}  </td>
                  <td>{{ $m->dosage}}</td>
            </tr>

            @endforeach --}}
      

            </tbody>
            </table>

            </div> 

        </div>




      </div>

      </div>
</div>

        
         
         


    <section id="contact_form_section" class="sc_parallax_gradient sc_parallax" data-parallax-speed="0.3" data-parallax-x-pos="50%" data-parallax-y-pos="50%">
        <div class="sc_parallax_content">
            <div class="sc_parallax_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h3 class="sc_title">Inquiry Form</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <form  method="post" action="{{ route('inquiry.store') }}" role="form" id="contactForm" data-toggle="validator" class="shake">
						{{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" name="lname" id="last-name" placeholder="Last name" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <textarea id="message" class="form-control" name="msg" rows="6" placeholder="Enter your message" required></textarea>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" name="service" id="service" placeholder="I'm interested in service" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <button type="submit" id="form-submit" class="btn btn-default btn-lg pull-right ">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
 
    @if(count($njob) > 0)
      {
      @foreach($njob as $n)
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Notice Board</h4>
      </div>
      <div class="modal-body">
      <img src="{{ $n->featured }}" class="img-responsive " >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

    <script type="text/javascript">
          $(window).load(function(){        
          $('#myModal1').modal('show');
          }); 
       </script>
    @endforeach

 
    }
   @else

   @endif

 

  </div>
</div>




@endsection