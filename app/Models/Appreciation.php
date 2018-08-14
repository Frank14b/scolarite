<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Appreciation
 * 
 * @property int $id
 * @property string $intituler
 * @property float $notemin
 * @property float $notemax
 * @property int $status
 *
 * @package App\Models
 */
class Appreciation extends Eloquent
{
	protected $table = 'appreciation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'notemin' => 'float',
		'notemax' => 'float',
		'status' => 'int'
	];

	protected $fillable = [
		'intituler',
		'notemin',
		'notemax',
		'status'
	];
}
