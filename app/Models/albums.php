<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'img_name',
        'album_id',
        'deleted',
        'create_at',
        'updated_at'
    ];

    // Define the relationship with the Album model
    public function album()
    {
        return $this->belongsTo(Albums::class);
    }
}
