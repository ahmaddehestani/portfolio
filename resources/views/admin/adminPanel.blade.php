<!doctype html>
<html lang="en" class="scroll-smooth" dir="ltr">
<head>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Morex - Personal Portfolio HTML Template</title>

        <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.ico">
        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap" rel="stylesheet">

        <!-- Plugins css -->
        <link rel="stylesheet" href="/assets/css/mobilemenu.css" />
        <!-- <link rel="stylesheet" href="./assets/css/glightbox.min.css" /> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        <!-- Tailwind css -->
        <link rel="stylesheet" href="/assets/css/styles.css" />


        <script>
            // On page load or when changing themes, best to add inline in `head` to avoid FOUC
            if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
                document.documentElement.classList.add("dark");
                document.getElementById("light__to--dark")?.classList.add("dark--version");
            }
            if (localStorage.getItem("theme-color") === "light") {
                document.documentElement.classList.remove("dark");
                document.getElementById("light__to--dark")?.classList.remove("dark--version");
            }
        </script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>

        @vite('resources/css/app.css')
    </head>
<body>
<!-------- Plugins js ------>
<div>
    <div style="padding: 0px; margin:0px">
        <div class="flex " x-data="{showSideBar:true}">
            {{-- Side Bar --}}
            <div x-show="showSideBar"
                 class="flex flex-col bg-gray-700 text-white w-40 min-h-screen h-full gap-4 pl-4 pt-2 pb-4">
                {{-- Logo --}}
                <div class=" flex w-16 h-16">
                    <a href="{{route('adminPanel')}}" class="flex h-full w-full">

                        <img src="https://www.eghamat24.com/blog/wp-content/uploads/2023/05/where-is-van.webp" alt=""
                             class="rounded-full ">
                    </a>
                </div>
                {{-- Menu --}}
                {{-- user --}}
                <x-admin.assets.sidebar-menu-item name="user"/>
                {{-- End user --}}
                {{-- User --}}
                <div class="pt-4 cursor-pointer" x-data="{ user: false }">
                    <div class="text-base flex gap-2" x-on:click="user= !user">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                            </svg>
                        </div>
                        <div> Users</div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                            </svg>
                        </div>
                    </div>
                    <div class="flex pt-4 text-gray-200 border-b border-gray-400" x-show="user">
                        <a href="{{route('adminPanel')}}"> User List </a>
                    </div>
                    <div class="flex pt-4 text-gray-200 border-b border-gray-400" x-show="user">
                        <a href="{{route('adminPanel')}}"> Create User </a>

                    </div>
                </div>
                {{-- End User --}}
                {{-- Blog --}}
                <div class="pt-4 cursor-pointer" x-data="{ blog: false }">
                    <div class="text-base flex gap-2" x-on:click="blog= !blog">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                        </svg>

                        Blog
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                        </svg>
                    </div>
                    <div class="flex pt-4 text-gray-200 border-b border-gray-400" x-show="blog">
                        <a href="{{route('adminPanel')}}"> Blog List </a>

                    </div>
                    <div class="flex pt-4 text-gray-200 border-b border-gray-400" x-show="blog">
                        <a href="{{route('adminPanel')}}">Create Blog </a>

                    </div>
                </div>
                {{-- End Blog --}}
                {{-- Service --}}


                {{-- End Service --}}

                {{-- Brand --}}
                <x-admin.assets.sidebar-menu-item name="brand"/>
                {{-- End Brand --}}
                {{-- Category --}}
                <x-admin.assets.sidebar-menu-item name="category"/>
                {{-- End category --}}
                {{-- skill --}}
                <x-admin.assets.sidebar-menu-item name="skill"/>
                {{-- End skill --}}
                {{-- Role --}}
                <x-admin.assets.sidebar-menu-item name="role"/>
                {{-- End Role --}}
                {{-- blog --}}
                <x-admin.assets.sidebar-menu-item name="blog"/>
                {{-- End blog --}}
            </div>
            {{-- End Menu--}}
            {{-- Top Bar --}}
            <div class="flex flex-col  w-full bg-gradient-to-r from-white to-gray-200 h-screen ">
                <div class="flex justify-between px-8 items-center bg-slate-500 h-24 ">
                    <div class="flex cursor-pointer" x-on:click="showSideBar=!showSideBar">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75"/>
                        </svg>
                    </div>
                    <div class="flex justify-between items-center gap-5 ">

                        {{-- Avatar --}}
                        <div class=" flex w-20 h-20 ">
                            <img src="https://www.eghamat24.com/blog/wp-content/uploads/2023/05/where-is-van.webp"
                                 alt="" class="rounded-full">
                        </div>
                        {{-- WEllcom message --}}
                        <div class="flex-col text-gray-300 text-lg ">
                            <div class="flex cursor-pointer relative" x-data="{showMenu:false}"
                                 x-on:click="showMenu= !showMenu">
                                Ahmad Dehestani
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                </svg>
                                <ul x-on:click.away="showMenu=false" x-show="showMenu"
                                    class="list-none rounded-md overflow-hidden absolute top-full text-black flex flex-col w-full divide-y-2 divide-black text-base bg-gray-400">

                                    <li class='p-2 hover:bg-gray-300'>one</li>
                                    <li class='p-2 hover:bg-gray-300'>two</li>
                                    <li class='p-2 hover:bg-gray-300'>
                                        {{-- Sign out --}}
                                        <div class="cursor-pointer text-white">Sign Out</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
                {{-- End TopBar--}}
                {{-- Contetn Box --}}
                <div class="items-center justify-center pt-3 w-full h-full bg-white">
                    @yield('content')
                </div>
            </div>


        </div>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    </div>

</div>


<!-- Swiper js -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<!-- imagesloaded js -->
<script src="/assets/js/imagesloaded.pkgd.min.js" defer></script>

<!-- Isotope js -->
<script src="/assets/js/isotope.pkgd.min.js" defer></script>

<!-- Custom js -->
<script src="/assets/js/script.js" defer></script>
</body>
</html>

