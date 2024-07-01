<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Sponsor extends Authenticatable
{
    use HasFactory;

    protected $guard = 'sponsor';

    protected $table = "sponsors";
    protected $primaryKey = "sponsors_id";

    protected $fillable = [
        'sponsors_name',
        'sponsors_email',
        'sponsors_password',
    ];


    protected $hidden = [
        'sponsors_password',
    ];

   public function getAuthPassword() {
    return $this->sponsors_password;
   }

}
