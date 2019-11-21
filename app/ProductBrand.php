<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
{
    protected $fillable = ['product_brand_name', 'product_brand_description', 'publication_status'];
}
