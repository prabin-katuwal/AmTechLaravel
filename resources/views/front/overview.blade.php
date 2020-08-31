@extends('front.main')


@section('content')

       <section class="heading breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <h1 class="page_title">Overview</h1>
                    </div>
                    <div class="col-xs-6">
                        <div class="breadcrumbs text-right">
                            <a class="breadcrumbs_item home" href="{{ route('index') }}">Home</a><span
                                class="breadcrumbs_delimiter icon-right-open"></span><span class="breadcrumbs_item current">Overview</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wthree-row pt-sm-3  pb-sm-5 pb-3 container qad">

                <h2>INTRODUCTION:</h2>
                <div class="row">
                <div class="col-lg-12">
                <p>AMTECH MED (P) LTD is a pharmaceutical company situated in Katahari-4, Morang, NEPAL. The company was established in 2004 and formal production started on 2005. Today, Amtech has over 250 people working as company family members in different departments of F, R&D, Production, QC & QA for the quality products. Amtech is a WHO-GMP certified company has been awarded ISO 9001:2015 & 14001:2015 by United Registrar of Systems (URS) acknowledging quality consciousness with manufacturing facility at per with international standards.</p>
                <p>Amtech has focused on combining the experience and knowledge of our staff with innovative applications of technology, to make sure that we get the right products to the right people as quickly and accurately as possible. We believe these objectives will enable us to remain at the forefront of Product supply, and intend to work closely with our customers to provide a mutually beneficial service for the future. </p>
                
                <p>Currently Amtech is involved in manufacturing of Tablet, Capsule, Ointment-Creams, Oral Liquid and Cephalosporin Tablets & Dry Syrup preparations. With the tagline “Total commitment towards a healthier tomorrow” our company remains committed aggressively pursuing the mission to add vitality to life by bringing quality products at affordable price. </p>
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