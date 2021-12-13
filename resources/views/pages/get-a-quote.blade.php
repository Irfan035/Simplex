
@include('welcome.header')

<!-- ==============Get_A-Quote-setion-one============== -->

<section class="get-a-quote-section-one pt-5 pb-5">
    <div class="container text-white">
            <h1 class="font-weight-bold  text-center display-2  pt-5">Get A Quote<span class="OrangColor">!</span></h1>
            <p class="text-center pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
</section>
<!-- ==============Get_A-Quote-section-three============ -->
<section class="get-a-quote-section-three pt-5 pb-5" >
    <div class="container">
    
            <div class="row">
                <div class="col-md-8 text-dark offset-md-2">
                    <h1 class="blueColor font-weight-bold display-5">Requirments<i class="fas fa-square outsourceo-dot"></i></h1>
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
                    <form  class="needs-validation form-group" method="POST" action="{{route('quoteForm')}}" novalidate>
                        @csrf
             <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Name</label>
                    <input type="text" class="form-control" name="name" id="validationCustom01" placeholder="Full name" value="{{ old('name') }}" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                    <div class="invalid-feedback">
                    Name is required
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Email</label>
                    <input type="email" class="form-control" name="email" id="validationCustom02" placeholder="name@example.com" value="{{ old('email') }}" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                    <div class="invalid-feedback">
                    Email is required
                    </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Country</label>
                    <input type="text" class="form-control" name="country" id="validationCustom03" placeholder="USA" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                    <div class="invalid-feedback">
                    Country is required
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom04">Phone</label>
                    <input type="tel" class="form-control" name="phone"  id="validationCustom04" placeholder="+1 1234567890" value="{{ old('phone') }}" required>
                    <div class="valid-feedback">
                     Looks good!
                     </div>
                     <div class="invalid-feedback">
                     Phone is required
                    </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom05">Website/Business</label>
                    <input type="text" class="form-control" name="bussiness" id="validationCustom05" placeholder="Business Name" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                    <div class="invalid-feedback">
                    Business is required
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom06">Project Duration</label>
                    <select class="form-control" name="duration" id="validationCustom06" required> 
                        <option value="1 month">1 month</option>
                        <option value="3 to 6 month">3 to 6 month</option>
                        <option value="6 month to 1 year">6 month to 1 year</option>
                        <option value="1 year">1 year</option>
                        <option value="More than 1 year">More than 1 year</option>
                        <option value="not sure">not sure</option>
                    </select>
                    <div class="valid-feedback">
                     Looks good!
                     </div>
                </div>
              </div>
              <div class="form-row">
              <div class="col-md-6 mb-3">
              <label for="validationCustom08">Required Resources</label>
                    <select class="form-control" name="resources"  id="validationCustom06" required> 
                        <option value="">Select Option</option>
                        <option value="Website Developer">Website Developer</option>
                        <option value="App Developer">App Developer</option>
                        <option value="Degital">Degital</option>
                        <option value="Manager">Manager</option>
                        <option value="Designer">Designer</option>
                        <option value="Team">Team</option>
                        <option value="Other">Other</option>
                    </select>
                    <div class="valid-feedback">
                     Looks good!
                     </div>
                    </div>
                    <div class="col-md-6 mb-3">
                    <label for="validationCustom09">Best Time to Call You</label>
                    <select class="form-control" name="callTime" id="validationCustom09" required> 
                        <option value="Any time">Any time</option>
                        <option value="9am - 10am">9am - 10am</option>
                        <option value="10am - 11am">10am - 11am</option>
                        <option value="11am - 12pm">11am - 12pm</option>
                        <option value="12pm - 01pm">12pm - 01pm</option>
                        <option value="01pm - 02pm">01pm - 02pm</option>
                        <option value="02pm - 03pm">02pm - 03pm</option>
                        <option value="03pm - 04pm">03pm - 04pm</option>
                        <option value="05pm - 06pm">05pm - 06pm</option>
                        <option value="07pm - 09pm">07pm - 09pm</option>
                        <option value="Late Night">Late Night</option>
                    </select>
                    <div class="valid-feedback">
                     Looks good!
                     </div>
                    </div>
                    </div>

                    <label for="validationCustom07">Message</label>
                    <!-- <input type="text" class="form-control" id="validationCustom05" placeholder="Business Name" required> -->
                    <textarea name="" id="" cols="30" rows="2" name="message" placeholder="Description" class="form-control" id="validationCustom07" required></textarea>
                    <div class="valid-feedback">
                    Looks good!
                    </div>  
                    <div class="invalid-feedback">
                    Message is required
                    </div>
                
                <div class="text-center pt-3">
                <button class="btn bgBlueColor btn-submit" type="submit">Submit</button>
                </div>
            </form>
                </div>
                <div class="col-md-6"></div>
            </div>
    </div>
</section>
<!-- ==============section-two============ -->
<section class="contact-section-two pt-4 pb-4">
   <div class="container">
       <div class="row">
           <div class="col-md-4">
               <div class="contact-card p-3 rounded text-center">
               <i class="fas fa-phone-alt"></i>
               <h4>Call</h4>
               <p>+1 (718) 785-2989</p>
               </div>
           </div>
           <!-- <div class="col-md-4">
               <div class="contact-card p-3 rounded text-center">
               <i class="fas fa-sms"></i>
               <h4>WhatsApp</h4>
               <p>+1 (718) 395-6788</p>
               </div>
           </div> -->
           <div class="col-md-4">
               <div class="contact-card p-3 rounded text-center">
               <i class="far fa-envelope"></i>
               <h4>Email</h4>
               <p><a href="mailto:Info@simplexoutsourcing.com" class="text-dark">Info@simplexoutsourcing.com</a></p>
               </div>
           </div>
           <div class="col-md-4">
               <div class="contact-card p-3 rounded text-center">
               <i class="fab fa-skype"></i>
               <h4>Skype</h4>
               <p>Coming Soon..</p>
               </div>
           </div>
       </div>
     
      
   </div>
</section>

@include('welcome.footer')
