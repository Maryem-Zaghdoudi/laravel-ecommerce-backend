<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['id','name' , 'slug' ,'description' , 'icon',  'parent_id', 'position' , 'product_id' ];

    public function products()
{
    return $this->belongsToMany(Product::class , 'product_categories');
}
public function children()
{
    return $this->hasMany(\App\Models\Category::class, 'parent_id');
}

public function parent()
{
    return $this->belongsTo(\App\Models\Category::class, 'parent_id');
}




public function allChildren()
{
    
        $sections = new Collection();

        foreach ($this->children as $section) {
            $sections->push($section);
            $sections = $sections->merge($section->allChildren());
        }

        return $sections;
    
}
public function recursiveChildren()
{
   return $this->children()->with('recursiveChildren');
}


}
