<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'student_name',
        'invoice_number',
        'amount',
        'issue_date',
        'due_date',
        // Add other fields as needed
    ];

    // Define a relationship with the Course model if applicable
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
