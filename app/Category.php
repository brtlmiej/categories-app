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
    * Override parent boot and Call deleting event
    *
    * @return void
    */
    protected static function boot() 
    {
        parent::boot();

        static::deleting(function($categories) {
            foreach ($categories->subcategories()->get() as $subcat) {
                $subcat->delete();
            }
        });
   }

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
