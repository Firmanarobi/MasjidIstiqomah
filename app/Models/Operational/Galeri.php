<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galeri extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //menyatakan table
    public $table = 'galeri';

    //field untuk mengetikan tanggal dengan format ymd hms
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //fillable table yang boleh di isi
    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'tanggal',
        'lokasi',
        'isi',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
