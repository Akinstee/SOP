<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceSettings extends Model
{
    protected $fillable = [
        'invoice_status', 'invoice_amount', 'invoice_number_prefix', // Add other fields as needed
    ];
}
