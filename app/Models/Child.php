<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;

class Child extends Model
{
    use HasFactory,HasApiTokens;
    protected $table = 'cta_child';
    protected $primaryKey = 'u_id_child'; // Ganti dengan nama kolom primary key yang benar
    
    protected $fillable = [
        'u_id',
        'ch_name',
        'ch_date_birth',
        'ch_gender',
        'ch_height_birth',
    ];

    public function user()
{
    return $this->belongsTo(User::class, 'u_id');
}
}