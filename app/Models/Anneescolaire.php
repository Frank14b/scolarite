<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Anneescolaire
 * 
 * @property int $id
 * @property \Carbon\Carbon $debut
 * @property \Carbon\Carbon $fin
 * @property int $status
 * @property string $objectif
 * 
 * @property \Illuminate\Database\Eloquent\Collection $archetudiants
 * @property \Illuminate\Database\Eloquent\Collection $etudiants
 * @property \Illuminate\Database\Eloquent\Collection $notes
 *
 * @package App\Models
 */
class Anneescolaire extends Eloquent
{
	protected $table = 'anneescolaire';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'debut',
		'fin'
	];

	protected $fillable = [
		'debut',
		'fin',
		'status',
		'objectif'
	];

	public function archetudiants()
	{
		return $this->hasMany(\App\Models\Archetudiant::class, 'ann_id');
	}

	public function etudiants()
	{
		return $this->hasMany(\App\Models\Etudiant::class, 'id');
	}

	public function notes()
	{
		return $this->hasMany(\App\Models\Note::class, 'ann_id');
	}
}
