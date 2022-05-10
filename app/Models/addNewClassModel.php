<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addNewClassModel extends Model
{
    use HasFactory;

    protected $table = 'add_new_class_models';
    protected $fillable = [
        'title',
        'seats',
        'date',
        'starttime',
        'endtime',
    ];

}
