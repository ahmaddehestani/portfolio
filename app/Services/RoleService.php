<?php

namespace App\Services;

use App\Models\Role;


class RoleService  extends BaseService
{

    public function __construct(private Role $role)
    {
        parent::__construct($role);
    }
}
