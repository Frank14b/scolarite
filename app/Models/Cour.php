<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cour
 * 
 * @property int $ens_id
 * @property int $mat_id
 * @property int $id
 * @property int $sem_id
 * @property int $status
 * @property string $dates
 * 
 * @property \App\Models\Enseignant $enseignant
 * @property \App\Models\Salle $salle
 * @property \App\Models\Semestre $semestre
 * @property \Illuminate\Database\Eloquent\Collection $agendas
 *
 * @package App\Models
 */
class Cour extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ens_id' => 'int',
		'mat_id' => 'int',
		'id' => 'int',
		'sem_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'id',
		'sem_id',
		'status',
		'dates'
	];

	public function enseignant()
	{
		return $this->belongsTo(\App\Models\Enseignant::class, 'ens_id');
	}

	public function salle()
	{
		return $this->belongsTo(\App\Models\Salle::class, 'id');
	}

	public function semestre()
	{
		return $this->belongsTo(\App\Models\Semestre::class, 'sem_id');
	}

	public function agendas()
	{
		return $this->hasMany(\App\Models\Agenda::class, 'ens_id');
	}
}
