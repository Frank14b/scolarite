<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property int $typ_id
 * @property int $suc_id
 * @property string $login
 * @property string $password
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property int $tel
 * @property string $adresse
 * @property string $smatrimoniale
 * @property int $status
 * @property \Carbon\Carbon $dates
 * @property string $photo
 * 
 * @property \App\Models\Enseignant $enseignant
 * @property \App\Models\Etudiant $etudiant
 *
 * @package App\Models
 */
class User extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'typ_id' => 'int',
		'suc_id' => 'int',
		'tel' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'dates'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'typ_id',
		'suc_id',
		'login',
		'password',
		'nom',
		'prenom',
		'email',
		'tel',
		'adresse',
		'smatrimoniale',
		'status',
		'dates',
		'photo'
	];

	public function enseignant()
	{
		return $this->hasOne(\App\Models\Enseignant::class, 'id');
	}

	public function etudiant()
	{
		return $this->hasOne(\App\Models\Etudiant::class, 'use_id');
	}
}
