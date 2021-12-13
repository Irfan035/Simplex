
@include('welcome.header')

<!-- ==============About-setion-one============== -->

<section class="about-section-one">
    <div class="container p-5">
      <h1 class="text-white font-weight-bold text-center pt-4 display-3">About Us<i class="fas fa-square outsourceo-dot"></i></h1>
      <p class="text-white text-center">Our main Strength is our commitment & expertise to provide you Professional, <br>Dedicated & Productive Virtual Teams in any domain.</p>
    </div>
</section>

<!-- ==============section-two============ -->
<section class="about-section-two pt-5 pb-5">
   <div class="container pt-5">
      <h4 class="text-white text-center"><span class="bgOrangColor rounded pl-2 pr-2">ABOUT SIMPLEX</span></h4>
      <h1 class="blueColor font-weight-bold text-center">Our Achievements<i class="fas fa-square outsourceo-dot"></i></h1>
      <div class="row">
        <div class="col-md-4 text-center pt-3 facts">
          <div class="pt-3 p-2">
          <img src="media/pages/company/icon1.png" alt="simplex outsourceing client">
            <h1 class="text-center font-weight-bold blueColor pt-4">113</h1>
            <h5>Valued Clients</h5>
            <p>Our virtual hiring expertise allows your business to modernize your workflow, and increase organizational productivity.</p>
          </div>
        </div>
        <div class="col-md-4 text-center pt-3  facts">
          <div class="pt-3 p-2">
          <img src="media/pages/company/icon2.png" alt="simplex outsourceing client">
            <h1 class="text-center font-weight-bold blueColor pt-4">334</h1>
            <h5>Virtual Experts Around the Globe</h5>
            <p>Simplex Outsourcing helps you to stay competitive. Grow your business in new markets and increase your Sales growth in any domain.</p>
          </div>
        </div>
        <div class="col-md-4 text-center pt-3  facts">
          <div class="pt-3 p-2">
          <img src="media/pages/company/icon3.png" alt="simplex outsourceing client">
            <h1 class="text-center font-weight-bold blueColor pt-4">$25 Million</h1>
            <h5>Revenue in Last 3 Years</h5>
            <p>Double your sales growth & revenue through our dedicated, professional & trustworthy outsourcing service. Save your time & stop wasting dollar on over-rated freelancers. Choose us to hire Virtual Experts for You in any domain.</p>
          </div>
        </div>
      </div>
   </div>
</section>
<!-- ==============about-section-three============ -->
<section class="about-section-three pt-5 pb-5 bgBlueColor">
    <div class="container">
    <h1 class="text-center p-3">OUR COMPANY’S TIMELINE<i class="fas fa-square outsourceo-dot"></i></h1>
  <div class="row">
    <div class="col-lg-12">
        <div class="card">
                <div class="cd-horizontal-timeline loaded">
                    <div class="timeline">
                        <div class="events-wrapper">
                            <div class="events" style="width: 1800px;">
                                <ol>
                                    
                                    <li><a href="#0" data-date="20/04/2017" style="left: 480px;" class="selected">2014</a></li>
                                    <li><a href="#0" data-date="30/08/2017" style="left: 960px;">2021</a></li>
                                </ol>
                                <span class="filling-line" aria-hidden="true" style="transform: scaleX(0.281506);"></span>
                            </div>
                            <!-- .events -->
                        </div>
                        <!-- .events-wrapper -->
                        <ul class="cd-timeline-navigation">
                            <li><a href="#0" class="prev inactive">Prev</a></li>
                            <li><a href="#0" class="next">Next</a></li>
                        </ul>
                        <!-- .cd-timeline-navigation -->
                    </div>
                    <!-- .timeline -->
                    <div class="events-content" style="min-height: 225px;">
                        <ol>
                            
                            <li data-date="20/04/2017" class="selected">
                            <h4>2014</h4>
                                <hr>
                                <p>Our journey begins as a Virtual Outsourcing Solution Provider Company.</p>
                                <p><strong>Headquartered in Brooklyn, New York, USA.</strong> </p> <p>
                                Launched our operations as an independent business providing Virtual Outsourcing Solution.

                                    <br>
                                    
                                </p>
                            </li>
                           
                            <li data-date="30/08/2017">
                            <h4>
                                2021
                                        </h4>
                                <hr>
                                <p>7 Years of dedicated service in Providing Dedicated, Professional & Trustworthy Virtual Outsourcing Solutions to 113 clients & still counting….
                                </p>
                                <p>Completed 445 Successful Projects. Helped Clients in growing their sales & revenue & work productivity by providing dedicated & fully professional virtual teams in multiple domains.</p>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>

<!-- ==============about-section-four============ -->
<section class="about-section-four pt-5 pb-5">
  <div class="container text-center pt-5 pb-5 mt-5 mb-5">
    <h1 class="p-3 font-weight-bold">WE ARE HERE TO HELP YOU IN ALL BUSINESS DOMAINS<i class="fas fa-square outsourceo-dot"></i></h1>
    <p>We provide dedicated virtual outsourcing service to increase your workforce productivity.</p>
     <p> We deliver results-oriented service so that you can grow your sales and business in every domain.</p>
     <p>We make hiring professional virtual teams Hassle-Free, Quick & Cost-Effective!</p>
    <br><a class="nav-btn-sm" href="{{_('get-a-quote')}}">GET A FREE QUOTE!</a>
  </div>
</section>



@include('welcome.footer')
