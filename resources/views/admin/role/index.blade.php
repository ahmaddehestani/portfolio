@extends('admin.adminPanel')
@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <h1 class="items-center justify-center flex text-5xl ">Role List</h1>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class=" text-xs text-gray-700  uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>

                <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4">
                        {{$role->name}}
                    </th>

                    <td class="flex px-6 py-4 gap-4 justify-between text-center items-center ">

                            <a href="{{route('role.show',$role->id)}}" class="font-medium rounded-lg flex-1 h-8 p-2 bg-blue-300 text-black  hover:bg-blue-500">Show</a>
                            <a href="{{route('role.edit',$role->id)}}" class="font-medium rounded-lg flex-1 h-8 p-2 bg-yellow-300 text-black  hover:bg-yellow-500">Edit</a>


                                <form action="{{route('role.destroy',$role->id)}}" method="POST" class="font-medium rounded-lg flex-1 h-8 p-2 bg-rose-300 text-black hover:cursor-pointer hover:bg-rose-500">
                                    @csrf
                                    @method('DELETE')
                                    <button class="w-full"> Delete</button>
                                </form>




                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
{{--        <div class="flex justify-center">--}}
{{--            {{$blogs->links('livewire.assets.pagination-links')}}--}}
{{--        </div>--}}

    </div>
@endsection

