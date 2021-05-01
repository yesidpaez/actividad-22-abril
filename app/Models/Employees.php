<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $table = 'Employees';
    protected $primaryKey = 'id';

    protected $fillable= [
        'name',
        'lastname',
        'email',
        'document',
        'gender' ,
    ];
}
