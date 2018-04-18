<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model{
	
	protected $fillable = ['nombre', 'direccion', 'telefono', 'carrera'];

	protected $hidden = ['id', 'create_at', 'update_at'];

	public function estudiantes() {

		return $this->belongsToMany('App\Curso');
	}
}