@extends('layouts.master')
<div class="">
    <!-- Header area start -->
    @include('layouts.header')
    <!-- Header area end -->

        <div class=" bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-4 rounded-2xl relative">
            <!-- Modal close button -->

            <!-- Modal close button -->
            <!-- Modal main content -->
            <div>
                <div class="pt-3">
                    <img class="max-w-full h-auto rounded-xl mt-6 mx-auto w-full" src="./assets/images/blog/blog-details-1.png" alt="Blog details">
                </div>
                <h4 class="text-[25px] lg:text-[32px] leading-7 font-heebo font-bold mt-8">
                    <span class="text-primary dark:text-white">Angular team welarges to trequests blog</span>
                </h4>
                <div class="blog__content mt-5 text-[17px] leading-7 dark:text-slate-300">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page is
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using ique maiestatis sum quod sum ut alienum nec et to
                        summo possim persequeris vix mea. Adhuc quodsi qui, sit no tale essent electramei sum sums
                        rodesset in pro, quo scripta feugait vidisse. Lorem ipsum dolor sit amet, eu duo ferri labor dicat
                        Mea ex modo reque senserit, et sed hinc dolor, scaevola sum salutandi expetendis vix ne his
                        quod mundi consequat sum. There are not many of passages of lorem </p>
                    <p class="mt-5">It is a long established fact that a reader will be distracted by the readable content of a page is
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters,</p>

                    <blockquote class="p-4 my-4 bg-gray-50 ltr:border-l-4 rtl:border-r-4 border-gray-300 dark:border-dark_accent1 dark:bg-dark_accent1 dark:text-white text-xl">
                        <svg aria-hidden="true" class="w-10 h-10 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/></svg>
                        <p>"Tailwind css is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                    </blockquote>
                </div>

                <!-- Blog comment box start -->
                <div class="mt-10">
                    <h4 class="text-primary mb-5 dark:text-white">Comments (2)</h4>
                    <div class="mt-7">
                        <!-- Single comment start -->
                        <div class="flex gap-4 border-b border-gray-300 pb-7 dark:text-slate-300">
                            <div class="w-20">
                                <img src="./assets/images/blog/avatar.png" alt="">
                            </div>
                            <div>
                                <div class="flex items-center gap-3">
                                    <h6 class="text-primary font-heebo dark:text-white">Bonas Mera</h6>
                                    <span>November 16, 2022</span>
                                </div>
                                <p class="py-2">Lorem ipsum is simply free textdolor sit amet, consectetur notted adipisicing elit sed do iusmod tempor incididu.</p>
                                <button class="text-accent1 font-heebo font-bold text-[18px] transition-all duration-300 hover:text-primary bg-transparent">Reply</button>
                            </div>
                        </div>
                        <!-- Single comment end -->

                        <!-- Single comment start -->
                        <div class="flex gap-4 pt-7 pl-20 dark:text-slate-300">
                            <div class="w-20">
                                <img src="./assets/images/blog/avatar-2.png" alt="">
                            </div>
                            <div>
                                <div class="flex items-center gap-3">
                                    <h6 class="text-primary font-heebo dark:text-white">Jhone Doe</h6>
                                    <span>November 20, 2022</span>
                                </div>
                                <p class="py-2">Lorem ipsum is simply free textdolor sit amet, consectetur notted adipisicing elit sed do iusmod tempor incididu.</p>
                                <button class="text-accent1 font-heebo font-bold text-[18px] transition-all duration-300 hover:text-primary bg-transparent">Reply</button>
                            </div>
                        </div>
                        <!-- Single comment end -->
                    </div>
                </div>
                <!-- Blog comment box end -->

                <form action="#" class="mt-10">
                    <h4 class="text-primary mb-5 dark:text-white">Leave a Reply</h4>
                    <div class="grid grid-cols-2 gap-7">
                        <div>
                            <input class="w-full bg-white rounded px-5 py-2 h-11 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" type="text" name="name" placeholder="Your name" >
                        </div>
                        <div>
                            <input class="w-full bg-white rounded px-5 py-2 h-11 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" type="email" name="email" placeholder="Your email" >
                        </div>
                        <div class="col-span-2">
                            <textarea class="w-full bg-white rounded px-5 py-2 h-40 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <button class="btn--small solid-btn mt-7">Post Comment</button>
                </form>
            </div>
            <!-- Modal main content end -->
            <x-contact-form/>
            <x-assets.button-back-top/>
    @include('layouts.footer')
</div>
