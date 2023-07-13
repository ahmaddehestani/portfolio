<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Services\ImageService;
use App\Services\UserService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(private UserService $userService)
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=$this->userService->index();
      return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        if ($request['avatar']) {
            $file_image_url =Carbon::now()->microsecond . '.' . $request['avatar']->extension();
            $request['avatar']->storeAs('images', $file_image_url, 'public');
        }
        $user=$this->userService->store($request->validated());
        $user->image()->create(['url'=>$file_image_url]);
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
       return view('admin.user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest  $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
