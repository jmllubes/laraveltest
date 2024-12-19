<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Prestec
 * 
 * @property int $codi
 * @property string|null $ISBN
 * @property string|null $DNI
 * @property Carbon|null $data_prestec
 * @property Carbon|null $data_retorn
 * @property int|null $retornat
 * 
 * @property User|null $usuari
 * @property Llibre|null $llibre
 *
 * @package App\Models
 */
class Prestec extends Model
{
	protected $connection = 'mysql';
	protected $table = 'prestec';
	protected $primaryKey = 'codi';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codi' => 'int',
		'data_prestec' => 'datetime',
		'data_retorn' => 'datetime',
		'retornat' => 'int'
	];

	protected $fillable = [
		'ISBN',
		'DNI',
		'data_prestec',
		'data_retorn',
		'retornat'
	];

	public function usuari()
	{
		return $this->belongsTo(User::class, 'DNI');
	}

	public function llibre()
	{
		return $this->belongsTo(Llibre::class, 'ISBN');
	}
}
