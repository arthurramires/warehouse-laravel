<?php
namespace App\Services;

use App\Repositories\PurchaseRespository;
use Illuminate\Http\Request;

class PurchaseService
{
    protected $purchaseRespository;

    public function __construct(
        PurchaseRespository $purchaseRespository
    )
    {
        $this->productRespository = $purchaseRespository;
    }

    public function register(Request $request)
    {
        $attributes = $request->all();
        $this->purchaseRespository->save($attributes);
    }
}
