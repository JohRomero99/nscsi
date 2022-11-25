<?php

namespace Database\Seeders;
use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '15',
            'orden' => 1,
            'curso_nombre' => 'Inicial 1A',
            'curso_num' => 'Inicial',
            'paralelo' => '1A',
            'nivel_edu' => 'INI',
            'estado' => 'A'
        ]);
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '16',
            'orden' => 2,
            'curso_nombre' => 'Inicial 2A',
            'curso_num' => 'Inicial',
            'paralelo' => '2A',
            'nivel_edu' => 'INI',
            'estado' => 'A'
        ]);
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '17',
            'orden' => 3,
            'curso_nombre' => 'Inicial 2B',
            'curso_num' => 'Inicial',
            'paralelo' => '2B',
            'nivel_edu' => 'INI',
            'estado' => 'A'
        ]);
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '18',
            'orden' => 4,
            'curso_nombre' => 'Preparatorio A',
            'curso_num' => '1°',
            'paralelo' => 'A',
            'nivel_edu' => 'PRE',
            'estado' => 'A'
        ]);
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '19',
            'orden' => 5,
            'curso_nombre' => 'Preparatorio B',
            'curso_num' => '1°',
            'paralelo' => 'B',
            'nivel_edu' => 'PRE',
            'estado' => 'A'
        ]);
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '20',
            'orden' => 6,
            'curso_nombre' => 'Preparatorio c',
            'curso_num' => '1°',
            'paralelo' => 'C',
            'nivel_edu' => 'PRE',
            'estado' => 'A'
        ]);
        //basica elemental
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '63',
            'orden' => 7,
            'curso_nombre' => 'Segundo A',
            'curso_num' => '2°',
            'paralelo' => 'A',
            'nivel_edu' => 'BE',
            'estado' => 'A'
        ]);//7
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '64',
            'orden' => 8,
            'curso_nombre' => 'Segundo B',
            'curso_num' => '2°',
            'paralelo' => 'B',
            'nivel_edu' => 'BE',
            'estado' => 'A'
        ]);//8
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '65',
            'orden' => 9,
            'curso_nombre' => 'Segundo C',
            'curso_num' => '2°',
            'paralelo' => 'C',
            'nivel_edu' => 'BE',
            'estado' => 'A'
        ]);//9
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '66',
            'orden' => 10,
            'curso_nombre' => 'Tercero A',
            'curso_num' => '3°',
            'paralelo' => 'A',
            'nivel_edu' => 'BE',
            'estado' => 'A'
        ]);//10
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '67',
            'orden' => 11,
            'curso_nombre' => 'Tercero B',
            'curso_num' => '3°',
            'paralelo' => 'B',
            'nivel_edu' => 'BE',
            'estado' => 'A'
        ]);//11
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '68',
            'orden' => 12,
            'curso_nombre' => 'Tercero C',
            'curso_num' => '3°',
            'paralelo' => 'C',
            'nivel_edu' => 'BE',
            'estado' => 'A'
        ]);//12
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '69',
            'orden' => 13,
            'curso_nombre' => 'Cuarto A',
            'curso_num' => '4°',
            'paralelo' => 'A',
            'nivel_edu' => 'BE',
            'estado' => 'A'
        ]);//13
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '70',
            'orden' => 14,
            'curso_nombre' => 'Cuarto B',
            'curso_num' => '4°',
            'paralelo' => 'B',
            'nivel_edu' => 'BE',
            'estado' => 'A'
        ]);//14
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '71',
            'orden' => 15,
            'curso_nombre' => 'Cuarto C',
            'curso_num' => '4°',
            'paralelo' => 'C',
            'nivel_edu' => 'BE',
            'estado' => 'A'
        ]);//15
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '72',
            'orden' => 16,
            'curso_nombre' => 'Quinto A',
            'curso_num' => '5°',
            'paralelo' => 'A',
            'nivel_edu' => 'BM',
            'estado' => 'A'
        ]);//16
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '73',
            'orden' => 17,
            'curso_nombre' => 'Quinto B',
            'curso_num' => '5°',
            'paralelo' => 'B',
            'nivel_edu' => 'BM',
            'estado' => 'A'
        ]);//17
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '74',
            'orden' => 18,
            'curso_nombre' => 'Quinto C',
            'curso_num' => '5°',
            'paralelo' => 'C',
            'nivel_edu' => 'BM',
            'estado' => 'A'
        ]);//18
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '75',
            'orden' => 19,
            'curso_nombre' => 'Sexto A',
            'curso_num' => '6°',
            'paralelo' => 'A',
            'nivel_edu' => 'BM',
            'estado' => 'A'
        ]);//19
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '76',
            'orden' => 20,
            'curso_nombre' => 'Sexto B',
            'curso_num' => '6°',
            'paralelo' => 'B',
            'nivel_edu' => 'BM',
            'estado' => 'A'
        ]);//20
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '77',
            'orden' => 21,
            'curso_nombre' => 'Septimo A',
            'curso_num' => '7°',
            'paralelo' => 'A',
            'nivel_edu' => 'BM',
            'estado' => 'A'
        ]);//21
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '78',
            'orden' => 22,
            'curso_nombre' => 'Septimo B',
            'curso_num' => '7°',
            'paralelo' => 'B',
            'nivel_edu' => 'BM',
            'estado' => 'A'
        ]);//22
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '27',
            'orden' => 23,
            'curso_nombre' => 'Octavo A',
            'curso_num' => '8°',
            'paralelo' => 'A',
            'nivel_edu' => 'BS',
            'estado' => 'A'
        ]);//23
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '28',
            'orden' => 24,
            'curso_nombre' => 'Octavo B',
            'curso_num' => '8°',
            'paralelo' => 'B',
            'nivel_edu' => 'BS',
            'estado' => 'A'
        ]);//24
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '29',
            'orden' => 25,
            'curso_nombre' => 'Noveno A',
            'curso_num' => '9°',
            'paralelo' => 'A',
            'nivel_edu' => 'BS',
            'estado' => 'A'
        ]);//25
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '30',
            'orden' => 26,
            'curso_nombre' => 'Noveno B',
            'curso_num' => '9°',
            'paralelo' => 'B',
            'nivel_edu' => 'BS',
            'estado' => 'A'
        ]);//26
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '31',
            'orden' => 27,
            'curso_nombre' => 'Decimo A',
            'curso_num' => '10°',
            'paralelo' => 'A',
            'nivel_edu' => 'BS',
            'estado' => 'A'
        ]);//27
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '32',
            'orden' => 28,
            'curso_nombre' => 'Decimo B',
            'curso_num' => '10°',
            'paralelo' => 'B',
            'nivel_edu' => 'BS',
            'estado' => 'A'
        ]);//28
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '33',
            'orden' => 29,
            'curso_nombre' => 'Primero B.G.U. A',
            'curso_num' => '1° BGU',
            'paralelo' => 'A',
            'nivel_edu' => 'BGU',
            'estado' => 'A'
        ]);//29
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '34',
            'orden' => 30,
            'curso_nombre' => 'Primero B.G.U. B',
            'curso_num' => '1° BGU',
            'paralelo' => 'B',
            'nivel_edu' => 'BGU',
            'estado' => 'A'
        ]);//30
        Curso::create([
            'anio_lectivo_id' => '1',
            'curso_moodle_id' => '35',
            'orden' => 31,
            'curso_nombre' => 'Segundo B.G.U. A',
            'curso_num' => '2° BGU',
            'paralelo' => 'A',
            'nivel_edu' => 'BGU',
            'estado' => 'A'
        ]);//31
    }
}
