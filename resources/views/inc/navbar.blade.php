    <!-- .header-wrapper start -->
    <div id="header-wrapper">
            <!-- #header start -->
            <header id="header">

                <!-- Main navigation and logo container -->
                <div class="header-inner">
                    <!-- .container start -->
                    <div class="container">
                        <!-- .main-nav start -->
                        <div class="main-nav">
                            <!-- .row start -->
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- .navbar start -->
                                    <nav class="navbar navbar-default nav-left">									

                                        <!-- .navbar-header start -->
                                        <div class="navbar-header">
                                            <!-- .logo start -->
                                            <div class="logo">
                                                <a href="{{ url('/') }}"> 
                                                      <img src="/storage/logo-mas.png" alt="Maš logo">
                                                </a>
                                            </div><!-- logo end -->
                                        </div><!-- .navbar-header end -->

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse">
                                            <ul class="nav navbar-nav pi-nav">
                                                <li >
                                                    <a href="/">DOMOV</a> 
                                                </li>

                                                <li ><a href="/about">NAJINA ZGODBA</a>
                                                </li>
                                                <li>
                                                        <a href="/catering">CATERING</a>                                           
                                                </li>
                                                <li >
                                                    <a href="/shop">MAŠ ZA MAL'CO</a> 
                                                    
                                                </li>
                                               
                                                <li>
                                                        <a href="/gallery">GALERIJA</a>     
                                                                          
                                                </li>
                                                <li>
                                                        <a href="/contact">KONTAKT</a>     
                                                                          
                                                </li>

                                                @if(!Auth::guest())
                                                 <li>
                                                 <a href="/home">home</a>     

                                                 </li>

                                             @endif
                                      
                                             
                                            </ul><!-- .nav.navbar-nav.pi-nav end -->

                                            <!-- Responsive menu start -->
                                            <div id="dl-menu" class="dl-menuwrapper">
                                                <button class="dl-trigger">Meni</button>

                                                <ul class="dl-menu">
                                                        <li >
                                                                <a href="/">DOMOV</a> 
                                                            </li>
            
                                                            <li ><a href="/about">NAJINA ZGODBA</a>
                                                            </li>
                                                            <li>
                                                                    <a href="/catering">CATERING</a>                                           
                                                            </li>
                                                            <!--<li>
                                                                <a href="/offer">PONUDBA</a>                                          
                                                            </li>-->
                                                            <li >
                                                                <a href="/shop">MAŠ ZA MAL'CO</a> 
                                                                
                                                            </li>
                                                            
                                                            <li>
                                                                    <a href="/gallery">GALERIJA</a>     
                                                                                      
                                                            </li>

                                        @if(!Auth::guest())
                                                 <li>
                                                 <a href="/home">DASHBOARD</a>     

                                                 </li>

                                             @endif

                                                </ul><!-- .dl-menu end -->
                                            </div><!-- (Responsive menu) #dl-menu end -->
                                        </div><!-- .navbar.navbar-collapse end --> 
                                    </nav><!-- .navbar end -->
                                </div><!-- .col-md-12 end -->
                            </div><!-- .row end -->            
                        </div><!-- .main-nav end -->
                    </div><!-- .container end -->
                </div><!-- .header-inner end -->
            </header><!-- #header end -->
        </div><!-- #header-wrapper end -->
