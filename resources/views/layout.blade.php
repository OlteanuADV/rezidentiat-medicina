<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/vendor/tiny-slider/tiny-slider.css">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/vendor/glightbox/css/glightbox.css">
	<link id="style-switch" rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/style.css">
</head>

<body>
<header class="navbar-light navbar-sticky header-static">
	<nav class="navbar navbar-expand-xl">
		<div class="container-fluid px-3 px-xl-5">
			<a class="navbar-brand" href="index.html">
				<img class="light-mode-item navbar-brand-item" src="{{ url('/') }}/assets/images/logo.png" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="https://rezidentiat-medicina.ro/images/logo.png" alt="logo">
			</a>
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>
			<div class="navbar-collapse w-100 collapse" id="navbarCollapse">
				<!-- Nav Main menu START -->
				<ul class="navbar-nav navbar-nav-scroll me-auto">
					<li class="nav-item">
						<a class="nav-link @if(request()->routeIs('dashboard')) active @endif" href="{{ route('home') }}">
                            <i class="fa fa-home"></i>
                            Acasa
                        </a>
					</li>
                    <li class="nav-item">
						<a class="nav-link @if(request()->routeIs('subscription')) active @endif" href="{{ route('home') }}">
                            <i class="fa fa-credit-card"></i>
                            Abonamente
                        </a>
					</li>
                    <li class="nav-item">
						<a class="nav-link @if(request()->routeIs('subscription')) active @endif" href="{{ route('home') }}">
                            <i class="fa fa-paper-plane"></i>
                            Testeaza-te
                        </a>
					</li>
                    <li class="nav-item">
						<a class="nav-link @if(request()->routeIs('course')) active @endif" href="{{ route('home') }}">
                            <i class="fa fa-book"></i>
                            Cursuri
                        </a>
					</li>

					<!-- Nav item 5 link-->
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="advanceMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-calendar"></i>
							Simulari saptamanale
						</a>
						<ul class="dropdown-menu dropdown-menu-end min-w-auto" data-bs-popper="none">
							<li> 
								<a class="dropdown-item" href="#" target="_blank">
                                    <i class="fa fa-edit"></i>
									Simulari de etapa
								</a> 
							</li>
                            <li> <hr class="dropdown-divider"></li>
							<li> 
								<a class="dropdown-item" href="#" target="_blank">
                                    <i class="fa fa-mortar-board"></i>
									Simulari de final de etapa
								</a> 
							</li>
						</ul>
					</li>
				</ul>
			</div>
			{{-- <div class="dropdown ms-1 ms-lg-0">
				<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
					<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
				</a>
				<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
					<!-- Profile info -->
					<li class="px-3 mb-3">
						<div class="d-flex align-items-center">
							<!-- Avatar -->
							<div class="avatar me-3">
								<img class="avatar-img rounded-circle shadow" src="assets/images/avatar/01.jpg" alt="avatar">
							</div>
							<div>
								<a class="h6" href="#">Lori Ferguson</a>
								<p class="small m-0">example@gmail.com</p>
							</div>
						</div>
					</li>
					<li> <hr class="dropdown-divider"></li>
					<!-- Links -->
					<li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit Profile</a></li>
					<li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Account Settings</a></li>
					<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>
					<li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
					<li> <hr class="dropdown-divider"></li>
					<!-- Dark mode switch START -->
					<li>
						<div class="modeswitch-wrap" id="darkModeSwitch">
							<div class="modeswitch-item">
								<div class="modeswitch-icon"></div>
							</div>
							<span>Dark mode</span>
						</div>
					</li> 
					<!-- Dark mode switch END -->
				</ul>
			</div> --}}

		</div>
	</nav>
