<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    //
    protected $fillable = [
        'project_Name', 'project_Description', 'date',
    ];

    protected $primaryKey = 'project_Id';
}
