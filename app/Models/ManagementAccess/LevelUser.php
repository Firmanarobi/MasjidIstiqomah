<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LevelUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //menyatakan table
    public $table = 'level_user';

    //field untuk mengetikan tanggal dengan format ymd hms
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //fillable table yang boleh di isi
    protected $fillable = [
        'level_id',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //one to many
    public function level()
    {
        //3 parameter yg berisi (path model, field fk, field primary keys dari table hasMany/hasOne)
        return $this->belongsTo('App\Model\ManagementAccess\Level', 'level_id', 'id');
    }
    //one to many
    public function user()
    {
        //3 parameter yg berisi (path model, field fk, field primary keys dari table hasMany/hasOne)
        return $this->belongsTo('App\Model\User', 'user_id', 'id');
    }
}
