
@include('welcome.header')

<!-- ==============sales-business-development-one============== -->

<section class="sales-business-development-one">
    <div class="container">
       <div class="row">
           <div class="col-md-6 text-white text-justify pt-5">
            <h1 class="font-weight-bold pt-4 display-4">Digital Marketing<i class="fas fa-square outsourceo-dot"></i></h1>
            <p>Our strength is in our unparalleled commitment to care for your business and your changing business needs.</p>
            <div class="row pt-3">
                <div class="col-6">
                <h5>&#10004; Organic Traffic</h5>
                <h5>&#10004; Organic Traffic</h5>
                <h5>&#10004; Organic Traffic</h5>
                </div>
                <div class="col-6">
                <h5>&#10004; Organic Traffic</h5>
                <h5>&#10004; Organic Traffic</h5>
                <h5>&#10004; Organic Traffic</h5>
                </div>
            </div>
           </div>
           <div class=" col-md-4 offset-md-2 bg-white rounded p-3 mt-3 mb-3">
               <h2 class="blueColor font-weight-bold text-center">Requirments</h2>
           <form class="needs-validation" novalidate>
             <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Name</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Full name" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                    <div class="invalid-feedback">
                    Name is required
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Email</label>
                    <input type="email" class="form-control" id="validationCustom02" placeholder="name@example.com" required>
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
                    <input type="text" class="form-control" id="validationCustom03" placeholder="USA" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                    <div class="invalid-feedback">
                    Country is required
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom04">Phone</label>
                    <input type="tel" class="form-control" id="validationCustom04" placeholder="+1 1234567890" required>
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
                    <input type="text" class="form-control" id="validationCustom05" placeholder="Business Name" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                    <div class="invalid-feedback">
                    Business is required
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom06">Project Duration</label>
                    <select class="form-control" id="validationCustom06" required> 
                        <option>1 month</option>
                        <option>3 to 6 month</option>
                        <option>6 month to 1 year</option>
                        <option>1 year</option>
                        <option>More than 1 year</option>
                        <option>not sure</option>
                    </select>
                    <div class="valid-feedback">
                     Looks good!
                     </div>
                </div>
              </div>
                    <label for="validationCustom07">Message</label>
                    <!-- <input type="text" class="form-control" id="validationCustom05" placeholder="Business Name" required> -->
                    <textarea name="" id="" cols="30" rows="1" placeholder="Description" class="form-control" id="validationCustom07" required></textarea>
                    <div class="valid-feedback">
                    Looks good!
                    </div>  
                    <div class="invalid-feedback">
                    Message is required
                    </div>
                <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                    You must agree before submitting.
                    </div>
                </div>
                </div>
                <button class="btn bgBlueColor" type="submit">Submit</button>
            </form>
          </div>
       </div>
    </div>
</section>

<!-- ==============section-two============ -->
<section class="digital-marketing-section-two pt-5 pb-5">
   <div class="container">
      <h1 class="blueColor font-weight-bold text-center"><i class="fas fa-square outsourceo-dot"></i></h1>
      
   </div>
</section>
<!-- ==============digital-marketing-section-three============ -->
<section class="digital-marketing-section-three pt-5 pb-5 bgBlueColor">
    <div class="container">
    <h1 class="text-center p-3"><i class="fas fa-square outsourceo-dot"></i></h1>
 
</section>

<!-- ==============digital-marketing-section-four============ -->
<section class="digital-marketing-section-four pt-5 pb-5" style='background-image: url("media/bg/red_dots.png");'>
  
</section>



@include('welcome.footer')
