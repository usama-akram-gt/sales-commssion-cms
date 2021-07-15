<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = "sales";
    protected $fillable = [
        'date', 'client_name', 'carrier', 'policy_name', 'policy_type', 
        'policy_amount', 'annual_premium', 'monthly_premium', 'commission_amount',
    ];
}
