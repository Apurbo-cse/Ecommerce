<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_category_id',
        'name',
        'group_id',
        'description',
        'price',
        'offer_price',
        'off',
        'quantity',
        'latest',
        'featured',
        'status',
        'photo0',
        'photo',
        'photo1',
        'photo2',
        'size',
        'color',
        'vendor_id',
        'brand_id',
        'slug'
    ];

    public function group()
    {
        return $this->belongsTo(Category::class,'group_id','id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'sub_category_id','id');
    }

    public function vendor()
    {
        return $this->belongsTo(User::class,'vendor_id','id');
    }
}
