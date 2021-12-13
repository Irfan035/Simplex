
@include('welcome.header')

<!-- ==============Get_A-Quote-setion-one============== -->

<section class="career-section-one pt-5 pb-5">
    <div class="container text-white">
            <h1 class="font-weight-bold display-2  pt-5">Career<span class="OrangColor">!</span></h1>
            <p class="pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
</section>
<!-- ==============Get_A-Quote-section-three============ -->
<section class="get-a-quote-section-three pt-5 pb-5" >
    <div class="container">
    
            <div class="row">
                <div class="col-md-8 text-dark offset-md-2">
                    <h1 class="blueColor font-weight-bold display-5">Job Application<i class="fas fa-square outsourceo-dot"></i></h1>
                    <p>Please complete the form below to apply for a position with us.</p>
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
                    <form  class="needs-validation form-group" method="POST" action="{{route('careerForm')}}" enctype="multipart/form-data" novalidate>
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
                    <label for="validationCustom03">CNIC</label>
                    <input type="number" class="form-control" name="cnic" id="validationCustom03" placeholder="34502-12345678-9" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                    <div class="invalid-feedback">
                    Id is required
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom04">Phone</label>
                    <input type="tel" class="form-control" name="phone"  id="validationCustom04" placeholder="03123456789" value="{{ old('phone') }}" required>
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
                    <label for="validationCustom05">Address</label>
                    <input type="text" class="form-control" name="address" id="validationCustom05" placeholder="Ex- 112A/1 Gulberg 3 Lahore" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                    <div class="invalid-feedback">
                    Address is required
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom06">Position Applied</label>
                    <select class="form-control" name="position" id="validationCustom06" required> 
                    <option value="">Please Select</option>
                        <option value="Social & Digital Marketing Specialis">Social & Digital Marketing Specialist</option>
                        <option value="Sales Manager">Sales Manager</option>
                        <option value="Web Developer">Web Developer</option>
                        <option value="App Developer">App Developer</option>
                        <option value="Designer">Graphic Designer</option>
                        <option value="Content Writer">Content Writer</option>
                        <option value="Engineering & Architecture">Engineering & Architecture</option>
                    </select>
                    <div class="valid-feedback">
                     Looks good!
                     </div>
                     <div class="invalid-feedback">
                    PA is required
                    </div>
                </div>
              </div>
              <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom10">LinkedIn</label>
                <input type="text" class="form-control" name="LinkedIn" id="validationCustom10" placeholder="https://www.linkedin.com/in/profileName/" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                    <div class="invalid-feedback">
                    LinkedIn is required
                    </div>
                    </div>
                    <div class="col-md-6 mb-3">
                    <label for="validationCustom09">How did you hear about us?</label>
                    <select class="form-control" name="aboutUs" id="validationCustom09" required> 
                        <option value="">Please Select</option>
                        <option value="LinkedIn">LinkedIn</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Instgram">Instgram</option>
                        <option value="Twitter">Twitter</option>
                        <option value="Company Website">Company Website</option>
                        <option value="Other">Other</option>
                    </select>
                    <div class="valid-feedback">
                     Looks good!
                     </div>
                     <div class="invalid-feedback">
                    Required
                    </div>
                    </div>
                    </div>
              <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom08">Upload Your Resume</label>
                    <input type="file" class="form-control"  name="Resume" id="validationCustom08" required>
                    <div class="valid-feedback">
                     Looks good!
                     </div>
                     <div class="invalid-feedback">
                     Resume is required
                    </div>
                    </div>
                    <div class="col-md-6 mb-3">
                    <label for="validationCustom09">Availability</label>
                    <select class="form-control" name="available" id="validationCustom09" required> 
                        <option value="">Please Select</option>
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Weakened">Weekend</option>
                        <option value="ProjectWise">Project Wise</option>
                    </select>
                    <div class="valid-feedback">
                     Looks good!
                     </div>
                    </div>
                    </div>

                    <label for="validationCustom07">Cover Letter</label>
                    <!-- <input type="text" class="form-control" id="validationCustom05" placeholder="Business Name" required> -->
                    <textarea cols="30" rows="2" name="message" placeholder="Description" class="form-control" id="validationCustom07" required></textarea>
                    <div class="valid-feedback">
                    Looks good!
                    </div>  
                    <div class="invalid-feedback">
                    Cover Letter is required
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
               <p>+1 (718) 785-2989</p>
               </div>
           </div> -->
           <div class="col-md-4">
               <div class="contact-card p-3 rounded text-center">
               <i class="far fa-envelope"></i>
               <h4>Email</h4>
               <p>career@simplexoutsourcing.com</p>
               </div>
           </div>
           <div class="col-md-4">
               <div class="contact-card p-3 rounded text-center">
               <i class="fas fa-map-marker-alt"></i>
               <h4>Location</h4>
               <p>898 Bay Ridge Avenue, Brooklyn, NY-11220.</p>
               </div>
           </div>
       </div>
     
      
   </div>
</section>




@include('welcome.footer')
