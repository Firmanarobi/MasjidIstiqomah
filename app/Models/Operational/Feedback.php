<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //menyatakan table
    public $table = 'feedback';

    //field untuk mengetikan tanggal dengan format ymd hms
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //fillable table yang boleh di isi
    protected $fillable = [
        'nama',
        'email',
        'subjeck',
        'pesan',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
