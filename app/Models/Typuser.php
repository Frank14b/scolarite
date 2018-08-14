<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Typuser
 * 
 * @property int $id
 * @property string $intituler
 * @property string $abbr
 * @property int $status
 *
 * @package App\Models
 */
class Typuser extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'intituler',
		'abbr',
		'status'
	];
}
