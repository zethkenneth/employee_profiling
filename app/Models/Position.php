<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Position extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'positions';
    protected $primaryKey = 'position_id';
    protected $fillable = [
        'position_name'
    ];
 

    public function employees() {
        return $this->hasOne(Employee::class); 
    }
}
