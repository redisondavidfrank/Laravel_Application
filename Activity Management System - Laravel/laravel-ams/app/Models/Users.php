<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    /**
     * This is to allow the program to fillout the information on users table
     * whenever a new data is created.
     */
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'student_number', 'username', 'password',
    ];
}
