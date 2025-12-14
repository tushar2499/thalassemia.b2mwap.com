<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'ticket_series_id',
        'ticket_no',
        'msisdn',
        'amount',
        'pay_status',
        'date',
        'response_data',
    ];
}
