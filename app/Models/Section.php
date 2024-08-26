<?php

namespace App\Models;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'class_id'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function class ()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
}
