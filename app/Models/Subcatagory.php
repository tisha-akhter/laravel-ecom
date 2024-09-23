<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcatagory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function catagory ()
    {
      return $this->belongsTo(Catagory::class,'cat_id','id');
    }
    public function product ()
    {
      return $this->hasMany(Product::class,'sub_cat_id','id');
    }
}
