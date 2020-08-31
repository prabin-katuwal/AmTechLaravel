@extends('front.main')


@section('content')

       <section class="heading breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <h1 class="page_title">Guiding Policies</h1>
                    </div>
                    <div class="col-xs-6">
                        <div class="breadcrumbs text-right">
                            <a class="breadcrumbs_item home" href="{{ route('index') }}">Home</a><span
                                class="breadcrumbs_delimiter icon-right-open"></span><span class="breadcrumbs_item current">Guiding Policies</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wthree-row pt-sm-3  pb-sm-5 pb-3 container qad">

                <h2>COMPANY POLICY:</h2>
                <div class="row">
                <div class="col-lg-12">
                <p>Quality Policy: We are committed to manufacturing and distributing the highest quality of pharmaceutical finished products for the patients towards a healthier tomorrow, at affordable price by continuous improvement in advance technology, formulation & development, skilled and dedicated human resource through extensive training according to WHO-GMP guidelines.</p>
                <h2>Environmental Policy: </h2>
                <p>Amtech is committed to minimizing the environmental impacts by continuous improvement in environmental performance, conserving the natural resources and prevention of pollution through compliance with applicable environmental legal obligations to develop excellent working environmental condition & community by: </p>
                
                <ul style="list-style-type:circel">
                <li>being efficient in energy usage and reduce consumption of paper, energy, water and fuel</li>
                <li>minimizing waste and increasing recycling</li>
                <li>understanding and complying with customer, legal and other requirements</li>
                <li>using sustainable products</li>

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