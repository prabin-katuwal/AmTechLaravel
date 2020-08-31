@extends('front.main')


@section('content')


<style>
  .iframe-container{
    position: relative;
    width: 100%;
    
}
.iframe-container > *{
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: 0;
    padding: 0;
    height: 100%;
    width: 100%;
}

.iframe-container{
  margin-bottom: 50px;
  background: #eee;
}
</style>

<section class="heading breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <h1 class="page_title">Contacts</h1>
                    </div>
                    <div class="col-xs-6">
                        <div class="breadcrumbs text-right">
                            <a class="breadcrumbs_item home" href="{{ route('index')}}">Home</a><span
                                class="breadcrumbs_delimiter icon-right-open"></span><span class="breadcrumbs_item current">Contacts</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <style>
    .google-maps {
        position: relative;
        padding-bottom: 30%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
</style>

    <div class="google-maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.9401643145275!2d87.28329634244645!3d26.457657626677975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef75ce7ff6ac85%3A0xf1435f2b00ea8be!2sAmtech%20Pvt%20Ltd!5e0!3m2!1sen!2snp!4v1574670597725!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    

        <section id="contact_info_section_2">
        


     <div class="container">
        <h3>CORPORATE OFFICE:</h3><br>
            <div class="row text-center">
                <div class="col-sm-3 col-xs-6 first-box">
                <h1><span class="glyphicon glyphicon-earphone"></span></h1>
                <h3>Phone</h3>
                <p>00977-21-522153, 522183, 526618</p><br>
            </div>
            <div class="col-sm-3 col-xs-6 second-box">
                <h1><span class="glyphicon glyphicon-home"></span></h1>
                <h3>Location</h3>
                <p>Opp. Chest Clinic, 
                Rangeli Road, Biratnagar-12, Nepal
                </p><br>
            </div>
            <div class="col-sm-3 col-xs-6 third-box">
                <h1><span class="glyphicon glyphicon-send"></span></h1>
                <h3>E-mail</h3>
                <p>amtechmed55@gmail.com</p><br>
            </div>
            <div class="col-sm-3 col-xs-6 fourth-box">
                <h1><span class="glyphicon glyphicon-leaf"></span></h1>
                <h3>FAX:</h3>
                <p> 021-530121</p><br>
            </div>
            </div>

            <h3>FACTORY:</h3><br>
            <div class="row text-center">
                <div class="col-sm-3 col-xs-6 first-box">
                <h1><span class="glyphicon glyphicon-earphone"></span></h1>
                <h3>Phone</h3>
                <p>00977-21-419030</p><br>
            </div>
            <div class="col-sm-3 col-xs-6 second-box">
                <h1><span class="glyphicon glyphicon-home"></span></h1>
                <h3>Location</h3>
                <p>Katahari-4, Morang, Nepal
                </p><br>
            </div>
            <div class="col-sm-3 col-xs-6 third-box">
                <h1><span class="glyphicon glyphicon-send"></span></h1>
                <h3>E-mail</h3>
                <p>amtechfactory@yahoo.com</p><br>
            </div>
            <div class="col-sm-3 col-xs-6 fourth-box">
                <h1><span class="glyphicon glyphicon-leaf"></span></h1>
                <h3>WEBSITE:</h3>
                <p> amtechmed.com.np</p><br>
            </div>
            </div>
    
        </div>
        </section>

        <section id="contact_form_section_2" class="light_section">
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
        </section>


@endsection