<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    /**
     * This is to allow the program to fillout the information on assignment table
     * whenever a new data is created.
     */
    use HasFactory;
    public $timestamps = false;
    protected $table = 'assignment';
    protected $primaryKey = 'assignment_id';
    protected $fillable = [
        'assignment_id','assignment_name'
    ];
}
