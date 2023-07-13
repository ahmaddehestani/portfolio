
@extends('admin.adminPanel')
@section('content')
    <div class="m-3">
        <div class="flex justify-center items-center h-full w-full">
            <main class="border-2 p-4 border-blue-300 bg-green-50 bg-opacity-30 max-w-2xl w-full rounded-2xl">
                <div class="flex  text-gray-900 flex-row items-center list-none text-lg font-bold mb-8">
                    <div class=" px-2 py-2">
                        Edit Category</div>
                </div>
                <div class="flex flex-col items-center gap-4 mb-8">
                    <form class="flex flex-col gap-4 w-full" action="{{route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class=" gap-2 flex flex-col">
                            <label class="text-sm font-bold text-gray-800"> Name :</label>
                            <div class="relative w-full">
                                <input type="text" name='name' value="{{$category->name}}"
                                       class="w-full border rounded-2xl border-gray-300 shadow-glass h-10 bg-transparent focus:outline-none">
                            </div>
                            @error('name')
                            <h4 class="text-base text-center text-rose-600">{{$message}}</h4>
                            @enderror
                        </div>
                        <div class="justify-center items-center  flex flex-row">


                            <button type="submit" class="flex border h-12 text-white bg-blue-500 border-green-300 items-center
                        justify-center rounded-xl w-28 mt-4">
                               Edit category
                            </button>
                        </div>

                    </form>
                </div>
            </main>


        </div>
    </div>
@endsection
