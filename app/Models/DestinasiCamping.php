<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DestinasiCamping extends Model
{
    protected $table = 'destinasi_campings';
    protected $primaryKey = 'id_lokasi';
    protected $fillable = ['gambar', 'nama_tempat', 'fasilitas', 'biaya', 'jam_operasional'];
}
