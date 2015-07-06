<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'cuotas';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre', 'cantidad', 'modalidad'];

	/* *
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 * /
	protected $hidden = ['password', 'remember_token'];*/
}
