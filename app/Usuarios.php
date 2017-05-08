<?php

namespace Directorio;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $table = 'tb_usuarios';
    protected $fillable = [
      'nombre', 'tipo_ident', 'num_ident','email','telefono',
  ];
  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
  ];
}
