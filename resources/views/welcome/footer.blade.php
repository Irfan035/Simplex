<footer>
    <div class="bgBlueColor pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="media/logos/logo.png" alt="Simplex OutSource">
                    <p class="pt-3 pb-3 text-white">898 Bay Ridge Avenue, Brooklyn, NY-11220. </p>
                    <p class="text-white"><a href="tel:+(718) 785-2989">(718) 785-2989</a> <a href="mailto:info@simplexoutsourcing.com">info@simplexoutsourcing.com</a></p>
                    <br>
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
                    <form class="form-group" method="POST" action="{{ route('Newsletter') }}" novalidate>
                    @csrf
                        <div class="footer-form"><input type="email" name="email" class="bgBlueColor" placeholder="Subscribe to Our Newsletter" id="" required><button class="bgBlueColor" type="submit"><i class="fas fa-paper-plane"></i></button></div>
                    </form>
                </div>
                <div class="col-md-4">
                <h4>Services</h4>
                <ul class="list-unstyled pt-2">
                        <li class="pt-2"><a href="{{_('services')}}">Sales & Business Development</a></li>
                        <li class="pt-2"><a href="{{_('services')}}">Social & Digital Media Marketing</a></li>
                        <li class="pt-2"><a href="{{_('services')}}">Graphic & Web Designing</a></li>
                        <li class="pt-2"><a href="{{_('services')}}">IT Outsourcing</a></li>
                        <li class="pt-2"><a href="{{_('services')}}">Content Writing</a></li>
                        <li class="pt-2"><a href="{{_('services')}}">Engineering & Architecture</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                <h4>Company</h4>
                <ul class="list-unstyled pt-2">
                        <li class="pt-2"><a href="{{_('about')}}">About Us</a></li>
                        <li class="pt-2"><a href="{{_('contact')}}">Locations</a></li>
                         <!--<li class="pt-2"><a href="{{_('team')}}">Team</a></li>-->
                        <li class="pt-2"><a href="{{_('why-choose-us')}}">Why Us</a></li>
                        <li class="pt-2"><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                <h4>Support</h4>
                <ul class="list-unstyled pt-2">
                        <li class="pt-2"><a href="{{_('career')}}">Career</a></li>
                        <li class="pt-2"><a href="#">Appointments</a></li>
                        <li class="pt-2"><a href="{{_('contact')}}">Contact Us</a></li>
                        <li class="pt-2"><a href="{{_('get-a-quote')}}">Get A Quote!</a></li>
                        <li class="pt-2">
                            <a href="https://www.facebook.com/simplexoutsourcing" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/simplex_outsourcing/" target="_blank"><i class="fab fa-instagram pl-2"></i></a>
                            <a href="https://twitter.com/Simplex_USA" target="_blank"><i class="fab fa-twitter pl-2"></i></a>
                            <a href="https://www.pinterest.com/SimplexOutsourcing/" target="_blank"><i class="fab fa-pinterest pl-2"></i></a>
                            <a href="https://www.linkedin.com/company/simplexoutsourcing/" target="_blank"><i class="fab fa-linkedin pl-2"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center text-white footer-bottom p-1">
    <small> © All Rights Reserved Simplex OutSourcing, Designed & Developed by <a href="https://sdcoms.com/" target="_blank">SD-Communications</a>.</small>
    </div>
</footer>
<!-- link -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="js/jquery-3.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
<script src="js/bootsrap.min.js" ></script>
<script src="js/style.js" ></script>

</body>
</html>