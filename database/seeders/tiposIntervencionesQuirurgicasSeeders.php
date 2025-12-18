<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tiposIntervencionesQuirurgicas;

class tiposIntervencionesQuirurgicasSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposIntervencionesQuirurgicas = tiposIntervencionesQuirurgicas::create([
            'intervenciones_quirurgicas' => '--seleccionar--',
        ]);

        $tiposIntervencionesQuirurgicas = tiposIntervencionesQuirurgicas::create([
            'intervenciones_quirurgicas' => 'Ortopédica (huesos, articulaciones)',
        ]);

        $tiposIntervencionesQuirurgicas = tiposIntervencionesQuirurgicas::create([
            'intervenciones_quirurgicas' => 'Cardiaca',
        ]);

        $tiposIntervencionesQuirurgicas = tiposIntervencionesQuirurgicas::create([
            'intervenciones_quirurgicas' => 'Neurológica',
        ]);

        $tiposIntervencionesQuirurgicas = tiposIntervencionesQuirurgicas::create([
            'intervenciones_quirurgicas' => 'Visual',
        ]);

        $tiposIntervencionesQuirurgicas = tiposIntervencionesQuirurgicas::create([
            'intervenciones_quirurgicas' => 'Auditiva',
        ]);

        $tiposIntervencionesQuirurgicas = tiposIntervencionesQuirurgicas::create([
            'intervenciones_quirurgicas' => 'Respiratoria',
        ]);

        $tiposIntervencionesQuirurgicas = tiposIntervencionesQuirurgicas::create([
            'intervenciones_quirurgicas' => 'Digestiva',
        ]);

        $tiposIntervencionesQuirurgicas = tiposIntervencionesQuirurgicas::create([
            'intervenciones_quirurgicas' => 'Urológica',
        ]);

        $tiposIntervencionesQuirurgicas = tiposIntervencionesQuirurgicas::create([
            'intervenciones_quirurgicas' => 'Genital',
        ]);

        $tiposIntervencionesQuirurgicas = tiposIntervencionesQuirurgicas::create([
            'intervenciones_quirurgicas' => 'Dental / Bucal',
        ]);

        $tiposIntervencionesQuirurgicas = tiposIntervencionesQuirurgicas::create([
            'intervenciones_quirurgicas' => 'Pediátrica',
        ]);

        $tiposIntervencionesQuirurgicas = tiposIntervencionesQuirurgicas::create([
            'intervenciones_quirurgicas' => 'Reconstructiva',
        ]);

        $tiposIntervencionesQuirurgicas = tiposIntervencionesQuirurgicas::create([
            'intervenciones_quirurgicas' => 'Otra',
        ]);

    }
}
