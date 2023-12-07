<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nim',
        'nama',
        'gender',
        'tgl_lahir',
        'asal',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
