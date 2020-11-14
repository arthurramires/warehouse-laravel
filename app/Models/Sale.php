<?php

namespace App\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use Uuid;

    protected $fillable = ['customer_id', 'total_value'];
    public $incrementing = false;
    protected $keyType = 'string';

    public function products()
    {
        return $this->hasMany(Product::class);

    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
