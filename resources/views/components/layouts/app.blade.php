<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
  
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Page Title' }}</title>
 
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/assets/images/favicon.ico') }}">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&amp;family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300&amp;display=swap" rel="stylesheet">
    
     <!-- Plugins css -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/mobilemenu.css') }}" />
    <!-- <link rel="stylesheet" href="./assets/css/glightbox.min.css" /> -->
    <link rel="stylesheet" href="../../../../cdn.jsdelivr.net/npm/swiper%408/swiper-bundle.min.css"/>
    <!-- Tailwind css -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/styles.css') }}" />

  </head>
  <body class="font-rubik dark:bg-dark_primary_bg">

    <!-- Preloader start -->
    {{-- <div id="preloader">
        <div class="loader--border"></div>
    </div> --}}
    <!-- Preloader end -->

    <!-- Sidebar header section start -->
    <div class="md:hidden lg:flex lg:items-center xxl:w-[440px] xl:w-[300px] lg:w-[230px] bg-white dark:bg-black fixed ltr:left-0 rtl:right-0 top-0 h-full">
      <div class="ltr:xxl:pl-[100px] ltr:xl:pl-[30px] ltr:lg:pl-[30px] rtl:xxl:pr-[100px] rtl:xl:pr-[30px] rtl:lg:pr-[30px]">
        <div class="logo">
            <a href="index-3.html">
              <img class="hidden dark:block" src="assets/images/logo-light.png" alt="">
              <img class="dark:hidden" src="assets/images/logo.png" alt="">
            </a>
        </div>
        <div class="pt-[40px]">
            <ul>
              <li class="mb-[20px]"><a class="xl:text-[18px] text-[17px] font-medium text-accent1 " wire:navigate href="{{ route('home') }}"><span class="inline-block ltr:mr-[10px] rtl:ml-[10px]">
                <svg width="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
              </span> HOME</a></li>
              <li class="mb-[20px]"><a class="xl:text-[18px] text-[17px] font-medium text-primary hover:text-accent1 dark:text-white dark:hover:text-accent1 " wire:navigate href="{{ route('about') }}"><span class="inline-block ltr:mr-[10px] rtl:ml-[10px]">
                <svg width="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
              </span> About</a></li>
              <li class="mb-[20px]"><a class="xl:text-[18px] text-[17px] font-medium text-primary hover:text-accent1 dark:text-white dark:hover:text-accent1 " href="services-2.html"><span class="inline-block ltr:mr-[10px] rtl:ml-[10px]">
                <svg width="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336c44.2 0 80-35.8 80-80s-35.8-80-80-80s-80 35.8-80 80s35.8 80 80 80z"/></svg>
              </span> Services</a></li>
              <li class="mb-[20px]"><a class="xl:text-[18px] text-[17px] font-medium text-primary hover:text-accent1 dark:text-white dark:hover:text-accent1 " href="portfolio-2.html"><span class="inline-block ltr:mr-[10px] rtl:ml-[10px]">
                <svg width="16" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z"/></svg>
              </span> Portfolio</a></li>
              <li class="mb-[20px]"><a class="xl:text-[18px] text-[17px] font-medium text-primary hover:text-accent1 dark:text-white dark:hover:text-accent1 " href="blog-2.html"><span class="inline-block ltr:mr-[10px] rtl:ml-[10px]">
                <svg width="16" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M446.6 222.7c-1.8-8-6.8-15.4-12.5-18.5-1.8-1-13-2.2-25-2.7-20.1-.9-22.3-1.3-28.7-5-10.1-5.9-12.8-12.3-12.9-29.5-.1-33-13.8-63.7-40.9-91.3-19.3-19.7-40.9-33-65.5-40.5-5.9-1.8-19.1-2.4-63.3-2.9-69.4-.8-84.8.6-108.4 10C45.9 59.5 14.7 96.1 3.3 142.9 1.2 151.7.7 165.8.2 246.8c-.6 101.5.1 116.4 6.4 136.5 15.6 49.6 59.9 86.3 104.4 94.3 14.8 2.7 197.3 3.3 216 .8 32.5-4.4 58-17.5 81.9-41.9 17.3-17.7 28.1-36.8 35.2-62.1 4.9-17.6 4.5-142.8 2.5-151.7zm-322.1-63.6c7.8-7.9 10-8.2 58.8-8.2 43.9 0 45.4.1 51.8 3.4 9.3 4.7 13.4 11.3 13.4 21.9 0 9.5-3.8 16.2-12.3 21.6-4.6 2.9-7.3 3.1-50.3 3.3-26.5.2-47.7-.4-50.8-1.2-16.6-4.7-22.8-28.5-10.6-40.8zm191.8 199.8l-14.9 2.4-77.5.9c-68.1.8-87.3-.4-90.9-2-7.1-3.1-13.8-11.7-14.9-19.4-1.1-7.3 2.6-17.3 8.2-22.4 7.1-6.4 10.2-6.6 97.3-6.7 89.6-.1 89.1-.1 97.6 7.8 12.1 11.3 9.5 31.2-4.9 39.4z"/></svg>
              </span> Blog</a></li>
              <li><a class="xl:text-[18px] text-[17px] font-medium text-primary hover:text-accent1 dark:text-white dark:hover:text-accent1 " href="contact-2.html"><span class="inline-block ltr:mr-[10px] rtl:ml-[10px]">
                <svg width="16" fill="currentColor" stroke="currentColor"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M96 0C60.7 0 32 28.7 32 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H96zM208 288h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H144c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm96-96c0 35.3-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V80zM496 192c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V336z"/></svg>
              </span> Contact</a></li>
            </ul>
        </div>
        <div>
          <p class=" dark:text-white leading-[30px] mt-7">Developed with <span class="px-[3px] inline-block">
            <svg class="text-paragraph dark:text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 24 24" fill="currentColor" stroke="text-paragraph" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></span>  by <br> <span class=" px-[3px]"><a class="text-accent1 hover:font-bold" href="#">Morex</a></span>© 2023</p>
        </div>
      </div>
    </div>
    <!-- Sidebar header section end -->

    <!-- Start Offcanvas header menu -->
    <div class="offcanvas__header lg:hidden dark:bg-gray-800">
      <div class="offcanvas__inner">
          <div class="offcanvas__logo">
              <a class="offcanvas__logo_link" href="index.html">
                  <img class="dark:hidden" src="assets/images/logo.png" alt="Grocee Logo" width="158" height="36">
                  <img class="hidden dark:block" src="assets/images/logo-light.png" alt="Grocee Logo" width="158" height="36">
              </a>
              <button class="offcanvas__close--btn dark:text-white" data-offcanvas>close</button>
          </div>
          <nav class="offcanvas__menu">
              <ul class="offcanvas__menu_ul">
                  <li class="offcanvas__menu_li">
                      <a class="offcanvas__menu_item dark:text-white" wire:navigate href="{{ route('home') }}">Home</a>
                  </li>
                  <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" wire:navigate href="{{ route('about') }}">About</a></li>
                  <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="services-2.html">Services</a></li>
                  <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="portfolio-2.html">Portfolio</a></li>
                  <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="blog-2.html">Blog</a></li>
                  <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="contact-2.html">Contact</a></li>
              </ul>
              <button class="flex mx-auto bg-accent1 lg:px-[15px] px-[12px] xl:py-[12px] py-[10px] rounded-[2rem] text-[16px] xl:text-[18px] font-medium text-white items-center transition duration-300 relative after:absolute :after:content-[''] after:bg-primary after:h-full after:w-full after:bottom-0 after:left-0 after:rounded-[2rem] after:trasition after:duration-300 after:opacity-0 hover:after:opacity-[1] mt-[30px]">
                <span class="icon bg-[#EFEBEB] text-accent1 w-[34px] h-[34px] rounded-full flex items-center justify-center ltr:xl:mr-[15px] ltr:mr-[10px] rtl:xl:ml-[15px] rtl:ml-[10px] relative z-[8] flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                </span>
                <span class="ltr:xl:pr-[5px] ltr:lg:pr-[5px] rtl:xl:pl-[5px] rtl:lg:pl-[5px] relative z-[8] flex-shrink-0">Download CV</span>
              </button>
          </nav>
          
      </div>
    </div>
    <!-- End Offcanvas header menu -->

    <!-- dark , light btn start -->
    <div class="block fixed z-[99] lg:top-5 md:top-[50%] md:translate-y-[-50%] ltr:xxl:right-[100px] ltr:xl:right-[30px] ltr:lg:right-[15px] ltr:md:right-0 rtl:xxl:left-[100px] rtl:xl:left-[30px] rtl:lg:left-[15px] rtl:md:left-0">
      <button class="bg-accent1 w-[50px] h-[50px] text-white flex justify-center items-center lg:rounded-full md:rounded-lg ltr:md:rounded-tr-none ltr:md:rounded-br-none rtl:md:rounded-tl-none rtl:md:rounded-bl-none" id="light__to--dark">
        <svg xmlns="http://www.w3.org/2000/svg" class="dark--mode__icon ionicon max-w-[25px] fill-white" viewBox="0 0 512 512"><title>Moon</title><path d="M264 480A232 232 0 0132 248c0-94 54-178.28 137.61-214.67a16 16 0 0121.06 21.06C181.07 76.43 176 104.66 176 136c0 110.28 89.72 200 200 200 31.34 0 59.57-5.07 81.61-14.67a16 16 0 0121.06 21.06C442.28 426 358 480 264 480z"/></svg>
        
        <svg xmlns="http://www.w3.org/2000/svg" class="light--mode__icon ionicon max-w-[25px] fill-white" viewBox="0 0 512 512"><title>Sunny</title><path d="M256 118a22 22 0 01-22-22V48a22 22 0 0144 0v48a22 22 0 01-22 22zM256 486a22 22 0 01-22-22v-48a22 22 0 0144 0v48a22 22 0 01-22 22zM369.14 164.86a22 22 0 01-15.56-37.55l33.94-33.94a22 22 0 0131.11 31.11l-33.94 33.94a21.93 21.93 0 01-15.55 6.44zM108.92 425.08a22 22 0 01-15.55-37.56l33.94-33.94a22 22 0 1131.11 31.11l-33.94 33.94a21.94 21.94 0 01-15.56 6.45zM464 278h-48a22 22 0 010-44h48a22 22 0 010 44zM96 278H48a22 22 0 010-44h48a22 22 0 010 44zM403.08 425.08a21.94 21.94 0 01-15.56-6.45l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.55 37.56zM142.86 164.86a21.89 21.89 0 01-15.55-6.44l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.56 37.55zM256 358a102 102 0 11102-102 102.12 102.12 0 01-102 102z"/></svg>
      </button>

    </div>
    <!-- dark , light btn end -->




    <!-- ========== Start Main ========== -->
    {{ $slot }}
    <!-- ========== End Main ========== -->



     
      

    <!-------- Plugins js ------>

    <!-- Swiper js -->
    <script src="../../../../cdn.jsdelivr.net/npm/swiper%408/swiper-bundle.min.js"></script>
    
    <!-- imagesloaded js -->
    <script src="{{ asset('front/assets/js/imagesloaded.pkgd.min.js') }}" defer></script>

    <!-- Isotope js -->
    <script src="{{ asset('front/assets/js/isotope.pkgd.min.js') }}" defer></script>
  
  <!-- Custom js -->
    <script src="{{ asset('front/assets/js/script.js') }}" defer></script>

    <script>
      // On page load or when changing themes, best to add inline in `head` to avoid FOUC
      if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
        document.getElementById("light__to--dark")?.classList.add("dark--version");
      } 
      if (localStorage.getItem("theme-color") === "light") {
        document.getElementById("light__to--dark")?.classList.remove("dark--version");
      } 
    </script>
    
  </body>

</html>
