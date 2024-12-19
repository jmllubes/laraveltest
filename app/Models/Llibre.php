<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Llibre
 * 
 * @property string $Isbn
 * @property string|null $titol
 * @property string|null $categoria
 * @property float|null $preu
 * @property string|null $editorial
 * @property string|null $autor
 * 
 * @property Collection|Prestec[] $prestecs
 *
 * @package App\Models
 */
class Llibre extends Model
{
	protected $connection = 'mysql';
	protected $table = 'llibre';
	protected $primaryKey = 'Isbn';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'preu' => 'float'
	];

	protected $fillable = [
		'titol',
		'categoria',
		'preu',
		'editorial',
		'autor'
	];

	public function prestecs()
	{
		return $this->hasMany(Prestec::class, 'ISBN');
	}
}
