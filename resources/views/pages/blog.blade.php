
@include('welcome.header')

<!-- ==============blog-setion-one============== -->

<section class="blog-section-one pt-5 pb-5">
    <div class="container pt-5 pb-5">
      <h1 class="text-white font-weight-bold text-center display-3 pt-5">Our Blogs<i class="fas fa-square outsourceo-dot"></i></h1>
      <p class="text-white text-center pb-5">We make outsourcing virtual employees simple, easy, and cost-effective.</p>
    </div>
</section>

<!-- ==============section-two============ -->
<section class="blog-section-two pt-5">
   <div class="container">
      <h1 class="blueColor font-weight-bold text-center">BLOGS<i class="fas fa-square outsourceo-dot"></i></h1>
      <div class="row ">
        <div class="col-md-4">
          <div class="p-2">
          <a href="{{_('why-digital-marketing')}}">
            <img src="media/pages/blog/Digital-Marketing.jpg" class="img-fluid" alt="Digital Marketing">
          <h4 class=" blueColor pt-2">WHY DIGITAL MARKETING IS IMPORTANT FOR YOUR BUSINESS?</h4></a>
            <p class="text-justify">The field of Digital Marketing is continuously evolving. It requires businesses to adapt to the modern changes in this field.</p>
            <p><a href="{{_('why-digital-marketing')}}" class="text-dark">Learn More <i class="fas fa-caret-right"></i></a></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-2">
          <a href="{{_('facebook-ads-trends')}}">
            <img src="media/pages/blog/LATEST FACEBOOK ADS TRENDS.jpg" class="img-fluid" alt="simplex outsourceing client">
            <h4 class=" blueColor pt-2">LATEST FACEBOOK ADS TRENDS (2021) FOR A BETTER RETURN ON AD SPEND (ROAS)<i class="fas fa-square outsourceo-dot-sm"></i></h4>
          </a>
            <p class="text-justify">Since Facebook Advertising is changing & evolving continuously, therefore, by going with all the above-mentioned trends</p>
            <p><a href="{{_('facebook-ads-trends')}}" class="text-dark">Learn More <i class="fas fa-caret-right"></i></a></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-2">
          <a href="{{_('graphic-design-trends')}}">
            <img src="media/pages/blog/Graphic Design Trends.jpg" class="img-fluid" alt="simplex outsourceing client">
            <h4 class=" blueColor pt-2 text-uppercase">8 Graphic Design Trends you cannot ignore in Modern Marketing in 2022 (Infographic)<i class="fas fa-square outsourceo-dot-sm"></i></h4>
            </a>
            <p class="text-justify">Struggling to improve & find the best marketing approach in 2022?
              Curious to learn about the latest graphic..</p>
            <p><a href="{{_('graphic-design-trends')}}" class="text-dark">Learn More <i class="fas fa-caret-right"></i></a></p>
          </div>
        </div>
      </div>
   </div>
</section>
<!-- ==============blogs-section-three============ -->


<!-- ==============blogs-section-four============ -->
<section class="about-section-four pt-5 pb-5" >
  <div class="container text-center pt-5 pb-5 mt-5 mb-5">
  <h1 class="p-3 font-weight-bold">WE ARE HERE TO HELP YOU IN ALL BUSINESS DOMAINS<i class="fas fa-square outsourceo-dot"></i></h1>
    <p>We provide dedicated virtual outsourcing service to increase your workforce productivity.</p>
    <p>We deliver results-oriented service so that you can grow your sales and business in every domain.</p>
    <p>We make hiring professional virtual teams Hassle-Free, Quick & Cost-Effective!</p>
    <br><a class="nav-btn-sm" href="{{_('get-a-quote')}}">GET A FREE QUOTE </a>
  </div>
</section>



@include('welcome.footer')
