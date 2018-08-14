<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Aug 2018 01:09:52 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Succursale
 * 
 * @property int $id
 * @property string $libelle
 * @property string $adresse
 * @property int $status
 * @property int $tel
 * 
 * @property \Illuminate\Database\Eloquent\Collection $evenements
 *
 * @package App\Models
 */
class Succursale extends Eloquent
{
	protected $table = 'succursale';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'status' => 'int',
		'tel' => 'int'
	];

	protected $fillable = [
		'libelle',
		'adresse',
		'status',
		'tel'
	];

	public function evenements()
	{
		return $this->hasMany(\App\Models\Evenement::class, 'suc_id');
	}
}
