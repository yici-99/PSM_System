<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carnival extends Model
{
    use HasFactory;

    protected $fillable = [
       'coordinatorID',
       'coordinatorName',
       'studentID',
       'studentName',
       'studentPhone',
       'date',
       'appointmentID',
       'reason',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
