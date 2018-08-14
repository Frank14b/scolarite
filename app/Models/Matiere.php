<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Matiere
 * 
 * @property int $id
 * @property string $intituler
 * @property string $abbr
 * @property int $status
 * 
 * @property \Illuminate\Database\Eloquent\Collection $matfils
 * @property \Illuminate\Database\Eloquent\Collection $notes
 *
 * @package App\Models
 */
class Matiere extends Eloquent
{
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

	public function matfils()
	{
		return $this->hasMany(\App\Models\Matfil::class, 'id');
	}

	public function notes()
	{
		return $this->hasMany(\App\Models\Note::class, 'mat_id');
	}
}
