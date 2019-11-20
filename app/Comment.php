<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey ='id_comment';
    protected $fillable = [
         'comentario', 'imagen','id_user'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];
    public function comentario(){
        return $this->belongsTo(Noticia::class,"clave_Foranea","id_comment");
    }
}
