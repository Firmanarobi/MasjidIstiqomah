<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Berita extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //menyatakan table
    public $table = 'berita';

    //field untuk mengetikan tanggal dengan format ymd hms
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //fillable table yang boleh di isi
    protected $fillable = [
        'judul',
        'gambar',
        'deskripsi',
        'isi',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
