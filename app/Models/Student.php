<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'student_id',
        'dept',
        'hours',
        'gpa',
        'grad_year'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

}
