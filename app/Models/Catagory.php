<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function subCatagory ()
    {
      return $this->hasMany(Subcatagory::class,'cat_id','id');
    }
   public function product()
   {
    return $this->hasMany(Product::class,'cat_id','id');
   }
}
