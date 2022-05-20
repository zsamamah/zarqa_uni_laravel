<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'project_name',
        'owner_dr',
        'date',
        'link',
        'students',
        'presenter_id',
        'short_des',
        'langs',
        'full_des'
    ];

    public function owner()
    {
        return $this->hasOne(User::class);
    }

    public function mark()
    {
        return $this->hasOne(Mark::class);
    }
}
