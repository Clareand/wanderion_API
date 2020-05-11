<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * 
 * @property int $id_user
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $address
 * @property string $postal_code
 * @property int $id_city
 * @property string $order_code
 * @property int $active
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property City $city
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class User extends Model
{
	use SoftDeletes;
	protected $table = 'user';
	protected $primaryKey = 'id_user';

	protected $casts = [
		'id_city' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'name',
		'phone',
		'email',
		'address',
		'postal_code',
		'id_city',
		'order_code',
		'active',
	];

	public function city()
	{
		return $this->belongsTo(City::class, 'id_city');
	}

	public function orders()
	{
		return $this->hasMany(Order::class, 'order_code', 'order_code');
	}
}
