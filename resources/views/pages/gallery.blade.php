@extends('layouts.app')

@section('content')
<div class="page-content custom-img-background dark page-title page-title-1 mb-100" style="background-image: url('/storage/galerija.jpg');">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-12 start -->
            <div class="col-md-12 centered">
                <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                    <h1><span>Galerija</span></h1>
                    <h1>POGLEJTE IN SE PREPIRČAJTE </h1>
                </div><!-- .custom-heading.style-1 end -->
            </div><!-- .col-md-12 end -->
          
        
    </div><!-- .container end -->
</div><!-- .page-content end -->
</div><!-- .row end -->


    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <ul id="galleryitems" class="isotope isotopeitems-full">

                        @if(count($slike) >= 1)

                        @foreach ($slike as $key => $slika)
                    <li class="col-xs-12 col-md-6 col-lg-6 isotope-item">
                        
                        <figure class="gallery-item-container">
                            <div class="gallery-img">
                                <img src="/storage/cover_images/{{$slika->cover_image}}" alt=" "/>

                                <div class="hover-mask-container">
                                    <div class="hover-zoom">
                                        <a href="/storage/cover_images/{{$slika->cover_image}}"class="triggerZoom fa fa-search"></a>
                                    </div><!-- .hover-zoom end -->
                                </div><!-- .hover-mask-container end -->
                            </div><!-- .gallery-img end -->
                        </figure><!-- .gallery-item-container end -->
                    </li><!-- .isotope-item end -->
 @endforeach
 @else
 
 <p style="text-align:center">V galeriji ni slik</p>
 @endif



                    
                </ul><!-- #galleryitems.isotope end -->
            </div><!-- .row end -->
        </div><!-- .container-fluid end -->
    </div><!-- .page-content end -->

@endsection
