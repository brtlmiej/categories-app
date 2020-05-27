<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'parent_id'];

    /**
     * Relationship with parent category.
     * 
     */
    public function parentCategory()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }

    /**
     * Relationship with subcategories.
     * 
     */
    public function subcategories()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }
}
