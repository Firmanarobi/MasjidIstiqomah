<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengurus extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //menyatakan table
    public $table = 'pengurus';

    //field untuk mengetikan tanggal dengan format ymd hms
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //fillable table yang boleh di isi
    protected $fillable = [
        'jabatan_id',
        'nama',
        'email',
        'kontak',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //one to many
    public function jabatan()
    {
        //3 parameter yg berisi (path model, field fk, field primary keys dari table hasMany/hasOne)
        return $this->belongsTo('App\Model\MasterData\Jabatan', 'jabtan_id', 'id');
    }
}
