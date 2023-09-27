<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agenda extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //menyatakan table
    public $table = 'agenda';

    //field untuk mengetikan tanggal dengan format ymd hms
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //fillable table yang boleh di isi
    protected $fillable = [
        'judul',
        'author',
        'tanggal',
        'gambar',
        'lokasi',
        'deskripsi',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
