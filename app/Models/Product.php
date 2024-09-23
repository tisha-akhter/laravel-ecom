<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function catagory ()
    {
      return $this->belongsTo(Catagory::class,'cat_id','id');
    }
    public function subCatagory()
    {
      return $this->belongsTo(subCatagory::class,'sub_cat_id','id');
    }
    public function color ()
    {
      return $this->hasMany(Color::class,'product_id','id');
    }
    public function size ()
    {
      return $this->hasMany(Size::class,'product_id','id');
    }
    public function galleryImage ()
    {
      return $this->hasMany(GalleryImage::class,'product_id','id');
    }
}
