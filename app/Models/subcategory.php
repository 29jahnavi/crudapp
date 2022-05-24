<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class subcategory extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps=false;
    protected $table='subcategories';
    protected $fillable=[
        'categoryname',
        'subcategoryname',
        'displayorder',
    ];

    public function categories(){
        return $this->belongsTo('App\Models\category', 'categoryname', 'id');
    }
}
