<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Evenement
 * 
 * @property int $id
 * @property int $suc_id
 * @property string $intituler
 * @property string $details
 * @property int $status
 * @property string $dates
 * 
 * @property \App\Models\Succursale $succursale
 * @property \Illuminate\Database\Eloquent\Collection $agendas
 *
 * @package App\Models
 */
class Evenement extends Eloquent
{
	protected $table = 'evenement';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'suc_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'suc_id',
		'intituler',
		'details',
		'status',
		'dates'
	];

	public function succursale()
	{
		return $this->belongsTo(\App\Models\Succursale::class, 'suc_id');
	}

	public function agendas()
	{
		return $this->hasMany(\App\Models\Agenda::class, 'eve_id');
	}
}
