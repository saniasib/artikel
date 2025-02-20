<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Tipstrik extends Model
{
    use HasFactory,HasApiTokens;
    protected $table = 'cta_tipstrik';
    protected $primaryKey = 'id_tt'; 

    protected $fillable = [
        'tt_image',
        'tt_info',
    ];
}