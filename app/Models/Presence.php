<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Presence
 * 
 * @property int $ens_id
 * @property int $id
 * @property string $dates
 * @property int $etat
 * @property string $justificatif
 * @property int $status
 *
 * @package App\Models
 */
class Presence extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ens_id' => 'int',
		'id' => 'int',
		'etat' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'dates',
		'etat',
		'justificatif',
		'status'
	];
}
