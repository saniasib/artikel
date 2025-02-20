<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Artikel extends Model
{
    use HasFactory,HasApiTokens;
    protected $table = 'cta_article';
    protected $primaryKey = 'id_at'; // Ganti dengan nama kolom primary key yang benar

    protected $fillable = [
        'at_image',
        'at_title',
        'at_desc',
    ];
}