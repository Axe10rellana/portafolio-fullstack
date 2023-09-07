<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Configuracione
 *
 * @property $id
 * @property $nombreconfiguracion
 * @property $valor
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Configuracione extends Model
{
  static $rules = [
	'nombreconfiguracion' => 'required',
	'valor' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['nombreconfiguracion','valor'];
}
