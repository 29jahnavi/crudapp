<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class category extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps=false;
    protected $table='categories';
    protected $fillable=[
        'categoryname',
        'displayorder',
    ];

    public function subCategories(){
        return $this->hasMany('App\Models\subcategory', 'categoryname', 'id');
    }
}
