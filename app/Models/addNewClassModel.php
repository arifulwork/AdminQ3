<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addNewClassModel extends Model
{
    use HasFactory;

    protected $table = 'subjects';
    protected $primaryKey = 'subject_id';
    protected $fillable = [
        'title',
        'seats',
        'date',
        'starttime',
        'endtime',
        'course_id',
        
    ];

    public function course(){

        return $this->belongsTo(Course::class);

    }

    public function student(){
        return $this->hasMany(Student::class);
    }

    public function stud(){
        return $this->hasMany(Student::class);
    }

}
