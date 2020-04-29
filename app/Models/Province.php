<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Province
 * 
 * @property int $id_province
 * @property string $province_name
 * 
 * @property Collection|City[] $cities
 *
 * @package App\Models
 */
class Province extends Model
{
	protected $table = 'provinces';
	protected $primaryKey = 'id_province';
	public $timestamps = false;

	protected $fillable = [
		'province_name'
	];

	public function cities()
	{
		return $this->hasMany(City::class, 'id_province');
	}
}
