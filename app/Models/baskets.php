<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class baskets extends Model
{
    use HasFactory;
    protected $fillable = [
        'basket_id ',
        'item_id',
        'user_id'
    ];
}
