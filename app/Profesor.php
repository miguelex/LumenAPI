<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model{
	

	protected $fillable = ['nombre', 'direccion', 'telefono', 'profesion'];

	protected $hidden = ['id', 'create_at', 'update_at'];

	public function cursos() {

		return $this->hasMany('App\Curso');
	}
}