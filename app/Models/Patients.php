<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = "patients";

    protected $fillable = [
        'name',
        'age',
        'gender',
        'register',
        'collect',
        'auth' ,
        'print',
        'result',
        'visit_date',
        'pay_date',
        'result_date',
        'branch',
        'pay_username',
        'price',
        'visit',
        'result',
        'client_id',
        'patient_id',
    ];

    protected $hidden = [];
}
