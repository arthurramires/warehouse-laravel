<?php

namespace App\Repositories;
use App\Models\Warehouse;

class WarehouseRespository extends BaseRepository
{
    protected $warehouse;

    public function __construct(Warehouse $warehouse)
    {
        parent::__construct($warehouse);
    }
}
