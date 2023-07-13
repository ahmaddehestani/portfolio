<header class="absolute w-full left-0 top-0">
    <div class="header__sticky py-5">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <div class="logo">
                 <x-assets.logo />
                </div>
                <div class="flex items-center ">
                    <nav >
                        <ul class="flex items-center">
                            <li>
                                <a href="/#home" class="text-[17px] xl:text-[19px] text-black dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">Home</a>
                            </li>
                            <li>
                                <a href="/#about" class="text-[17px] xl:text-[19px] text-black dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">About</a>
                            </li>

                            <li>
                                <a href="/#services" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">Services</a>
                            </li>
                            <li>
                                <a href="/#portfolio" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">Portfolio</a>
                            </li>
                            <li>
                                <a href="/#blog" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">Blog</a>
                            </li>
                            <li><a href="#contact" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">Contact</a></li>
                        </ul>
                    </nav>

                </div>
                <div class="lg:hidden">
                    <button class="offcanvas__header--menu__open--btn text-primary dark:text-white " data-offcanvas>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Start Offcanvas header menu -->
        <div class="offcanvas__header lg:hidden dark:bg-gray-800">
            <div class="offcanvas__inner">
                <div class="offcanvas__logo">
                    <a class="offcanvas__logo_link" href="index.html">
                        <img class="dark:hidden" src="/assets/images/logo.png" alt="Grocee Logo" width="158" height="36">
                        <img class="hidden dark:block" src="/assets/images/logo-light.png" alt="Grocee Logo" width="158" height="36">
                    </a>
                    <button class="offcanvas__close--btn dark:text-white" data-offcanvas>close</button>
                </div>
                <nav class="offcanvas__menu">
                    <ul class="offcanvas__menu_ul">
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item dark:text-white" href="#home">Home</a>
                            <!-- <ul class="offcanvas__sub_menu">
                                <li class="offcanvas__sub_menu_li"><a href="index.html" class="offcanvas__sub_menu_item dark:text-white">Home One</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="index-2.html" class="offcanvas__sub_menu_item dark:text-white">Home Two</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="index-3.html" class="offcanvas__sub_menu_item dark:text-white">Home Three</a></li>
                            </ul> -->
                        </li>
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#about">About</a></li>
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#services">Services</a></li>
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#portfolio">Portfolio</a></li>
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#blog">Blog</a></li>
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#contact">Contact</a></li>
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
    </div>


</header>
