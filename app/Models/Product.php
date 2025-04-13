<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category;

class Product extends Model
{
    use HasFactory;

    const IS_SHOW = ['TRUE' => 't', 'FALSE' => 'f'];

    const ITEM_OF_PAGE = 6;

    /**
     * Get the product that owns the category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // public function getAvatarAttribute($value)
    // {
    //     return "/storage/$value";
    // }

    
    // public function setTitleDescriptionAttribute($value)
    // {
    //     return trim($value);
    // }

    
    public function getTitleDescriptionAttribute($value)
    {
        return trim($value);
    }
}
