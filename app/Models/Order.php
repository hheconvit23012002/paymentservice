<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    const STATUS_PAY = 'status_paid';
    const STATUS_NOT_PAY = 'status_not_paid';
}
