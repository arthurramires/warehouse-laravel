<?php

namespace App\Services;

use App\Repositories\CustomerRepository;
use Illuminate\Http\Request;

class CustomerService
{
    protected $customerRespository;

    public function __construct(
        CustomerRepository $customerRespository
    )
    {
        $this->customerRespository = $customerRespository;
    }

    public function register(Request $request)
    {
        $attributes = $request->all();
        $this->customerRespository->save($attributes);
    }
}
