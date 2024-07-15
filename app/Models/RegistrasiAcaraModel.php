<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrasiAcaraModel extends Model
{
    use HasFactory;
    protected $table = "registrasi_acaras";
    public $timestamps = false;
}
