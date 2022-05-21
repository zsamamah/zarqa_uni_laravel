<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'project_id',
        'a_takamol',
        'b_takamol',
        'c_takamol',
        'd_takamol',
        'a_seyaghah',
        'b_seyaghah',
        'c_seyaghah',
        'd_seyaghah',
        'a_wodoh',
        'b_wodoh',
        'c_wodoh',
        'd_wodoh',
        'a_shareh',
        'b_shareh',
        'c_shareh',
        'd_shareh',
        'a_ekhraj',
        'b_ekhraj',
        'c_ekhraj',
        'd_ekhraj',
        'a_tasalsol',
        'b_tasalsol',
        'c_tasalsol',
        'd_tasalsol',
        'a_fekra',
        'b_fekra',
        'c_fekra',
        'd_fekra',
        'a_mahara',
        'b_mahara',
        'c_mahara',
        'd_mahara',
        'a_code',
        'b_code',
        'c_code',
        'd_code',
        'a_ejaba',
        'b_ejaba',
        'c_ejaba',
        'd_ejaba',
        'a_entebaa',
        'b_entebaa',
        'c_entebaa',
        'd_entebaa',
        'mostawa'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
