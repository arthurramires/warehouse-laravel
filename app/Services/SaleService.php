<?php

namespace App\Services;

use App\Repositories\SaleRespository;
use Illuminate\Http\Request;

class SaleService
{
    protected $saleRespository;

    public function __construct(
        SaleRespository $saleRespository
    )
    {
        $this->productRespository = $saleRespository;
    }

    public function register(Request $request)
    {
        $attributes = $request->all();
        $this->saleRespository->save($attributes);
    }
}
