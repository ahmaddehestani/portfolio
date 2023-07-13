<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class BaseService
{



    public function __construct(private Model $model)
    {
    }

    public function store(array $data = [])
    {
        return $this->model->create($data);
    }
    public function update($model,array $data = [])
    {
        return $model->update($data);
    }
    public function destroy($model)
    {
        return $model->delete();
    }

}
