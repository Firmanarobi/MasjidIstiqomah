<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Level extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //menyatakan table
    public $table = 'level';

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
    public function level_user()
    {
        //2 parameter yg berisi (path model, field fk)
        return $this->hasMany('App\Model\ManagementAccess\LevelUser', 'level_id');
    }
    //one to many
    public function level_akses()
    {
        //2 parameter yg berisi (path model, field fk)
        return $this->hasMany('App\Model\ManagementAccess\LevelAkses', 'level_id');
    }
}
