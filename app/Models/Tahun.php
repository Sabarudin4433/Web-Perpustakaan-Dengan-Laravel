<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    protected $table = "tb_tahun";

    protected $primaryKey = 'id_tahun';

    protected $fillable = ['tahun_buku'];
    use HasFactory;
}