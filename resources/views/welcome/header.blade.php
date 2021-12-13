<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Simplex Outsourcing can help you reduce your burden by working with you as a team. 路 Working with us remotely feels like we are working in your office face to ...">
        <meta name="keywords" content="OutSourcing, Simplex OutSourcing, simplex outsourcing, Mobile App Developer, Compony">
        <meta name="author" content="simplex outsourcing">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="shortcut icon" type = "image/png" href="{{asset('media/logos/simplex.png')}}" />
		
	    <link href="plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FBEL2RYE81"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());

     gtag('config', 'G-FBEL2RYE81');
    </script>
    <meta name="facebook-domain-verification" content="n62degb97fnbiqto85wrvtg6yglr0h" />
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1045818436193856');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1045818436193856&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-211778964-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-211778964-1');
</script>



    </head>
<body class="hero-anime">
   <header>
   <div class="bgBlueColor topheader">
       <div class="container">
       <div class="row p-2">
       <div class="col-md-2">
       <p><i class="fas fa-phone-alt"></i> (718) 785-2989</p>
       </div>
	   <div class="col-md-6"><p><i class="far fa-envelope"></i> info@simplexoutsourcing.com</p></div>
       <div class="col-md-4 text-right">
       <p>
         <a href="https://www.facebook.com/simplexoutsourcing" target="_blank" ><i class="fab fa-facebook"></i></a> 
		 <a href="https://www.instagram.com/simplex_outsourcing/" target="_blank"><i class="fab fa-instagram"></i></a>
		 <a href="https://twitter.com/Simplex_USA" target="_blank"><i class="fab fa-twitter"></i></a>
		 <a href="https://www.pinterest.com/SimplexOutsourcing/" target="_blank"><i class="fab fa-pinterest"></i></a>
		 <a href="https://www.linkedin.com/company/simplexoutsourcing/" target="_blank"><i class="fab fa-linkedin"></i></a>
       <span><a href="{{_('dashboard')}}"><i class="fa fa-user"></i></a></span>
      </p>
       </div>
       </div>
  
   </div>
  <div class=" bg-white start-header start-style">  

   <!-- navbar -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
					
						<a class="navbar-brand" href="{{_('/')}}" >
              			<img src="{{asset('media/logos/simplex-logo.png')}}" alt="simplexoutsourcing"></a>	
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav m-auto py-4 py-md-0">
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
									<a class="nav-link " href="{{_('/')}}">Home</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Company</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="{{_('about')}}">About Us</a>
									 <!--	<a class="dropdown-item" href="{{_('team')}}">Team</a> -->
										<a class="dropdown-item" href="{{_('why-choose-us')}}">Why Choose Us</a>
									</div>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="{{_('services')}}">Services</a>
								</li>
								<!-- <li class="nav-item dropdown pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{_('services')}}" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="{{_('sales-business-development')}}">Sales & Business Development</a>
										<a class="dropdown-item" href="#">Social & Digital Media Marketing</a>
										<a class="dropdown-item" href="#">Graphic & Web Designing</a>
										<a class="dropdown-item" href="#">IT Outsourcing</a>
										<a class="dropdown-item" href="#">Mobile Apps Development</a>
										<a class="dropdown-item" href="#">Engineering & Architecture</a>
									</div>
								</li> -->
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="{{_('blog')}}">Blog</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="{{_('contact')}}">Contact</a>
								</li>
							</ul>
              
                			<a class="nav-btn bgOrangColor ml-2" href="{{_('get-a-quote')}}">Get A Quote!</a>
              
						</div>
						
					</nav>		
				</div>
			</div>
		</div>
	</div>

  
<!-- Link to page
================================================== -->


   <!--    <form class="d-flex">
      @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm nav-link text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
      </form> -->
   
   </header>
   
