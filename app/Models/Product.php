<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
    'title',
    'slug',
    'subTitle',
    'description',
    'price',
    'demoLink',
    'imageSrc',
    'imageAlt',
    'promotion',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class , 'product_categories');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class , 'tag_products');
    }

    public function sluggable():array
{
    return [
        'slug' => [
            'source' => 'title'
        ]
    ];
}
}
