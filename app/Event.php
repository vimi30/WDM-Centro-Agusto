<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
        'event_type', 'event_description', 'date',
    ];

    protected $primaryKey = 'event_id';
}
