<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devotional extends Model
{
    use HasFactory;

    protected $table = "devotional";

    protected $fillable = [
        'topic',
        'body',
        'prayer',
        'dateuploaded',
    ];
}
