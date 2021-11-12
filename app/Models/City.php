<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 * 
 * @property int $id_city
 * @property int $id_province
 * @property string $city_name
 * @property Carbon $created_at
 * @property Carbon $updated_at
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

	protected $casts = [
		'id_province' => 'int'
	];

	protected $fillable = [
		'id_province',
		'city_name'
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
