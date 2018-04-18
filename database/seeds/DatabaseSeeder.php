<?php


use App\Curso;
use App\Estudiante;
use App\Profesor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		Estudiante::truncate();
		Profesor::truncate();
		Curso::truncate();
		DB::table('curso_estudiante')->truncate();

		factory(Profesor::class, 50)->create();

		factory(Estudiante::class, 500)->create();

		factory(Curso::class, 40)->create(['profesor_id' => mt_rand(1, 50)])
		->each(function($curso)
			{
				$curso->estudiantes()->attach(array_rand(range(1, 500),40));
			});

		// $this->call('UserTableSeeder');
	}

}
