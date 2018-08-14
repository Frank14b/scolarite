<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Niveau
 * 
 * @property int $id
 * @property string $intituler
 * @property string $abbr
 * @property int $status
 * 
 * @property \Illuminate\Database\Eloquent\Collection $archetudiants
 * @property \Illuminate\Database\Eloquent\Collection $etudiants
 * @property \Illuminate\Database\Eloquent\Collection $nivfils
 *
 * @package App\Models
 */
class Niveau extends Eloquent
{
	protected $table = 'niveau';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'intituler',
		'abbr',
		'status'
	];

	public function archetudiants()
	{
		return $this->hasMany(\App\Models\Archetudiant::class, 'niv_id');
	}

	public function etudiants()
	{
		return $this->hasMany(\App\Models\Etudiant::class, 'niv_id');
	}

	public function nivfils()
	{
		return $this->hasMany(\App\Models\Nivfil::class, 'niv_id');
	}
}
