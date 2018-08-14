<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Absence
 * 
 * @property int $use_id
 * @property int $id
 * @property string $dates
 * @property int $qte
 * @property int $justifier
 * @property string $justificatif
 * @property int $status
 * @property int $max
 * @property string $unite
 * 
 * @property \App\Models\Agenda $agenda
 *
 * @package App\Models
 */
class Absence extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'use_id' => 'int',
		'id' => 'int',
		'qte' => 'int',
		'justifier' => 'int',
		'status' => 'int',
		'max' => 'int'
	];

	protected $fillable = [
		'dates',
		'qte',
		'justifier',
		'justificatif',
		'status',
		'max',
		'unite'
	];

	public function agenda()
	{
		return $this->belongsTo(\App\Models\Agenda::class, 'id');
	}
}
