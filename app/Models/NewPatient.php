<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewPatient extends Model
{
    use HasFactory;

    protected $table = "newpatients";
    protected $primaryKey = "newpatients_id";
}
