<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addpost extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table='addposts';
    protected $fillable=[
        'post',
        'image',
    ];
}
