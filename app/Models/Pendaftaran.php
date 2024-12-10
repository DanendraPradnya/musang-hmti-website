<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'nama',
        'kontak',
        'profile_photo',
        'krm_dokumen',
        'kepanitiaan_dokumen',
    ];
}
