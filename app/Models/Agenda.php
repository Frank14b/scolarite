<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Agenda
 * 
 * @property int $id
 * @property int $eve_id
 * @property int $ens_id
 * @property int $mat_id
 * @property string $debut
 * @property string $fin
 * @property int $status
 * @property string $dates
 * 
 * @property \App\Models\Cour $cour
 * @property \App\Models\Evenement $evenement
 * @property \Illuminate\Database\Eloquent\Collection $absences
 *
 * @package App\Models
 */
class Agenda extends Eloquent
{
	protected $table = 'agenda';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'eve_id' => 'int',
		'ens_id' => 'int',
		'mat_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'eve_id',
		'ens_id',
		'mat_id',
		'debut',
		'fin',
		'status',
		'dates'
	];

	public function cour()
	{
		return $this->belongsTo(\App\Models\Cour::class, 'ens_id')
					->where('cours.ens_id', '=', 'agenda.ens_id')
					->where('cours.mat_id', '=', 'agenda.mat_id');
	}

	public function evenement()
	{
		return $this->belongsTo(\App\Models\Evenement::class, 'eve_id');
	}

	public function absences()
	{
		return $this->hasMany(\App\Models\Absence::class, 'id');
	}
}
