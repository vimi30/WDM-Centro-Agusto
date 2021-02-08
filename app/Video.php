<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $fillable = [
        'video_Type', 'video_Description','video_URL', 'date',
    ];

    protected $primaryKey = 'video_Id';
}
