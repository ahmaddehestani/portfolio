<?php

namespace App\Services;

use App\Models\Permission;


class PermissionService  extends BaseService
{

    public function __construct(private Permission $permission)
    {
        parent::__construct($permission);
    }
}
