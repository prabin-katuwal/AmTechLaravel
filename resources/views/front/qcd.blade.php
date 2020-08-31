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

<h1>Quality Control Department</h1>
<p>Significant steps have been taken to assure the quality of products. These steps include advanced training of personnel, procurement ofstate of the art inspecting and analytical equipments and modernization of the quality control area.</p>
<br>
<p>Department is independent of all other departments. The Quality Control Department controls all Raw materials, Bulk Product, intermediate product, finished Product, stability, Packing material, water and microbiology. QCD has been designed to suit the operations to be carried out in them. The environmental condition of the laboratory is maintained to meet the analytical requirements. QC department is well equipped with many of the advance instruments.</p>
<h3>Quality Control Laboratory consists principally of:</h3>
<ol>
<li>Microbiology Laboratory</li>
<li>Chemical Laboratory </li>
<li>Instrumental Laboratory 
</li>
</ol>
<p>Our technical staff comprises of well-trained and experienced chemists to ensure the quality of the products in conformity with the quality standards. They are familiar with GMP/GLP & ISO. 
Quality Control Department is fully aware of the fact that quality is always the first and truly is motivated by its quality policy:
</p>
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