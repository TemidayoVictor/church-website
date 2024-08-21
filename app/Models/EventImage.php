<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventImage extends Model
{
    use HasFactory;
    
    protected $table = "eventimages";

    protected $fillable = [
        'image',
        'event',
    ];
}
