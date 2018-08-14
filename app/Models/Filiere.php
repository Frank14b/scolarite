<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Filiere
 * 
 * @property int $id
 * @property string $intutuler
 * @property string $abbr
 * @property int $status
 * 
 * @property \Illuminate\Database\Eloquent\Collection $etudiants
 * @property \Illuminate\Database\Eloquent\Collection $nivfils
 *
 * @package App\Models
 */
class Filiere extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'intutuler',
		'abbr',
		'status'
	];

	public function etudiants()
	{
		return $this->hasMany(\App\Models\Etudiant::class, 'fil_id');
	}

	public function nivfils()
	{
		return $this->hasMany(\App\Models\Nivfil::class, 'fil_id');
	}
}
