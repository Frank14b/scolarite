<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Semestre
 * 
 * @property int $id
 * @property int $ann_id
 * @property string $intituler
 * @property string $debut
 * @property string $fin
 * @property string $dates
 * @property int $status
 * 
 * @property \Illuminate\Database\Eloquent\Collection $cours
 *
 * @package App\Models
 */
class Semestre extends Eloquent
{
	protected $table = 'semestre';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'ann_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'ann_id',
		'intituler',
		'debut',
		'fin',
		'dates',
		'status'
	];

	public function cours()
	{
		return $this->hasMany(\App\Models\Cour::class, 'sem_id');
	}
}
