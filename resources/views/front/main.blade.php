<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
@include('front.includes.head')
</head>
<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

   <div id="box_wrapper" class="header_style_2">

   @include('front.includes.header')   

     @yield('content')

   @include('front.includes.footer') 
   

</div><!-- eof #box_wrapper -->


        <!-- libraries -->
        <script src="{{ asset('front/js/vendor/modernizr-2.6.2.min.js') }}"></script>
       
        <script src="{{ asset('front/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('front/js/vendor/jquery.appear.js') }}"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>


         <script src="{{ asset('front/js/custom.js') }}"></script>

        <!-- superfish menu  -->
        <script src="{{ asset('front/js/vendor/superfish.js') }}"></script>

        <!-- page scrolling -->
        <script src="{{ asset('front/js/vendor/jquery.ui.totop.js') }}"></script>

        <!-- sliders, filters, carousels -->
        <script src="{{ asset('front/js/vendor/jquery.flexslider-min.js') }}"></script>

        <!-- custom scripts -->
        <script src="{{ asset('front/js/custom/front.min.js') }}"></script>
        <script src="{{ asset('front/js/custom/utils.min.js') }}"></script>
        <script src="{{ asset('front/js/custom/shortcodes_init.min.js') }}"></script>
    
       

     <script>
        /* show lightbox when clicking a thumbnail */
            $('a.thumb').click(function(event){
              event.preventDefault();
              var content = $('.modal-body');
              content.empty();
                var title = $(this).attr("title");
                $('.modal-title').html(title);      	
                content.html($(this).html());
                $(".modal-profile").modal({show:true});
            });

          });
        </script>

    </body>
</html>