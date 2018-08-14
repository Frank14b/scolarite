<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Acce
 * 
 * @property int $id
 * @property int $mod_id
 * @property int $status
 * 
 * @property \App\Models\Module $module
 *
 * @package App\Models
 */
class Acce extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'mod_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'status'
	];

	public function module()
	{
		return $this->belongsTo(\App\Models\Module::class, 'mod_id');
	}
}
