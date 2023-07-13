<?php

namespace App\Services;

use App\Models\User;


class UserService  extends BaseService
{

    public function __construct(private User $user)
    {
        parent::__construct($user);
    }
    public function index(){
       return $users=User::all();
    }
}
