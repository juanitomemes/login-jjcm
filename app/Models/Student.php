<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Student extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'Students';

    protected $fillable = [
        'student_name',
        'student_email',
        'student_gender',
        'student_image'
    ];
    public $sortable = ['student_name'];
}
