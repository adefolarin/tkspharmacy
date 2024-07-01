<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventScheduler extends Model
{
    use HasFactory;

    protected $table = "eventschedulers";
    protected $primaryKey = "eventschedulers_id";
}
