<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 * 
 * @property int $id_city
 * @property int $id_province
 * @property string $city_name
 * @property string $city_type
 * @property string $city_postal_code
 * 
 * @property Province $province
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class City extends Model
{
	protected $table = 'cities';
	protected $primaryKey = 'id_city';
	public $timestamps = false;

	protected $casts = [
		'id_province' => 'int'
	];

	protected $fillable = [
		'id_province',
		'city_name',
		'city_type',
		'city_postal_code'
	];

	public function province()
	{
		return $this->belongsTo(Province::class, 'id_province');
	}

	public function users()
	{
		return $this->hasMany(User::class, 'id_city');
	}
}
