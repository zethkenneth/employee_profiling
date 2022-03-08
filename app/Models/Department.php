<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Department extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'departments';
    protected $primaryKey = 'department_id';
    protected $fillable = [
        'department_name',
    ];

    public function employees() {
        return $this->hasOne(App\Model\employee::class); 
    }
    
}
