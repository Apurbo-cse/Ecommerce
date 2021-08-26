<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public $table = "review";

    protected $fillable = [
        'item_id',
        'review',
        'ratings',
        'user_name'
    ];
}
