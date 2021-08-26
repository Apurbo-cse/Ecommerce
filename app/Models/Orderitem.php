<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'order_id',
        'quantity',
        'color',
        'size',
        'price',
        'vendor_id',
        'collect'
    ];

    public function Order()
    {
        return $this->belongsTo(Order::class,'order_id','id');
    }

    public function item()
    {
        return $this->belongsTo(item::class,'item_id','id');
    }

    public function vendor()
    {
        return $this->belongsTo(user::class,'vendor_id','id');
    }
}
