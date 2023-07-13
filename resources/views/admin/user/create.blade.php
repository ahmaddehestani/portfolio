@extends('admin.adminPanel')
@section('content')
    <div class="m-3">
        <div class="flex justify-center items-center h-full w-full">
            <div class="border-2 p-4 border-blue-300 bg-green-50 bg-opacity-30 max-w-2xl w-full rounded-2xl">
                <div class="flex  text-gray-900 flex-row items-center list-none text-lg font-bold mb-8">
                    <div class=" px-2 py-2">
                        Create User</div>
                </div>
                <div class="flex flex-col items-center gap-4 mb-8">
                    <form class="flex flex-col gap-4 w-full" action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class=" gap-2 flex flex-col">
                            <label class="text-sm font-bold text-gray-800"> Name :</label>
                            <div class="relative w-full">
                                <input type="text" name='name'
                                       class="w-full border rounded-2xl border-gray-300 shadow-glass h-10 bg-transparent focus:outline-none">
                            </div>
                            @error('name')
                            <h4 class="text-base text-center text-rose-600">{{$message}}</h4>
                            @enderror
                        </div>
                        <div class=" gap-2 flex flex-col">
                            <label class="text-sm font-bold text-gray-800"> Family :</label>
                            <div class="relative w-full">
                                <input type="text" name='family'
                                       class="w-full border rounded-2xl border-gray-300 shadow-glass h-10 bg-transparent focus:outline-none">
                            </div>
                            @error('family')
                            <h4 class="text-base text-center text-rose-600">{{$message}}</h4>
                            @enderror
                        </div>
                        <div class=" gap-2 flex flex-col">
                            <label class="text-sm font-bold text-gray-800"> Email :</label>
                            <div class="relative w-full">
                                <input type="email" name='email'
                                       class="w-full border rounded-2xl border-gray-300 shadow-glass h-10 bg-transparent focus:outline-none">
                            </div>
                            @error('email')
                            <h4 class="text-base text-center text-rose-600">{{$message}}</h4>
                            @enderror
                        </div>
                        <div class=" gap-2 flex flex-col">
                            <label class="text-sm font-bold text-gray-800"> Password :</label>
                            <div class="relative w-full">
                                <input type="password" name='password'
                                       class="w-full border rounded-2xl border-gray-300 shadow-glass h-10 bg-transparent focus:outline-none">
                            </div>
                            @error('password')
                            <h4 class="text-base text-center text-rose-600">{{$message}}</h4>
                            @enderror
                        </div>
                        <div class=" gap-2 flex flex-col">
                            <label class="text-sm font-bold text-gray-800"> Phone :</label>
                            <div class="relative w-full">
                                <input type="text" name='phone'
                                       class="w-full border rounded-2xl border-gray-300 shadow-glass h-10 bg-transparent focus:outline-none">
                            </div>
                            @error('phone')
                            <h4 class="text-base text-center text-rose-600">{{$message}}</h4>
                            @enderror
                        </div>
                        <div class=" gap-2 flex flex-col">
                            <label class="text-sm font-bold text-gray-800"> Age :</label>
                            <div class="relative w-full">
                                <input type="text" name='age'
                                       class="w-full border rounded-2xl border-gray-300 shadow-glass h-10 bg-transparent focus:outline-none">
                            </div>
                            @error('age')
                            <h4 class="text-base text-center text-rose-600">{{$message}}</h4>
                            @enderror
                        </div>
                        <div class=" gap-2 flex flex-col">
                            <label class="text-sm font-bold text-gray-800"> Address :</label>
                            <div class="relative w-full">
                                <textarea type="text" name='address'
                                       class="w-full border rounded-2xl border-gray-300 shadow-glass h-32 bg-transparent focus:outline-none">
                                </textarea>
                            </div>
                            @error('address')
                            <h4 class="text-base text-center text-rose-600">{{$message}}</h4>
                            @enderror
                        </div>

                        <div class=" gap-2 flex flex-col">
                            <label class="text-sm font-bold text-gray-800"> Avatar :</label>
                            <div class="relative w-full">
                                <input type="file" name='avatar'
                                       class=" border border-gray-300 shadow-glass bg-transparent focus:outline-none">
                            </div>
                            @error('avatar')
                            <h4 class="text-base text-center text-rose-600">{{$message}}</h4>
                            @enderror
                        </div>
                        <div class="justify-center items-center  flex flex-row">


                            <button type="submit" class="flex border h-12 text-white bg-blue-500 border-green-300 items-center
                        justify-center rounded-xl w-full mt-4">
                                Create User
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
