<?php

namespace App\Services;

use App\Models\Category;


class CategoryService  extends BaseService
{

    public function __construct(private Brand $brand)
    {
        parent::__construct($brand);
    }
}
