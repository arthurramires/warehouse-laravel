<?php

namespace App\Http\Controllers;
use App\Services\CustomerService;
use Illuminate\Http\Request;


class CustomersController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function register(Request $request)
    {
        $customer = $this->customerService->register($request);

        return response()->json($customer);

    }
}
