<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'employee_id',
        'employee_lastname',
        'employee_firstname',
        'employee_middlename',
        'employee_extname',
        'fk_department_id',
        'fk_position_id'
    ];
 
}
