<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form2 extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table='form2';
    protected $fillable=[
        'fname',
        'lname',
        'email'
    ];
}
