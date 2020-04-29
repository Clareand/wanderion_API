<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $id
 * @property string $order_code
 * @property string $coordinate
 * @property string $text_line_1
 * @property string $text_line_2
 * @property string $text_line_3
 * @property Carbon $date
 * @property Carbon $time
 * @property int $time_format
 * @property int $design
 * @property int $moon
 * @property int $galaxy
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'order';

	protected $casts = [
		'time_format' => 'int',
		'design' => 'int',
		'moon' => 'int',
		'galaxy' => 'int'
	];

	protected $dates = [
		'date',
		'time'
	];

	protected $fillable = [
		'order_code',
		'coordinate',
		'text_line_1',
		'text_line_2',
		'text_line_3',
		'date',
		'time',
		'time_format',
		'design',
		'moon',
		'galaxy'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'order_code', 'order_code');
	}
}
