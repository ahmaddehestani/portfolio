@extends('admin.adminPanel')
@section('content')
    <div class='flex justify-center  w-full h-full m-6'>
        <div class="flex-col gap-3 border-b-2 border-gray-900">
            <div>
                <label class="text-sm font-bold text-gray-800"> Name :</label>
                {{$role>name}}
            </div>
        </div>
    </div>
@endsection

