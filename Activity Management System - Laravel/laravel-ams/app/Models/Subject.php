<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /**
     * This is to allow the program to fillout the information on subject table
     * whenever a new data is created.
     */
    use HasFactory;
    public $timestamps = false;
    protected $table = 'subject';
    protected $key = 'subject_id';
    protected $fillable = [
        'subject_name'
    ];
}
