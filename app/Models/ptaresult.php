<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ptaresult extends Model
{
    use HasFactory;
    protected $table = 'ptaresult';
    protected $primaryKey = 'resultID';
    public $timestamps = false;
}
