
@include('welcome.header')

<!-- ==============contact-setion-one============== -->

<section class="contact-section-one bg-light pt-5 pb-5">
    <div class="container text-center">
            <h1 class="font-weight-bold blueColor display-2  pt-5">Contact Us<span class="OrangColor">!</span></h1>
            <p>We are here to help you in all business domains.</p>
            <br><a class="nav-btn-sm" href="{{_('get-a-quote')}}">Get Started</a> <br>
    </div>
</section>

<!-- ==============section-two============ -->
<section class="contact-section-two pb-4">
   <div class="container">
       <div class="row">
           <div class="col-md-4">
               <div class="contact-card p-3 rounded text-center">
               <i class="fas fa-phone-alt"></i>
               <h4>Phone</h4>
               <p>+1 (718) 785-2989</p>
               </div>
           </div>
           <div class="col-md-4">
               <div class="contact-card p-3 rounded text-center">
               <i class="far fa-envelope"></i>
               <h4>Email</h4>
               <p><a href="mailto:Info@simplexoutsourcing.com" class="text-dark">Info@simplexoutsourcing.com</a></p>
               </div>
           </div>
           <div class="col-md-4">
               <div class="contact-card p-3 rounded text-center">
               <i class="fas fa-map-marker-alt"></i>
               <h4>Location</h4>
               <p>898 Bay Ridge Avenue, Brooklyn, New York, USA</p>
               </div>
           </div>
       </div>
     
      
   </div>
</section>
<!-- ==============contact-section-three============ -->
<section class="contact-section-three pt-5 pb-5" >
    <div class="container">
    
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-white font-weight-bold display-5">Let's Start Conversation<i class="fas fa-square outsourceo-dot"></i></h1>
                    <div>
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @endif
                    </div>
                    <form id="contact-form" class="form-group pt-3 pb-3 needs-validation" method="POST" action="{{ route('contactForm') }}" novalidate>
                    @csrf
                         <!--Grid row-->
                        <div class="form-row">

                        <!--Grid column-->
                        <div class="col-md-6">
                        <input type="text" id="name" name="name" id="validationCustom01" placeholder="Your name" value="{{ old('name') }}"  class="form-control" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                        <input type="email" id="email" name="email" id="validationCustom02" placeholder="Your email" class="form-control" value="{{ old('email') }}" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        </div>
                        <!--Grid column-->

                        </div>
                        <!--Grid form-row-->

                        <div class="form-row">

                        <!--Grid column-->
                        <div class="col-md-6">
                        <input type="text" id="phone" name="phone" id="validationCustom03" placeholder="Phone" value="{{ old('phone') }}"  class="form-control" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                        <input type="text" id="subject" name="subject" id="validationCustom02" placeholder="Subject" class="form-control" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        @if ($errors->has('subject'))
                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                        @endif
                        </div>
                        <!--Grid column-->

                        </div>
                        <!--Grid form-row-->

                        <!--Grid form-row--> 
                        <div class="form-row">

                        <!--Grid column-->
                        <div class="col-md-12">
                        <textarea type="text" id="message" name="message" id="validationCustom04" placeholder="Your message" rows="2"  class="form-control md-textarea" required></textarea>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        @if ($errors->has('message'))
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        @endif
                        </div>
                        </div>
                        <!--Grid form-row--> <br>
                       <div class="text-right">
                       <button class="btn btn-white btn-submit" type="submit">Submit</button>
                       </div>

                    </form>
                </div>
                <div class="col-md-6"></div>
            </div>
    </div>
</section>



@include('welcome.footer')
