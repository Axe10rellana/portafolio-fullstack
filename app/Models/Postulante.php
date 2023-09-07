<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Postulante
 *
 * @property $id
 * @property $nombre
 * @property $imagen
 * @property $puesto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Postulante extends Model
{
  static $rules = [
	'nombre' => 'required',
	'imagen' => 'required',
	'puesto' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['nombre','imagen','puesto'];
}
