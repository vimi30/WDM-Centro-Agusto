<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    //
    protected $fillable = [
        'contact_Name', 'contact_Description', 'contact_Number',
    ];

    protected $primaryKey = 'contact_Id';

}
