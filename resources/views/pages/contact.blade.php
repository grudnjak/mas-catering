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
                       

                        <form>
                                <div class="form-group">
                                        <label for="name">Ime in priimek:</label>
                                        <input type="text" class="form-control" id="name" placeholder="Ime in Priimek" required>
                                      </div>
                                <div class="form-group">
                                  <label for="email">E-poštni naslov:</label>
                                  <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                                </div>
                                <div class="form-group">
                                        <label for="date">Datum:</label>
                                        <input type="date" class="form-control" id="date" required>
                                      </div>
                                      <div class="form-group">
                                            <label for="date">Št. ljudi:</label>
                                            <input type="number" class="form-control" id="people">
                                          </div>      
                                <div class="form-group">
                                  <label for="type">Vrsta cateringa</label>
                                  <select class="form-control" id="type" required>
                                    <option>Topli</option>
                                    <option>Hladni</option>
                                    <option>Topli in hladni</option>
                                    <option>Izposoja šotora in inventarja</option>
                                    <option>Strežba</option>
                                    <option>Drugo</option>
                                  </select>
                                </div>
                                
                                <div class="form-group">
                                  <label for="info">Dodatne informacije</label>
                                  <textarea class="form-control" id="info" rows="5" required></textarea>
                                </div>

                                <button type="submit" class="btn btn-big gold">Pošlji povpraševanje</button>
                              </form>



                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->
    
    
    @endsection