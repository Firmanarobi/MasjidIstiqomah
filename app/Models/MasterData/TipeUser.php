<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipeUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //menyatakan table
    public $table = 'tipe_user';

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
    public function detail_user()
    {
        //2 parameter yg berisi (path model, field fk)
        return $this->hasMany('App\Model\ManagementAccess\DetailUser', 'tipe_user_id');
    }
}
