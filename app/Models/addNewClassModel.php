<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addNewClassModel extends Model
{
    use HasFactory;

    protected $table = 'classes';
    protected $primarykey = 'class_id';
    protected $fillable = [
        'title',
        'seats',
        'date',
        'starttime',
        'endtime',
        'course_id',
        
    ];

}
