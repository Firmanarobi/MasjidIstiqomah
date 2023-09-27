<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jabatan extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //menyatakan table
    public $table = 'jabatan';

    //field untuk mengetikan tanggal dengan format ymd hms
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //fillable table yang boleh di isi
    protected $fillable = [
        'nama',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //one to many
    public function pengurus()
    {
        //2 parameter yg berisi (path model, field fk)
        return $this->hasMany('App\Model\Operational\Pengurus', 'jabatan_id');
    }
}
