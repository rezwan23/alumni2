<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class PhotoGallery extends Model
{
    protected $fillable =[
        'name', 'slug'
    ];
    use HasSlug;


    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function images()
    {
        return $this->belongsToMany(PhotoGalleryImage::class, 'gallery_images', 'gallery_id', 'image_id');
    }
}
