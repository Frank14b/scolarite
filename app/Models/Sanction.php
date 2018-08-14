<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Sanction
 * 
 * @property int $id
 * @property int $use_id
 * @property string $debut
 * @property string $fin
 * @property string $dates
 * @property string $motif
 * @property string $details
 * @property int $etat
 * @property int $status
 *
 * @package App\Models
 */
class Sanction extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'use_id' => 'int',
		'etat' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'use_id',
		'debut',
		'fin',
		'dates',
		'motif',
		'details',
		'etat',
		'status'
	];
}
