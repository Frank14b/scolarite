<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Matfil
 * 
 * @property int $id
 * @property int $niv_id
 * @property int $status
 * @property float $coef
 * 
 * @property \App\Models\Matiere $matiere
 *
 * @package App\Models
 */
class Matfil extends Eloquent
{
	protected $table = 'matfil';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'niv_id' => 'int',
		'status' => 'int',
		'coef' => 'float'
	];

	protected $fillable = [
		'status',
		'coef'
	];

	public function matiere()
	{
		return $this->belongsTo(\App\Models\Matiere::class, 'id');
	}
}
