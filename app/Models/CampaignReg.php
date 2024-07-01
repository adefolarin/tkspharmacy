<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignReg extends Model
{
    use HasFactory;

    protected $table = "campaignregs";
    protected $primaryKey = "campaignregs_id";
}
