<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductService
{
    protected $productRespository;

    public function __construct(
        ProductRepository $productRespository
    )
    {
        $this->productRespository = $productRespository;
    }

    public function register(Request $request)
    {
        $attributes = $request->all();

        if($attributes['type'] === 1){
            $this->productRespository->save([
                'name' => $attributes['name'],
                'description' => $attributes['description'],
                'value' => $attributes['value'],
                'link' => $attributes['link'],
            ]);
        }else if($attributes['type'] === 2){
            $this->productRespository->save($attributes);
        }
    }
}