</header>
<main>
@yield('content')
</main>
<footer class="pt-5">
	<div class="container">
		<!-- Row START -->
		<div class="row g-4">

			<!-- Widget 1 START -->
			<div class="col-lg-3">
				<!-- logo -->
				<a class="me-0" href="index.html">
					<img class="light-mode-item h-40px" src="assets/images/logo.svg" alt="logo">
					<img class="dark-mode-item h-40px" src="assets/images/logo-light.svg" alt="logo">
				</a>
				<p class="my-3">Eduport education theme, built specifically for the education centers which is dedicated to teaching and involve learners.</p>
				<!-- Social media icon -->
				<ul class="list-inline mb-0 mt-3">
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-facebook" href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-instagram" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-twitter" href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
				</ul>
			</div>
			<!-- Widget 1 END -->

			<!-- Widget 2 START -->
			<div class="col-lg-6">
				<div class="row g-4">
					<!-- Link block -->
					<div class="col-6 col-md-4">
						<h5 class="mb-2 mb-md-4">Company</h5>
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link" href="#">About us</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
							<li class="nav-item"><a class="nav-link" href="#">News and Blogs</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Library</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Career</a></li>
						</ul>
					</div>
									
					<!-- Link block -->
					<div class="col-6 col-md-4">
						<h5 class="mb-2 mb-md-4">Community</h5>
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link" href="#">Documentation</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Faq</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Forum</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Sitemap</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6 col-md-4">
						<h5 class="mb-2 mb-md-4">Teaching</h5>
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link" href="#">Become a teacher</a></li>
							<li class="nav-item"><a class="nav-link" href="#">How to guide</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Terms &amp; Conditions</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Widget 2 END -->

			<!-- Widget 3 START -->
			<div class="col-lg-3">
				<h5 class="mb-2 mb-md-4">Contact</h5>
				<!-- Time -->
				<p class="mb-2">
					Toll free:<span class="h6 fw-light ms-2">+1234 568 963</span>
					<span class="d-block small">(9:AM to 8:PM IST)</span>
				</p>

				<p class="mb-0">Email:<span class="h6 fw-light ms-2">example@gmail.com</span></p>

				<div class="row g-2 mt-2">
					<!-- Google play store button -->
					<div class="col-6 col-sm-4 col-md-3 col-lg-6">
						<a href="#"> <img src="assets/images/client/google-play.svg" alt=""> </a>
					</div>
					<!-- App store button -->
					<div class="col-6 col-sm-4 col-md-3 col-lg-6">
						<a href="#"> <img src="assets/images/client/app-store.svg" alt="app-store"> </a>
					</div>
				</div> <!-- Row END -->
			</div> 
			<!-- Widget 3 END -->
		</div><!-- Row END -->

		<!-- Divider -->
		<hr class="mt-4 mb-0">

		<!-- Bottom footer -->
		<div class="py-3">
			<div class="container px-0">
				<div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-md-left">
					<!-- copyright text -->
					<div class="text-primary-hover"> Copyrights <a href="#" class="text-body">©2022 Eduport</a>. All rights reserved. </div>
					<!-- copyright links-->
					<div class="justify-content-center mt-3 mt-lg-0">
						<ul class="nav list-inline justify-content-center mb-0">
							<li class="list-inline-item">
								<!-- Language selector -->
								<div class="dropup mt-0 text-center text-sm-end">
									<a class="dropdown-toggle nav-link" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="fas fa-globe me-2"></i>Language
									</a>
									<ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/uk.svg" alt="">English</a></li>
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/gr.svg" alt="">German </a></li>
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/sp.svg" alt="">French</a></li>
									</ul>
								</div>
							</li>
							<li class="list-inline-item"><a class="nav-link" href="#">Terms of use</a></li>
							<li class="list-inline-item"><a class="nav-link pe-0" href="#">Privacy policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>
<script src="{{ url('/') }}/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('/') }}/assets/vendor/tiny-slider/tiny-slider.js"></script>
<script src="{{ url('/') }}/assets/vendor/glightbox/js/glightbox.js"></script>
<script src="{{ url('/') }}/assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
<script src="{{ url('/') }}/assets/js/functions.js"></script>
</html>
