<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    public $fillabel =['nama','nis','agama','jenis_kelamin','alamat','tanggal_lahir'];
    public $timestamps = true ;
}
