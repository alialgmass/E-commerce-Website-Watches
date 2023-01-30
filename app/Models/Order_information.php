<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_information extends Model
{
    use HasFactory;
    protected $fillable=['id',	'address'	,'city'	,'status'	,'phone'	,'arrive_date',	'price'];
    public function order(){
        return $this->hasMany(Order::class, 'order_information_id', 'id');
    }
}
