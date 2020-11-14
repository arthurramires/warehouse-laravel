<?php

namespace App\Services;

use App\Repositories\WarehouseRespository;
use Illuminate\Http\Request;

class WarehouseService
{
    protected $warehouseRespository;

    public function __construct(
        WarehouseRespository $warehouseRespository
    )
    {
        $this->warehouseRespository = $warehouseRespository;
    }

    public function register(Request $request)
    {
        $attributes = $request->all();
        $this->warehouseRespository->save($attributes);
    }
}
