<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
   <header>
    
<div class="col-sm-12">
    <ul class="nav d-flex justify-content-between" style="background-color:#fbf8f8; padding:0%;">
        <div class=" d-flex justify-content-between">
            <img src="https://b.top4top.io/p_2694byv2a1.png"  class = "navbar-brand" href="#" style="width:75px;height55px; margin-right:3px;">
            <p class="align-text-center" style="padding-top:40px; font-family: Tajawal; font-size:20px; color:#5D6D7E; font-weight: bold;">بـــــيدي</p>
        </div>
        
<div class=" d-flex justify-content-between" style="font-family: Tajawal; color:#5D6D7E" >
    <li class="nav-item">
        <a class="nav-link active" style="padding-top:30px; font-size:20px; font-weight: bold;" href="/">الرئيسية</a>
      </li>
      <li class="nav-item dropdown" style="padding-top:22px; font-size:20px; font-weight: bold;">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">الدورات والورش</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
        <li class="nav-item dropdown" style="padding-top:22px; font-size:20px; font-weight: bold;">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/diy" role="button" aria-haspopup="true" aria-expanded="false">المتجر</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
</div>
<div class=" d-flex justify-content-between" style="padding-top:11px;  color:#5D6D7E;">
    <a class = "navbar-brand" href="#" style="font-size: 2.50rem;"> <i class="bi bi-cart4"></i> </a> 
    <a class = "navbar-brand" href="#" style="font-size: 2.50rem;"> <i class="bi bi-person-circle"></i> </a> 
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
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

</div>
</div>

</ul>     
   </header>
        <main class="py-1">
            @yield('content')
        </main>
  
        <footer>
            <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted" style="margin-top: 22px;">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
     
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-whatsapp"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-tiktok"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-youtube"></i>
        </a>
      </div>
      <!-- Right -->

       <!-- Left -->
       <div class="me-5 d-none d-lg-block">
        <span>تواصل معنا على الشبكات الاجتماعية</span>
      </div>
      <!-- Left -->
  
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>بـــــيدي
            </h6>
            <p>
              متجر مهتم ببيع ادوات وخامات الحرف و الاعمال اليدوية ونقيم دورات تعلمية عن بعد و حضوري في مناطق المملكة العربيه السعودية
            </p></strong>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              المتجر
            </h6>
            <p>
              <a href="#!" class="text-reset">ادوات الفخار</a>
            </p>
            <p>
              <a href="#!" class="text-reset">ادوات الصابون</a>
            </p>
            <p>
              <a href="#!" class="text-reset">اداوت الشموع</a>
            </p>
            <p>
              <a href="#!" class="text-reset">ادوات الرسم</a>
            </p>
            <p>
              <a href="#!" class="text-reset">ادوات الريزين</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              الدورات و الورش
            </h6>
            <p>
              <a href="#!" class="text-reset">ورش الرسم</a>
            </p>
            <p>
              <a href="#!" class="text-reset">ورش الفخار و النحت</a>
            </p>
            <p>
              <a href="#!" class="text-reset">ورش  صناعةالصابون </a>
            </p>
            <p>
              <a href="#!" class="text-reset">ورش صناعة الشموع</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">لتواصل</h6>
            <p>
              <i class="bi bi-envelope-paper-fill"></i>
              info@example.com
            </p>
            <p><i class="bi bi-telephone-fill"></i> + 01 234 567 88</p>
            <p><i class="bi bi-telephone-fill"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
        </footer>
</body>
</html>
