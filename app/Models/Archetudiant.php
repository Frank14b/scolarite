<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Archetudiant
 * 
 * @property int $id
 * @property int $niv_id
 * @property int $ann_id
 * @property int $use_id
 * @property float $note
 * @property int $etat
 * @property string $dates
 * 
 * @property \App\Models\Etudiant $etudiant
 * @property \App\Models\Niveau $niveau
 * @property \App\Models\Anneescolaire $anneescolaire
 *
 * @package App\Models
 */
class Archetudiant extends Eloquent
{
	protected $table = 'archetudiant';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'niv_id' => 'int',
		'ann_id' => 'int',
		'use_id' => 'int',
		'note' => 'float',
		'etat' => 'int'
	];

	protected $fillable = [
		'niv_id',
		'ann_id',
		'use_id',
		'note',
		'etat',
		'dates'
	];

	public function etudiant()
	{
		return $this->belongsTo(\App\Models\Etudiant::class, 'use_id');
	}

	public function niveau()
	{
		return $this->belongsTo(\App\Models\Niveau::class, 'niv_id');
	}

	public function anneescolaire()
	{
		return $this->belongsTo(\App\Models\Anneescolaire::class, 'ann_id');
	}
}
