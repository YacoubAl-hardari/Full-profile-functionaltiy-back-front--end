<div class="h-full md:min-h-screen  md:flex md:flex-col bg-[#F5F5F5] bg-cover bg-no-repeat bg-center dark:bg-[url('../images/home2-hero-bg-dark.png')] dark:bg-dark_primary_bg">


    <!-- Header area start -->
      <header class="hidden w-full md:block xl:py-8 py-7">
        <div class="xxl:px-[100px] xl:px-[30px] lg:px-[15px] md:px-[15px]">
          <div class="flex justify-end md:justify-between items-center">
              <div class="logo hidden md:block">
                  <a href="index-2.html">
                    <img class="hidden dark:block" src="{{ $showDataHomePage->toolImage }}" alt="">
                    <img class="dark:hidden" src="assets/images/logo.png" alt="">
                  </a>
              </div>
              <div class="lg:hidden">
                <button class="offcanvas__header--menu__open--btn text-primary dark:text-white " data-offcanvas>
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                </button>
              </div>
          </div>
        </div>
      </header>
      <!-- Header area end -->

      <!-- Main wrapper start -->
      <main>
        <!-- Hero section start -->
        <section class="h-full lg:min-h-screen only-md:h-[83vh] overflow-hidden lg:flex only-md:flex items-center" id="home">
            <div class="ltr:xxl:pl-[440px] ltr:xl:pl-[300px] ltr:lg:pl-[230px] rtl:xxl:pr-[440px] rtl:xl:pr-[300px] rtl:lg:pr-[230px] xxl:py-[145px] xl:py-[130px] lg:py-[110px] only-md:pt-[20px] sm:pt-[10px]  md:pb-[60px] ltr:xxl:pr-[100px] ltr:xl:pr-[30px] rtl:xxl:pl-[100px] rtl:xl:pl-[30px] md:px-[15px]">
              <div class="flex items-center sm:flex-col xxl:gap-[160px] xl:gap-[5rem] lg:gap-[50px] only-md:gap-[50px] sm:gap-[30px] ltr:xxl:pl-[150px] ltr:xl:pl-[70px] ltr:lg:pl-[60px] rtl:xxl:pr-[150px] rtl:xl:pr-[70px] rtl:lg:pr-[60px] ltr:only-md:pl-[15px] rtl:only-md:pr-[15px]">
                <!-- Profile media start -->
                <div class="lg:max-w-[40%] sm:max-w-[60%] xs:max-w-[85%] only-md:max-w-[40%]">
                  <div class="relative">
                      <img class="hidden dark:block" src="{{asset('storage/'. $showDataHomePage->image) }}" alt="">
                      <img class="dark:hidden" src="{{asset('storage/'. $showDataHomePage->image) }}" alt="">
                      <span class="absolute top-[100px] lg:top-[210px] right-[-20px] only-md:right-[-10px] only-xl:max-w-[65px] lg:max-w-[80px] xl:max-w-[105px] sm:max-w-[50px] only-md:max-w-[70px] animateUpDown"><img src="{{ asset('storage/'.$showDataHomePage->toolImage) }}"  alt=""></span>
                      <span class="absolute top-[80px] left-[-40px] md:left-[-10px] only-xl:max-w-[65px] lg:max-w-[80px] xl:max-w-[105px] sm:max-w-[50px] only-md:max-w-[70px] animateUpDown"><img src="{{ asset('storage/'.$showDataHomePage->toolimg) }}"  alt=""></span>

                      <div class="flex items-center absolute bottom-0 right-0 bg-white dark:bg-dark_accent1 rounded-[50px] px-[15px] py-[15px] shadow-[0_0_50px_0_rgba(196,206,213,0.2)] dark:shadow-[0_0_50px_0_rgba(0,0,0,0.2)]"> 
                        <div class="text-accent1 w-[45px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </div>
                        <div class="pl-[10px] pr-[15px]">
                            <span class="block text-[20px] lg:text-[26px] font-bold text-primary dark:text-white font-heebo leading-[1]">{{ $showDataHomePage->counter }}</span>
                            <span class="block text-paragraph dark:text-slate-200 text-[17px sm:text-[16px]">{{ $showDataHomePage->text }}</span>
                        </div>
                      </div>

                  </div>
                </div>
                <!-- Profile media start -->

                <!-- Profile content and nav start -->
                <div>
                    <!-- profile content start -->
                    <div class="grow sm:text-center">
                      <span class="text-accent1 xxl:text-[24px] xl:text-[22px] font-semibold italic pb-[5px]">{{ $showDataHomePage->labelText }}</span>
                      <h2 class="xxl:text-[60px] lg:text-[50px] only-md:text-[40px] sm:text-[28px] font-bold font-heebo text-heading dark:text-white">{{ $showDataHomePage->header }}</h2>
                      <h3 class="font-heebo font-normal text-primary dark:text-white xxl:text-[32px] lg:text-[28px]">{{ $showDataHomePage->samll_description }} </h3>
                      <p class="xxl:text-[20px] lg:text-[18px] md:text-[16px] text-paragraph dark:text-slate-200 lg:mt-[18px] md:mt-[15px]">{{ $showDataHomePage->paragph }}</p>
                      <div class="mt-7">
                        <button class="sm:mx-auto flex bg-accent1 lg:px-[15px] px-[12px] xl:py-[12px] py-[10px] rounded-[2rem] text-[16px] xl:text-[18px] font-medium text-white items-center transition duration-300 relative after:absolute :after:content-[''] after:bg-primary after:h-full after:w-full after:bottom-0 after:left-0 after:rounded-[2rem] after:trasition after:duration-300 after:opacity-0 hover:after:opacity-[1]">
                          <span class="icon bg-[#EFEBEB] text-accent1 w-[34px] h-[34px] rounded-full flex items-center justify-center ltr:xl:mr-[15px] ltr:mr-[10px] rtl:xl:ml-[15px] rtl:ml-[10px] relative z-[8] flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                          </span>
                          <span class="ltr:xl:pr-[5px] ltr:lg:pr-[5px] rtl:xl:pl-[5px] rtl:lg:pl-[5px] relative z-[8] flex-shrink-0">{{ $showDataHomePage->textbutton }}</span>
                        </button>
                        
                      </div>
                      <div class="gap-[18px] flex-wrap mt-[30px] sm:justify-center">
                        <div class="flex items-center flex-wrap gap-[15px] sm:justify-center">
                          <span class="font-heebo lg:text-[22px] md:text-[18px] font-semibold shrink-0 text-primary dark:text-white">Follow Me: </span>
                          <div class="flex items-center">
                            <a href="#" class="w-[30px] h-[30px] flex items-center justify-center text-accent1 border border-accent1 transition duration-300 hover:bg-accent1 hover:text-white rounded-full">
                              <svg  fill="currentColor" stroke="currentColor" width="13" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                            </a>
                            <a href="#" class="w-[30px] h-[30px] flex items-center justify-center text-accent1 border border-accent1 transition duration-300 hover:bg-accent1 hover:text-white rounded-full ltr:ml-[10px] rtl:mr-[10px]">
                                <svg fill="currentColor" stroke="currentColor" width="13" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"/></svg>
                            </a>
                            <a href="#" class="w-[30px] h-[30px] flex items-center justify-center text-accent1 border border-accent1 transition duration-300 hover:bg-accent1 hover:text-white rounded-full ltr:ml-[10px] rtl:mr-[10px]">
                              <svg fill="currentColor" stroke="currentColor" width="13" height="14"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                            </a>
                            <a href="#" class="w-[30px] h-[30px] flex items-center justify-center text-accent1 border border-accent1 transition duration-300 hover:bg-accent1 hover:text-white rounded-full ltr:ml-[10px] rtl:mr-[10px]">                            
                              <svg fill="currentColor" stroke="currentColor" width="13" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                            </a>
                          </div>
                        </div> 
                      </div>
                    </div>
                    <!-- profile content end -->
                </div>
                <!-- Profile content and nav end -->
              </div>
            </div>
        </section>
        <!-- Hero section end -->
      </main>
      <!-- Main wrapper end -->
  </div>
