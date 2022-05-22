<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stud extends Model
{
    use HasFactory;
    protected $table = 'secondstudents';
    protected $primaryKey = 'stud_id';
    protected $fillable = [
        'sname',
        'email',
        'coursetwo',
        
        
        
    ];

    public function addnewclassmodel(){

        return $this->belongsTo(addNewClassModel::class);

    }
}
