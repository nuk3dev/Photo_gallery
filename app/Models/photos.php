<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    use HasFactory;

    protected $fillable = [
        'album_name',
        'cover_photo',
        'upload',
        'deleted',
        'created_at',
        'updated_at'
    ];

    // Define the relationship with the Album model
    public function album()
    {
        return $this->belongsTo(Photos::class);
    }
}
