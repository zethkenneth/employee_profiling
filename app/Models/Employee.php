<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Position;
use App\Models\Department;

class Employee extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $table = 'employees';
    protected $primaryKey = 'employee_id';
    protected $fillable = [
        'employee_lastname',
        'employee_firstname',
        'employee_middlename',
        'employee_extname',
        'fk_department_id',
        'fk_position_id'
    ];

    public function positions() {
        return $this->belongsTo(Position::class,'fk_position_id'); 
    }

    public function departments() {
        return $this->belongsTo(Department::class,'fk_department_id'); 
    }
 
}
