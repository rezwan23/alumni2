<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoGalleryImage extends Model
{
    protected $fillable = [
        'image'
    ];

    public function galleries()
    {
        return $this->belongsToMany(PhotoGallery::class, 'gallery_images', 'image_id', 'gallery_id');
    }
}
