<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $primaryKey ='id';
    protected $fillable = [
        'titulo', 'texto', 'imagen','categoria','tags','estracto','id_user'
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
        return $this->hasMany(Comment::class,"clave_Foranea","id");
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class,"clave_Foranea","id");
    }
}
