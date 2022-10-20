
<!DOCTYPE html>
<html lang="en">
<head>
<title>BABAART</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/ui.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/all.min.css" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js"></script>
    <script src="https://fullcalendar.io/assets/demo-to-codepen.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
  	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
  	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <style>
    .navbar-light .navbar-brand {
			color: #000;
			font-size: 25px;
			text-transform: uppercase;
			font-weight: bold;
			letter-spacing: 2px;
		}
		.navbar-light .navbar-brand span {
			color: #1977cc;
		}
        </style>
</head>
<body>
<header class="section-header">
    <section class="header-main border-bottom">
        <div class="container">
        
    
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->

    
   <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<div class="container">
				<a class="navbar-brand" href="{{url('home')}}"><span>BABA</span>A<span style="color:orange">r</span>t</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item ">
							<a id="navbarDropdown" class="nav-link " href="{{url('home')}}"  aria-haspopup="true" aria-expanded="false" v-pre>
								H<span style="color:orange">O</span>ME

							</a>
							
						</li>
					<li class="nav-item ">
							<a id="navbarDropdown" class="nav-link " href="{{url('profile')}}"  aria-haspopup="true" aria-expanded="false" v-pre>
								Profile
							</a>
						</li>
                   
            <li class="nav-item">
              <a class="nav-link" href="#">Art Gallary</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Order now</a>
            </li>
           
				<ul class="navbar-nav me-auto">
					</ul>
					<ul class="navbar-nav ms-auto">
						@guest
							@if (Route::has('login'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
								</li>
							@endif

							@if (Route::has('register'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
								</li>
							@endif
						@else
            @php
            $adminData= Auth::user();
            @endphp
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							{{ Auth::user()->name }} <img src="{{asset('images/'.$adminData->image)}} "
							width="30" height="30" style="border-radius: 50%">
							</a>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                </i><span class="fa fa-shopping-cart badge badge-pill badge-danger dropdown-item">{{ count((array) session('cart')) }}</span>
								<a class="dropdown-item" href="{{url('userdata-home')}}">Userdata</a>
								<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</div>
						</li>
						@endguest
                       
					</ul>
				</div>
			</div>
		</nav>
    
    </header> <!-- section-header.// -->
    
    <!-- ========================= SECTION MAIN ========================= -->
    <section class="section-main bg padding-y">
    <div class="container">
    <div class="row">
        <aside class="col-md-3">
            <nav class="card">
                <ul class="menu-category">
                    <li><a href="#">Pencil Sketch</a></li>
                    <li><a href="#">Oil Painting</a></li>
                    <li><a href="#">Wall Design</a></li>
                    <li><a href="#">portrait art</a></li>
                    <li><a href="#">Home interior</a></li>
                    <li><a href="#">Digital art</a></li>
                    <li class="has-submenu"><a href="#">More items</a>
                        <ul class="submenu">
                            <li><a href="#">Submenu name</a></li>
                            <li><a href="#">Great submenu</a></li>
                            <li><a href="#">Another menu</a></li>
                            <li><a href="#">Some others</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </aside> <!-- col.// -->
        <div class="col-md-9">
            <article class="banner-wrap">
                <img src="images/4.jpg" height="300px" class="w-100 rounded">
            </article>
        </div> <!-- col.// -->
    </div> <!-- row.// -->
    </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION MAIN END// ========================= -->
    
    <!-- ========================= SECTION  ========================= -->
    <section class="section-name padding-y-sm">
    <div class="container">
    
    <header class="section-heading">
        <a href="#" class="btn btn-outline-primary float-end">See all</a>
        <h3 class="section-title">Popular Art</h3>
    </header><!-- sect-heading -->
    
        
    <div class="row">
        <div class="col-md-3">
            <div href="#" class="card card-product-grid">
                <a href="#" class="img-wrap"> <img src="images/items/1.jpg"> </a>
                <figcaption class="info-wrap">
                Creative Pencil sketch
                    <a href="#" class="title">Just another product name</a>
                    <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                </figcaption>
            </div>
        </div> <!-- col.// -->
        <div class="col-md-3">
            <div href="#" class="card card-product-grid">
                <a href="#" class="img-wrap"> <img src="images/items/2.jpg"> </a>
                <figcaption class="info-wrap">
                Canvas oil painting
                    <a href="#" class="title">Some item name here</a>
                    <div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
                </figcaption>
            </div>
        </div> <!-- col.// -->
        <div class="col-md-3">
            <div href="#" class="card card-product-grid">
                <a href="#" class="img-wrap"> <img src="images/items/3.jpg"> </a>
                <figcaption class="info-wrap">
                Acrylic color painting
                    <a href="#" class="title">Great product name here</a>
                    <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
                </figcaption>
            </div>
        </div> <!-- col.// -->
        <div class="col-md-3">
            <div href="#" class="card card-product-grid">
                <a href="#" class="img-wrap"> <img src="images/items/4.jpg"> </a>
                <figcaption class="info-wrap">
                Water color art
                    <a href="#" class="title">Just another product name</a>
                    <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                </figcaption>
            </div>
        </div> <!-- col.// -->
        <div class="col-md-3">
            <div href="#" class="card card-product-grid">
                <a href="#" class="img-wrap"> <img src="images/items/5.jpg"> </a>
                <figcaption class="info-wrap">
                 Acrylic portrait art
                    <a href="#" class="title">Just another product name</a>
                    <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                </figcaption>
            </div>
        </div> <!-- col.// -->
        <div class="col-md-3">
            <div href="#" class="card card-product-grid">
                <a href="#" class="img-wrap"> <img src="images/items/6.jpg"> </a>
                <figcaption class="info-wrap">
               Acrylic Canvas painting
                    <a href="#" class="title">Some item name here</a>
                    <div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
                </figcaption>
            </div>
        </div> <!-- col.// -->
        <div class="col-md-3">
            <div href="#" class="card card-product-grid">
                <a href="#" class="img-wrap"> <img src="images/items/7.jpg"> </a>
                <figcaption class="info-wrap">
                Coarse with Gulal art
                    <a href="#" class="title">Great product name here</a>
                    <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
                </figcaption>
            </div>
        </div> <!-- col.// -->
        <div class="col-md-3">
            <div href="#" class="card card-product-grid">
                <a href="#" class="img-wrap"> <img src="images/items/9.jpeg"> </a>
                <figcaption class="info-wrap">
                Oil painting
                    <a href="#" class="title">Just another product name</a>
                    <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                </figcaption>
            </div>
        </div> <!-- col.// -->
    </div> <!-- row.// -->
    
    </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->
    
    
    <!-- ========================= SECTION  ========================= -->
    <section class="section-name padding-y bg">
    <div class="container">
    
    <div class="row">
    <div class="col-md-6">
        <h3>Download app BABAART</h3>
        <p>Get an amazing app  to make Your life easy</p>
    </div>
    <div class="col-md-6 text-md-end">
        	<a class="navbar-brand" href="{{url('home')}}"><h3><span>BABA</span>A<span style="color:orange">R</span>T</h3></a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
    </div>
    </div> <!-- row.// -->
    </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ======================= -->
    
    
    
    <!-- ========================= FOOTER ========================= -->
  <footer class="section-footer border-top bg">
    <div class="container">
      <section class="footer-top  padding-y">
        <div class="row">
          <aside class="col-md col-6">
            <h6 class="title">Art type</h6>
            <ul class="list-unstyled">
              <li> <a href="#">Pencil</a></li>
              <li> <a href="#">Oil</a></li>
              <li> <a href="#">Digital</a></li>
              <li> <a href="#">portrait</a></li>
            </ul>
          </aside>
          <aside class="col-md col-6">
            <h6 class="title">Company</h6>
            <ul class="list-unstyled">
              <li> <a href="#">About us</a></li>
              <li> <a href="#">Career</a></li>
              <li> <a href="#">Find a store</a></li>
              <li> <a href="#">Rules and terms</a></li>
              <li> <a href="#">Sitemap</a></li>
            </ul>
          </aside>
          <aside class="col-md col-6">
            <h6 class="title">Help</h6>
            <ul class="list-unstyled">
              <li> <a href="#">Contact us</a></li>
              <li> <a href="#">Money refund</a></li>
              <li> <a href="#">Order status</a></li>
              <li> <a href="#">Shipping info</a></li>
              <li> <a href="#">Open dispute</a></li>
            </ul>
          </aside>
          <aside class="col-md col-6">
            <h6 class="title">Account</h6>
            <ul class="list-unstyled">
              <li> <a href="#">{{Auth::user()->name}} </a></li>
              <li> <a href="#"> Account Setting </a></li>
              <li> <a href="#"> My Orders </a></li>
            </ul>
          </aside>
          <aside class="col-md">
            <h6 class="title">Social</h6>
            <ul class="list-unstyled">
              <li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
              <li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
              <li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
              <li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
            </ul>
          </aside>
        </div> <!-- row.// -->
      </section>  <!-- footer-top.// -->
  
      <section class="footer-bottom row">
        <div class="col-md-2">
          <p class="text-muted">   2022 BABAART </p>
        </div>
        <div class="col-md-8 text-md-center">
          <span  class="px-2">babaart@com</span>
          <span  class="px-2">+91-9929889981</span>
          <span  class="px-2">Sirohi Rajasthan,307801</span>
        </div>
        <div class="col-md-2 text-md-end text-muted">
          <i class="fab fa-lg fa-cc-visa"></i> 
          <i class="fab fa-lg fa-cc-paypal"></i> 
          <i class="fab fa-lg fa-cc-mastercard"></i>
        </div>
      </section>
    </div><!-- //container -->
  </footer>
  <!-- ========================= FOOTER END // ========================= -->
</body>
</html>