<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Note
 * 
 * @property int $id
 * @property int $app_id
 * @property int $mat_id
 * @property int $ann_id
 * @property int $use_id
 * @property float $valeur
 * @property float $valCoef
 * @property int $status
 * 
 * @property \App\Models\Etudiant $etudiant
 * @property \App\Models\Anneescolaire $anneescolaire
 * @property \App\Models\Matiere $matiere
 *
 * @package App\Models
 */
class Note extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'app_id' => 'int',
		'mat_id' => 'int',
		'ann_id' => 'int',
		'use_id' => 'int',
		'valeur' => 'float',
		'valCoef' => 'float',
		'status' => 'int'
	];

	protected $fillable = [
		'app_id',
		'mat_id',
		'ann_id',
		'use_id',
		'valeur',
		'valCoef',
		'status'
	];

	public function etudiant()
	{
		return $this->belongsTo(\App\Models\Etudiant::class, 'use_id');
	}

	public function anneescolaire()
	{
		return $this->belongsTo(\App\Models\Anneescolaire::class, 'ann_id');
	}

	public function matiere()
	{
		return $this->belongsTo(\App\Models\Matiere::class, 'mat_id');
	}
}
