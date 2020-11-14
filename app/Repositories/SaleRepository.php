<?php

namespace App\Repositories;
use App\Models\Sale;

class SaleRespository extends BaseRepository
{
    protected $sale;

    public function __construct(Sale $sale)
    {
        parent::__construct($sale);
    }
}
