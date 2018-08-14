<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Nivfil
 * 
 * @property int $id
 * @property int $fil_id
 * @property int $niv_id
 * @property int $status
 * 
 * @property \App\Models\Filiere $filiere
 * @property \App\Models\Niveau $niveau
 *
 * @package App\Models
 */
class Nivfil extends Eloquent
{
	protected $table = 'nivfil';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'fil_id' => 'int',
		'niv_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'fil_id',
		'niv_id',
		'status'
	];

	public function filiere()
	{
		return $this->belongsTo(\App\Models\Filiere::class, 'fil_id');
	}

	public function niveau()
	{
		return $this->belongsTo(\App\Models\Niveau::class, 'niv_id');
	}
}
