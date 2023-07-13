<?php

namespace App\Services;

use App\Models\Brand;


class BrandService  extends BaseService
{

    public function __construct(private Brand $brand)
    {
        parent::__construct($brand);
    }
}
