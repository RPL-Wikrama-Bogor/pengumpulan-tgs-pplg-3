<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'medicines',
        'name_customer',
        'total_price',
        'created_at'
    ];
    
    protected $casts = [
        'medicines' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

