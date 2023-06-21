<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = ['photo','nid', 'nama', 'umur', 'jenis_kelamin', 'alamat', 'telepon', 'golongan'];
}
