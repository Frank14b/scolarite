<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Module
 * 
 * @property int $id
 * @property string $intituler
 * @property string $code
 * @property int $status
 * 
 * @property \Illuminate\Database\Eloquent\Collection $acces
 *
 * @package App\Models
 */
class Module extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'intituler',
		'code',
		'status'
	];

	public function acces()
	{
		return $this->hasMany(\App\Models\Acce::class, 'mod_id');
	}
}
