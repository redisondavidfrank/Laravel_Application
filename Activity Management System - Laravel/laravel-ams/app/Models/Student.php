<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * This is to allow the program to fillout the information on student table
     * whenever a new data is created.
     */
    use HasFactory;
    public $timestamps = false;
    protected $table = 'student';
    protected $primaryKey = 'student_id';
    protected $fillable = [
       'student_id','id_number','firstname', 'lastname', 'gender', 'address', 'contact', 'course'
    ];
}
