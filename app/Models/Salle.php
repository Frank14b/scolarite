<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Salle
 * 
 * @property int $id
 * @property int $niv_id
 * @property int $suc_id
 * @property string $intituler
 * @property int $numero
 * @property int $status
 * 
 * @property \Illuminate\Database\Eloquent\Collection $cours
 * @property \Illuminate\Database\Eloquent\Collection $etudiants
 *
 * @package App\Models
 */
class Salle extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'niv_id' => 'int',
		'suc_id' => 'int',
		'numero' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'niv_id',
		'suc_id',
		'intituler',
		'numero',
		'status'
	];

	public function cours()
	{
		return $this->hasMany(\App\Models\Cour::class, 'id');
	}

	public function etudiants()
	{
		return $this->hasMany(\App\Models\Etudiant::class, 'sal_id');
	}
}
