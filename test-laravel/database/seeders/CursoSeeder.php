<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$curso = new Curso();
        $curso->name ="Laravel";
	$curso->description = "Este es un framework";
	$curso->category = "Development";

	$curso->save();

        $curso1 = new Curso();
	$curso1->name ="React";
	$curso1->description = "Este es un framework de JavaScript";
	$curso1->category = "Development Frontend";

	$curso1->save();


        $curso2 = new Curso();
        $curso2->name ="AngularJS Development";
	$curso2->description = "Este es un framework";
	$curso2->category = "Development Front End";

	$curso2->save();

    }
}
