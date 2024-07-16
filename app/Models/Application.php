<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_description',
        'application_date',
        'student_id'
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
