@extends('admin.adminPanel')
@section('content')
    <div class='flex justify-center  w-full h-full m-6'>
        <div class="flex-col gap-3 border-b-2 border-gray-900">
            @if(isset($user->image))
                <div>
                    <img src="/storage/images/{{$user->image->url}}" class="pb-4 w-96 h-64 border-2 border-blue-100 rounded-xl">
                </div>
            @else
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-48 h-48">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>

                </div>
            @endif
            <div>
                <label class="text-sm font-bold text-gray-800"> Full Name :</label>
                {{$user->name}}  {{$user->family}}
            </div>
            <div>
                <label class="text-sm font-bold text-gray-800"> Email :</label>
                {{$user->email}}
            </div>
            <div>
                <label class="text-sm font-bold text-gray-800"> Phone :</label>
                {{$user->phone}}
            </div>
            <div>
                <label class="text-sm font-bold text-gray-800"> Address :</label>
                {{$user->address}}
            </div>
            <div>
                <label class="text-sm font-bold text-gray-800"> Age :</label>
                {{$user->age}}
            </div>
           <div>
               @if($user->roles)
                   <label class="text-sm font-bold text-gray-800"> Roles :</label>
                   @foreach($user->roles as $role)

                       <div class="border-2 gap-4 mb-4">
                           <div>
                               <label class="text-sm font-bold text-gray-800"> Role Name :</label>
                               {{$role->name}}
                           </div>
                           @endforeach
                           @endif
           </div>
                       <div>
                           @if($user->blogs)
                               <label class="text-sm font-bold text-gray-800"> Blogs :</label>
                               @foreach($user->blogs as $blog)

                                   <div class="border-2 gap-4 mb-4">
                                       <div>
                                           <label class="text-sm font-bold text-gray-800"> Blog Title :</label>
                                           {{$blog->title}}
                                       </div>
                                       <div>
                                           <label class="text-sm font-bold text-gray-800"> Blog Description :</label>
                                           {{$blog->description}}
                                       </div>
                                   </div>
                               @endforeach
                           @endif
                       </div>

        </div>
    </div>
@endsection

