<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarPasien extends Model
{
    use HasFactory;
    protected $table ="tb_antrian";
    protected $primaryKey ="nik";
    // protected $fillable =['no_antrian','nik','nama','alamat'];
    protected $fillable =['nik','nama','alamat'];
}
