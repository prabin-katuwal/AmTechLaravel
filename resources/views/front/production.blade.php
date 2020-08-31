@extends('front.main')


@section('content')

       <section class="heading breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <h1 class="page_title">Production Department</h1>
                    </div>
                    <div class="col-xs-6">
                        <div class="breadcrumbs text-right">
                            <a class="breadcrumbs_item home" href="{{ route('index') }}">Home</a><span
                                class="breadcrumbs_delimiter icon-right-open"></span><span class="breadcrumbs_item current">Production Department</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        
        <section class="wthree-row pt-sm-3  pb-sm-5 pb-3 container qad">

<h1>Production Department:</h1>
<div class="row">
<div class="col-lg-12">
<img src="{{ asset('front/images/production.jpg') }}" class="img-responsive" alt=""/> <br>
Manufacturing is carried out as per national and international drug rules and regulations using technologically advanced machines and equipments. Manufacturing and quality excellence have been a thrust area at AMTECH MED (P) LTD. AMTECH operations started from manufacturing facility that was setup in 2005 at Katahari-4, Morang, Nepal. And over the last 14 years, AMTECH has setup for the manufacturing of its own brands. All of the AMTECH facilities are WHO-GMP certified for systems, and have the following dosage forms;
</div>
</div>
<br>
<div class="row mt-3">
<div class="col-lg-12">
Plant-I
 Block-I
Solid oral dosage forms: Tablets & Capsules
 Block-II
External or Topical dosage forms: Ointments & Creams
</div>
</div>
<div class="row mt-5">
  <div class="col-lg-12">
Plant-II
 Block-I
Liquid orals
 Block-II
</div>
</div>
<div class="row  mt-5">
  <div class="col-lg-12">
    <p style="margin-top:5%;">
    Solid oral dosage forms: Cephalosporin Tablets & Dry Syrup Some of the salient features of the design of the manufacturing facilities are as follows;</p>
    <ul style="list-style:circle">
    <li>The manufacturing facilities are in separate blocks.</li>
<li>Segregation of every critical procesfsing activity in each zone to avoid cross contamination.</li>
<li>No wood or asbestos used.</li>
<li>Each processing area has separate AHU’s.</li>
<li>Each processing area conforming room air change, pressure, flow direction & particle count.</li>
<li>RO system, online monitoring of pH, conductivity.</li>
</ul>
<p>The plants are equipped with high speed machine and integrated packaging lines from the best manufacturers in India & Nepal for the cost effectiveness like multi station tablet press, high speed liquid & Dry Syrup filling lines as well as capsules, creams and lotions are some of the examples.</p>
<br><br>
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

    

@endsection