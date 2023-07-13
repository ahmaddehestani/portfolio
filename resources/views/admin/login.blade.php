@extends('layouts.master')
<div class='h-screen w-screen'>
    <div class="flex justify-center items-center h-full w-full">
        <main class="border-2 p-4 border-blue-300 bg-white bg-opacity-30 max-w-2xl w-full rounded-2xl">
            <div class="flex  text-gray-900 flex-row items-center list-none text-lg font-bold mb-8">
                <div class=" px-4 py-2">
                    login
                </div>
            </div>
            <div class="flex flex-col items-center gap-4 mb-8">
                <form class="flex flex-col gap-4 w-full">
                    <div class=" gap-2 flex flex-col">

                        <label class="text-sm font-bold text-gray-800"> USER NAME</label>
                        <div class="relative w-full">

                            <input type="text"
                                   class="w-full border rounded-full border-gray-300 shadow-glass h-10 bg-transparent focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6 text-blue-500 absolute top-2 left-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </div>
                        <label class="text-sm font-bold text-gray-800"> PASSWORD</label>
                        <div class="relative w-full">

                            <input type="text"
                                   class="w-full border rounded-full border-gray-300 shadow-glass h-10 bg-transparent focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6 text-blue-500 absolute top-2 left-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>

                        </div>
                    </div>
                    <div class="justify-center items-center  flex flex-row">

                        <button class="flex border h-12 text-white bg-blue-500 border-green-300 items-center
                        justify-center rounded-xl w-28 mt-4">
                            LOG IN
                        </button>
                    </div>

                </form>
            </div>
        </main>


    </div>

</div>
