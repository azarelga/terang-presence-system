<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'clock_in',
        'clock_out',
        'status',
        'dispensation_reason',
        'dispensation_status',
    ];

    // Relationship: Each Presence belongs to a User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
