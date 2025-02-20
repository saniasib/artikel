<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class History extends Model
{
    use HasFactory,HasApiTokens;

    protected $table = 'cta_history_detection';
    protected $primaryKey = 'hd_id'; // Ganti dengan nama kolom primary key yang benar

    protected $fillable = [
        'u_id',
        'u_id_child',
        'hd_ch_name',
        'hd_ch_date_birth',
        'hd_ch_age',
        'hd_ch_gender',
        'hd_ch_height_birth',
        'hd_ch_height_latest',
        'hd_ch_keturunan_genetik',
        'hd_result_detect',
    ];
        // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class, 'u_id');
    }

    // Relasi ke CtaChild
    public function child()
    {
        return $this->belongsTo(Child::class, 'u_id_child');
    }
}