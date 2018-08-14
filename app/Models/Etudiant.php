<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Etudiant
 * 
 * @property int $use_id
 * @property int $id
 * @property int $fil_id
 * @property int $niv_id
 * @property int $sal_id
 * @property string $datenaiss
 * @property string $nomparent
 * @property string $telparent
 * @property string $emailparent
 * @property string $lieunaiss
 * @property string $matricule
 * 
 * @property \App\Models\Salle $salle
 * @property \App\Models\Filiere $filiere
 * @property \App\Models\Anneescolaire $anneescolaire
 * @property \App\Models\Niveau $niveau
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $archetudiants
 * @property \Illuminate\Database\Eloquent\Collection $notes
 *
 * @package App\Models
 */
class Etudiant extends Eloquent
{
	protected $primaryKey = 'use_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'use_id' => 'int',
		'id' => 'int',
		'fil_id' => 'int',
		'niv_id' => 'int',
		'sal_id' => 'int'
	];

	protected $fillable = [
		'id',
		'fil_id',
		'niv_id',
		'sal_id',
		'datenaiss',
		'nomparent',
		'telparent',
		'emailparent',
		'lieunaiss',
		'matricule'
	];

	public function salle()
	{
		return $this->belongsTo(\App\Models\Salle::class, 'sal_id');
	}

	public function filiere()
	{
		return $this->belongsTo(\App\Models\Filiere::class, 'fil_id');
	}

	public function anneescolaire()
	{
		return $this->belongsTo(\App\Models\Anneescolaire::class, 'id');
	}

	public function niveau()
	{
		return $this->belongsTo(\App\Models\Niveau::class, 'niv_id');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'use_id');
	}

	public function archetudiants()
	{
		return $this->hasMany(\App\Models\Archetudiant::class, 'use_id');
	}

	public function notes()
	{
		return $this->hasMany(\App\Models\Note::class, 'use_id');
	}
}
