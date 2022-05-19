<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
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
        'a_holol',
        'b_holol',
        'c_holol',
        'd_holol',
        'a_ettelah',
        'b_ettelah',
        'c_ettelah',
        'd_ettelah',
        'a_johod',
        'b_johod',
        'c_johod',
        'd_johod',
        'a_ebdah',
        'b_ebdah',
        'c_ebdah',
        'd_ebdah',
        'a_sohola',
        'b_sohola',
        'c_sohola',
        'd_sohola',
        'a_tasalsol',
        'b_tasalsol',
        'c_tasalsol',
        'd_tasalsol',
        'a_eltezam',
        'b_eltezam',
        'c_eltezam',
        'd_eltezam',
        'monakasha',
        'k_jawayez',
        'j_jawayez'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

}
