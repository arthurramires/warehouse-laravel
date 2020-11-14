<?php

namespace App\Repositories;
use App\Models\Purchase;

class PurchaseRespository extends BaseRepository
{
    protected $purchase;

    public function __construct(Purchase $purchase)
    {
        parent::__construct($purchase);
    }
}
