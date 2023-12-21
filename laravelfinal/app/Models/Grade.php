<?php

namespace App\Models;
use Illuminate\Http\Request;
use App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'course_id',
        'grade',
    ];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function student() {
        return $this->belongsTo(Student::class);
    }
}
