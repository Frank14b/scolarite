<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Enseignant
 * 
 * @property int $id
 * @property int $status
 * 
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $cours
 *
 * @package App\Models
 */
class Enseignant extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'status'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'id');
	}

	public function cours()
	{
		return $this->hasMany(\App\Models\Cour::class, 'ens_id');
	}
}
