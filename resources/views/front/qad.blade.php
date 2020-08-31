@extends('front.main')

@section('title', 'Quality Assurance Department')


@section('content')

       <section class="heading breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <h1 class="page_title">Quality Assurance Department</h1>
                    </div>
                    <div class="col-xs-6">
                        <div class="breadcrumbs text-right">
                            <a class="breadcrumbs_item home" href="{{ route('index') }}">Home</a><span
                                class="breadcrumbs_delimiter icon-right-open"></span><span class="breadcrumbs_item current">Quality Assurance Department</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wthree-row pt-sm-3  pb-sm-5 pb-3 container qad">

          <h1>Quality Assurance Department</h1>
          <div class="row">
          <div class="col-lg-12">
          <img src="{{ asset('front/images/quality-control.jpg') }}" class="img-responsive" alt=""/> <br>
          <p>AMTECH strives to achieve quality of the products and services. Its quality assurance department ensures that quality; safety and efficacy are designed and built into our products. QAD is fully self reliant department with qualified, dedicated and experienced pharmacists to ensure that all the functions of Quality Control Department (QCD), Production Department, Store and House Keeping are well controlled.</p>
          <ul style="list-style-type:circel">
          <li>Set up procedures for implementation of WHO-GMP</li>
          <li>Evaluating and approval of all validation protocols.</li>
          <li>Audit and approval of vendors</li>
          <li>Evaluating analyzing market complaints and batch Recall.</li>
          <li>Routine finished product stability.</li>
          <li>Assure regulatory and company standards.</li>
          <li>Release or Rejects finished products.</li>
          <li>Supervise change control system</li>
          <li>Perform self inspection and GMP training.</li>
          <li>Evaluation and approval of all final SOPS.</li>
          <li>Review and approval of all master Processing procedures, master packing procedures and master analytical procedures.</li>
          <li>o	Review and approval of all master Processing procedures, master packing procedures and master analytical procedures.</li>
          <li>Approval of final product specification.</li>

          </ul>
          </div>
          </div>
              </section>

              <script>
              function myFunction() {
              var input, filter, table, tr, td, i;
              input = document.getElementById("myInput");
              filter = input.value.toUpperCase();
              table = document.getElementById("myTable");
              tr = table.getElementsByTagName("tr");
              for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                  } else {
                    tr[i].style.display = "none";
                  }
                }       
              }
              }
              </script>

              </div>
          </div>
      
      <!-- //typo container -->
  </section>
<br>
    

@endsection