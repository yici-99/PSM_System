<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class psm2result extends Model
{
    use HasFactory;
    protected $table = 'psm2result';
    protected $primaryKey = 'resultID';
    public $timestamps = false;
}
