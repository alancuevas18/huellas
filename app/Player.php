<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	protected $guarded = [];

	public function scopeSearch($query, $nombre)
	{
		$query->where("nombre", "like", "%$nombre%");
	}

	public function scopeYear($query, $year)
	{
		$query->whereYear('fecha_nac', $year);
	}
}
