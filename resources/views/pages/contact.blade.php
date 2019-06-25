@extends('layouts.app')

@section('content')
 
<!-- .page-content start -->
<div class="page-content custom-img-background dark page-title page-title-1 mb-100" style="background-image: url('/storage/about3.jpg');">
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .col-md-12 start -->
                <div class="col-md-12 centered">
                    <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                        <h1><span style="color:silver ">Vas kaj zanima?</span></h1>
                        <h1 style="color:black">POŠLJITE NAM SPOROČILO</h1>
                    </div><!-- .custom-heading.style-1 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

      <!-- .page-content start -->
      <div class="page-content">
            <!-- .container start -->
            <div class="container">
         

                <!-- .row start -->
                <div class="row">
                    <div class="col-md-12 centered">
                        <p class="emphasized-text">Telefon: <span>+386 40 851 282</span></p>
                        <p class="emphasized-text">Email: <span>info@mas-catering.si</span></p>
                        <!-- form start -->
                        <form class="wpcf7">
                            <fieldset>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" class="wpcf7-text" id="contact-name" placeholder="Your name...">
                                </span>
                                <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" name="email" class="wpcf7-text" id="contact-email" placeholder="Email...">
                                </span>
                            </fieldset>

                            <fieldset>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <textarea rows="8" class="wpcf7-textarea" id="contact-message" placeholder="Message..."></textarea>
                                </span>
                            </fieldset>
                            <input type="submit" class="wpcf7-submit btn btn-big black btn-centered" value="Send">
                        </form><!-- .wpcf7 end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->
    

    @endsection