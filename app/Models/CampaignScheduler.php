<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignScheduler extends Model
{
    use HasFactory;

    protected $table = "campaignschedulers";
    protected $primaryKey = "campaignschedulers_id";
}
