<div class="h-full md:min-h-screen  md:flex md:flex-col bg-[#F5F5F5] bg-cover bg-no-repeat bg-center dark:bg-[url('../images/home2-hero-bg-dark.png')] dark:bg-dark_primary_bg">


    <!-- Header area start -->
      <header class="hidden w-full md:block xl:py-8 py-7">
        <div class="xxl:px-[100px] xl:px-[30px] lg:px-[15px] md:px-[15px]">
          <div class="flex justify-end md:justify-between items-center">
              <div class="logo hidden md:block">
                  <a href="index-2.html">
                    <img class="hidden dark:block" src="assets/images/logo-light.png" alt="">
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
          <div class="ltr:xxl:pl-[440px] ltr:xl:pl-[300px] ltr:lg:pl-[230px] rtl:xxl:pr-[440px] rtl:xl:pr-[300px] rtl:lg:pr-[230px] ltr:xxl:pr-[100px] ltr:xl:pr-[50px] ltr:lg:pr-[30px] ltr:only-md:pr-[20px]  rtl:xxl:pl-[100px] rtl:xl:pl-[30px] md:px-[15px]">
              <div class="ltr:xxl:pl-[100px] ltr:xl:pl-[50px] ltr:lg:pl-[30px] ltr:only-md:pl-5 rtl:xxl:pr-[100px] rtl:xl:pr-[50px] rtl:lg:pr-[30px] rtl:only-md:pr-5">
                  <!-- Breadcrumb section start -->
                  <section class="xl:pt-[70px] lg:pt-[70px] md:pt-4">
                      <div class="text-center relative">
                          <h1 class="text-[40px] only-md:text-[55px] lg:text-[70px] stroke-white	text-white font-heebo font-bold title-stroke opacity-[0.15] leading-[1] uppercase">{{ $aboutUs->about_us_title }}</h1>
                          <span class="text-primary dark:text-white text-[25px] only-md:text-[35px] lg:text-[40px] font-heebo font-extrabold absolute left-0 right-0 bottom-0 uppercase"> About <span class="text-accent1">Me</span></span>
                      </div>
                  </section>
                  <!-- Breadcrumb section end -->
              
                  <!-- About me section start -->
                  <section class="dark:bg-dark_primary_bg md:pt-[50px] md:pb-[70px] lg:py-[100px] border-b-[1px] border-[#DDDDDD] dark:border-b dark:border-dark_accent1">
                      <div class="flex justify-between sm:flex-wrap sm:flex-col-reverse">
                          <div class="w-full lg:max-w-[550px]">
                              <div>
                                <span class="text-accent1 text-[20px] lg:text-[24px] font-medium inline-block mb-[5px] lg:mb-[5px]">{{ $aboutUs->about_us_title }}</span>
                                <h2 class="text-[22px] only-md:text-[30px] lg:text-[35px] xl:text-[40px] xxl:text-[48px] font-bold font-heebo leading-[36px] xxl:leading-[58px] xl:leading-[50px] lg:leading-[42px] text-[#000248] dark:text-white ltr:lg:pr-[50px] rtl:lg:pl-[50px]">{{ $aboutUs->about_description }}</h2>
                              </div>
                              <div class="mt-[30px]">
                                <h3 class="text-accent1 text-[20px] lg:text-[24px] font-medium ">{{ $aboutUs->infolabel }}</h3>
                                <ul class="flex justify-between flex-wrap mt-[18px]">
                                  @foreach($aboutUs->info as $aboutme)
                                  <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">First Name :{{ $aboutme['fristName'] }}</li>
                                  <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">Last Name :{{ $aboutme['lastname'] }}</li>
                                  <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">Address :{{ $aboutme['address'] }}</li>
                                  <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">Phone :{{ $aboutme['phone'] }}</li>
                                  <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">Email :{{ $aboutme['email'] }}</li>
                                  <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">Age :{{ $aboutme['age'] }}</li>
                                  <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">Nationality :{{ $aboutme['nationality'] }}</li>
                                  <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">Freelance :{{ $aboutme['freelance'] }}</li>
                                  <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">Skype :@foreach($aboutme['skype'] as $skype) {{$skype}}  ,@endforeach</li>
                                  <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">Languages :@foreach($aboutme['languages'] as $language) {{$language}} ,  @endforeach</li>
                                  @endforeach
                                </ul>
                                <a href="#" class="btn solid-btn text-accent1 lg:mt-[35px] md:mt-5  inline-block">{{$aboutUs->button_text}}</a>
                              </div>
                          </div>
                          <div class="sm:mb-[50px]">
                              <div class="relative">
                                <img class="relative z-10 sm:mx-auto" src="{{asset('storage/'.$aboutUs->image)}}" alt="">
                                <span class="absolute sm:w-[100px] sm:h-[100px] only-md:w-[150px] only-md:h-[150px] lg:w-[200px] lg:h-[200px] xl:w-[250px] xl:h-[250px] border-[8px] lg:border-[13px] border-accent1 rounded-full xs:bottom-[-25%] sm:bottom-[-12%] bottom-[-18%] ltr:sm:left-[3%] ltr:left-[-18%] rtl:sm:right-[3%] rtl:right-[-18%] animateUpDown"></span>
                              </div>
                              <div class="text-center mt-[30px]">
                                <h4 class="font-heebo text-[50px] lg:text-[80px] font-bold leading-[1] text-white title-stroke">{{$aboutUs->number_of_Experience}}+</h4>
                                <span class="font-bold sm:text-[20px] only-md:text-[24px] lg:text-[30px] font-heebo text-primary dark:text-white">{{$aboutUs->Experience_text}}</span>
                              </div>
                          </div>
                      </div>
                  </section>
                  <!-- About me section end -->

                  <!--  Resume section start -->
                  <section class="lg:py-[100px] md:py-[70px]">
                      <!-- Section title start -->
                      <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
                            <div class="max-w-full lg:max-w-[575px]  w-full">
                              <span class="text-accent1 text-[20px] lg:text-[24px] font-medium inline-block mb-[5px] lg:mb-[5px]">{{$aboutUs->EXPERICNCE_AND_EDUCATION}}</span>
                              <h2 class="text-[22px] only-md:text-[30px] lg:text-[35px] xl:text-[40px] xxl:text-[48px] font-bold font-heebo leading-[36px] xxl:leading-[58px] xl:leading-[50px] lg:leading-[42px] text-[#000248] dark:text-white">
                                {{$aboutUs->EXPERICNCE_AND_EDUCATION_header}}
                                </h2>
                            </div>
                            <div class="md:grow">
                              <p class="text-[#636363] dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full">
                                {{$aboutUs->EXPERICNCE_AND_EDUCATION_desc}}
                              </p>
                            </div>
                      </div>
                      <!-- Section title end -->

                      <!-- Resume wrapper start -->
                      <div class="flex flex-wrap">

                        <!-- Skill -->
                        <div class="w-full max-w-[100%] sm:max-w-full flex-grow">
                            <div class="relative ltr:pl-[30px] rtl:pr-[30px]">
                                <!-- border line -->
                                <div class="absolute w-[1px] ltr:left-0 rtl:right-0 top-[10px] bottom-[5px] bg-accent1"></div>
                                <!-- border line  end-->
                              @foreach($aboutUs->EXPERICNCE_json as $EXPERICNCES)
                                <!-- Single resume start -->
                                <div class="flex ltr:pr-[50px] ltr:sm:pr-[0] ltr:lg:pr-[70px rtl:pl-[50px] rtl:sm:pl-[0] rtl:lg:pl-[70px relative">
                                  <span class="absolute w-[20px] h-[20px] ltr:left-[-40px] rtl:right-[-40px] top-[10px] bg-accent1 rounded-full z-10 before:absolute before:bg-white before:w-[16px] before:h-[16px] before:rounded-full ltr:before:left-[2px] rtl:before:right-[2px] before:top-[2px]"></span>
                                  <div class="w-[70px] h-[70px]">
                                    <span class="w-[50px] h-[50px] bg-accent1 text-white flex items-center rounded-full justify-center">
                                      <svg width="25" height="40" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z"/></svg>
                                    </span>
                                  </div>
                                  <div class="flex-grow ltr:pl-[15px] rtl:pr-[15px]">
                                      <div class="flex items-center only-md:flex-col only-md:items-start 2xs:flex-col 2xs:items-start">
                                        <h3 class="font-heebo 2xs:text-[18px] text-[20px] xl:text-[22px] xxl:text-[25px] text-primary dark:text-white">{{$EXPERICNCES['title']}}</h3>
                                        <span class="bg-accent1 text-white text-[13px] rounded-[30px] px-[15px] py-[5px] uppercase ltr:ml-[15px] rtl:mr-[15px] ltr:only-md:ml-0 only-md:my-[5px] ltr:2xs:ml-0 rtl:only-md:m-0 rtl:2xs:mr-0 2xs:my-[5px] text-center">{{$EXPERICNCES['positionorcompnay']}}</span>
                                      </div>
                                      <p class="text-paragraph dark:text-slate-200 mt-[10px] text-[17px]">{{$EXPERICNCES['descritpion_EXPERICNC']}}</p>
                                    <span class="text-[17px] font-medium text-accent1 relative ltr:pl-[20px] rtl:pr-[20px] before:absolute before:bg-accent1 before:w-[7px] before:h-[7px] ltr:before:left-0 rtl:before:right-0 before:top-[50%] before:translate-y-[-50%] mt-[20px] block">{{$EXPERICNCES['data_of_EXPERICNC']}}</span>
                                  </div>
                              </div>
                              <!-- Single resume end -->
                              @endforeach

                            </div>
                        </div>
                        <!-- Skill -->

                 
                      </div>
                      <!-- Resume wrapper end -->
                  </section>
                  <!--  Resume section end -->

                  <!--  Skill section start -->
                  <section class="lg:pb-[100px] md:pb-[70px]">
                      <!-- Section title start -->
                        <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
                            <div class="max-w-full lg:max-w-[575px]  w-full">
                              <span class="text-accent1 text-[20px] lg:text-[24px] font-medium inline-block  mb-[5px] lg:mb-[5px]">{{$aboutUs->SKILLs_title}}</span>
                              <h2 class="text-[22px] only-md:text-[30px] lg:text-[35px] xl:text-[40px] xxl:text-[48px] font-bold font-heebo leading-[36px] xxl:leading-[58px] xl:leading-[50px] lg:leading-[42px] text-[#000248] dark:text-white">Skill of Best Masters
                                {{$aboutUs->SKILLs_header}}
                                </h2>
                            </div>
                            <div class="md:grow">
                              <p class="text-[#636363] dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full">  {{$aboutUs->Skills_description}}</p>
                            </div>
                        </div>
                      <!-- Section title end -->

                      <!-- Resume wrapper start -->
                      <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] md:flex-wrap md:text-center">

                          <!-- Column start -->
                          <div class="max-w-full xl:max-w-[500px]  w-full ">
                            @foreach($aboutUs->tools as $tool)
                            <!-- Single skill start -->
                            <div class="relative mb-7">
                              <div class="flex justify-between mb-1">
                                <span class="text-lg font-medium text-primary dark:text-white">{{$tool['tool']}}</span>
                                <span class="text-xs font-medium text-white bg-accent1 dark:text-white absolute py-1.5 px-1.5 bottom-6  rounded-sm before:absolute before:content-[''] before:bg-accent1 before:w-5 before:h-5 before:clip-polygon before:top-4 ltr:before:left-2 rtl:before:right-2 before:-z-10 ltr:left-[calc({{$tool['number']}}%_-_20px)] rtl:right-[calc({{$tool['number']}}%_-_20px)]">{{$tool['number']}}%</span>
                              </div>
                            <div class="w-full bg-gray-200 rounded-full h-[10px] dark:bg-gray-700 flex items-center">
                                  <div class="bg-accent1 h-[6px] rounded-full mx-[2px]" style="width: {{$tool['number']}}%"></div>
                              </div>
                            </div>
                            <!-- Single skill end -->
                            @endforeach

                          </div>
                          <!-- Column end -->

                    
                        
                      </div>
                      <!-- Resume wrapper end -->
                  </section>
                  <!--  Skill section end -->

                  <!-- Brand section start -->
                  <section class="lg:pb-[100px] md:pb-[70px]">
                      <div class="flex flex-wrap justify-between md:justify-center items-center gap-[30px]">
                        @foreach($aboutUs->beanners as $beanner)
                        <div>
                          <img class=" opacity-[0.7] hover:opacity-[1] transition duration-300 dark:hidden" src="{{asset('storage/'.$beanner['lightImage'])}}" alt="">
                          <img class=" grayscale hover:grayscale-0 transition duration-300 dark:block hidden" src="{{asset('storage/'.$beanner['darkImage'])}}" alt="">
                        </div>
                        @endforeach
                       
                      </div>
                  </section>
                  <!-- Brand section end -->

              </div>
          </div>
      </main>
      <!-- Main wrapper end -->

</div>
