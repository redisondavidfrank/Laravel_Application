<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /**
     * This is to allow the program to fillout the information on status table
     * whenever a new data is created.
     */
    use HasFactory;
    public $timestamps = false;
    protected $table = 'status';
    protected $primaryKey = 'status_id';
    protected $fillable = [
        'status_name'
    ];
}
