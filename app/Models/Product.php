<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use \App\Models\Traits\Uuid;
    protected $fillable = ['name', 'type', 'description', 'value', 'link'];
    public $incrementing = false;
    protected $keyType = 'string';

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
