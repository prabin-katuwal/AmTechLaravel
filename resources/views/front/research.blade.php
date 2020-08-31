@extends('front.main')


@section('content')

       <section class="heading breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <h1 class="page_title">Research  Department</h1>
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

<div class="row">
<div class="col-lg-12">
<br><br>
<p>We have continued focus in formulation development. We are increasingly working on more complex and specialized areas to develop medicines to heal the world.Amtech has been investing manuficentlyon research and development.

Amtech believes that R&D holds the key of future success and sustainability of the industry is only possible through continuous quest for formulation innovations. For these very reasons, AmtechMed (P) Ltd has recently established technologically well equipped Formulation, Research & Development (FR&D) center. The FR&D lab consists of R&D model FBD, Mass mixer, Sifter,ICH Standard Stability Chamber walk in type, Turbo Stirrers,etc for formulations development.
Developed formulations are scaled up in controlled environment before the company launches commercial batches into the market.

 <br><br>
</p>
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