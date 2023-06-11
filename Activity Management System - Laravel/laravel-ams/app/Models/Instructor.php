<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    /**
     * This is to allow the program to fillout the information on instructor table
     * whenever a new data is created.
     */
    use HasFactory;
    public $timestamps = false;
    protected $table = 'instructor';
    protected $instructor_id = 'instructor_id';
    protected $fillable = [
        'firstname','lastname'
    ];
}
