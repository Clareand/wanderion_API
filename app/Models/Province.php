<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Province
 * 
 * @property int $id_province
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|City[] $cities
 *
 * @package App\Models
 */
class Province extends Model
{
	protected $table = 'provinces';
	protected $primaryKey = 'id_province';

	protected $fillable = [
		'name'
	];

	public function cities()
	{
		return $this->hasMany(City::class, 'id_province');
	}
}
