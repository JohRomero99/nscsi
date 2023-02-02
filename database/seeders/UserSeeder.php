<?php

namespace Database\Seeders;

use App\Models\User; 
use App\Models\Representante;
use App\Models\Estudiante;
use App\Models\Persona;
use App\Models\EstudianteRepresentante;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'admin',
            'email' => 'soporte.tecnico@nsc.edu.ec',
            'password' => bcrypt('Nsc1312049461')
        ])->assignRole('admin');

        User::create([
            'name' => 'Soporte.tecnico.1',
            'email' => 'soporte.tecnico.1@nsc.edu.ec',
            'password' => bcrypt('Nsc0923736557')
        ])->assignRole('admin');

        User::create([
            'name' => 'matriculacion.1',
            'email' => 'admisiones@nsc.edu.ec',
            'password' => bcrypt('Nsc2023')
        ])->assignRole('matriculacion');

        User::create([
            'name' => 'representante.1',
            'email' => 'representante_invitado@gmail.com',
            'password' => bcrypt('Nsc2023')
        ])->assignRole('representante_invitado');

        User::create([
            'name' => '0955546601',
            'email' => 'paymentez@gmail.com',
            'password' => bcrypt('paymentez.2022')
        ])->assignRole('representante');

        User::create([
            'name' => 'nsc.inicial.1.a',
            'email' => 'inicial.1.a@nsc.edu.ec',
            'password' => bcrypt('Nsc+0927890541')
        ])->assignRole('docente_tutor');//Baque	Burgos 	Ana

        User::create([
            'name' => 'nsc.inicial.2.a',
            'email' => 'inicial.2.a@nsc.edu.ec',
            'password' => bcrypt('Nsc-0926448465')
        ])->assignRole('docente_tutor');//Velasco	Salvatierra	Elizabeth

        User::create([
            'name' => 'nsc.inicial.2.b',
            'email' => 'inicial.2.b@nsc.edu.ec',
            'password' => bcrypt('Nsc-0926319039')
        ])->assignRole('docente_tutor');//Castro Berruz	Yessenia 

        User::create([
            'name' => 'nsc.preparatorio.a',
            'email' => 'preparatorio.a@nsc.edu.ec',
            'password' => bcrypt('Nsc+0929506046')
        ])->assignRole('docente_tutor');//Morales	Asencio	María

        User::create([
            'name' => 'nsc.preparatorio.b',
            'email' => 'preparatorio.b@nsc.edu.ec',
            'password' => bcrypt('Nsc¿0927865964')
        ])->assignRole('docente_tutor');//Coronel	Sarmiento	Xiomara

        User::create([
            'name' => 'nsc.preparatorio.c',
            'email' => 'preparatorio.c@nsc.edu.ec',
            'password' => bcrypt('Nsc-1206716746')
        ])->assignRole('docente_revisor');//Onofre	Felix	Neyla

        User::create([
            'name' => 'nsc.segundo.a',
            'email' => 'segundo.a@nsc.edu.ec',
            'password' => bcrypt('Nsc-0930491485')
        ])->assignRole('docente_tutor');//Mariscal		Karen

        User::create([
            'name' => 'nsc.segundo.b',
            'email' => 'segundo.b@nsc.edu.ec',
            'password' => bcrypt('Nsc_1204105876')
        ])->assignRole('docente_tutor');//Ruiz	Briones 	Fresia	Mabel 

        User::create([
            'name' => 'nsc.segundo.c',
            'email' => 'segundo.c@nsc.edu.ec',
            'password' => bcrypt('Nsc-0927280271')
        ])->assignRole('docente_tutor');//Plúa 	Pesantes	Mayra

        User::create([
            'name' => 'nsc.tercero.a',
            'email' => 'tercero.a@nsc.edu.ec',
            'password' => bcrypt('Nsc¿0925413775')
        ])->assignRole('docente_tutor');//Borbor	Garcia	Gissella

        User::create([
            'name' => 'nsc.tercero.b',
            'email' => 'tercero.b@nsc.edu.ec',
            'password' => bcrypt('Nsc+0924025885')
        ])->assignRole('docente_tutor');//Orrala	Flores	Bettsy

        User::create([
            'name' => 'nsc.tercero.c',
            'email' => 'tercero.c@nsc.edu.ec',
            'password' => bcrypt('Nsc_0925995573')
        ])->assignRole('docente_tutor');//Rodriguez 	Forgett	Esther

        User::create([
            'name' => 'nsc.cuarto.a',
            'email' => 'cuarto.a@nsc.edu.ec',
            'password' => bcrypt('Nsc¿0931440366')
        ])->assignRole('docente_tutor');//Torres	Tircio	Kerly 

        User::create([
            'name' => 'nsc.cuarto.b',
            'email' => 'cuarto.b@nsc.edu.ec',
            'password' => bcrypt('Nsc_0930776687')
        ])->assignRole('docente_tutor');//Vinueza	Castro	Mónica 

        User::create([
            'name' => 'nsc.cuarto.c',
            'email' => 'cuarto.c@nsc.edu.ec',
            'password' => bcrypt('Nsc-0912191830')
        ])->assignRole('docente_revisor');//González 	Jiménez 	Carlota

        User::create([
            'name' => 'nsc.quinto.a',
            'email' => 'quinto.a@nsc.edu.ec',
            'password' => bcrypt('Nsc+070523075')
        ])->assignRole('docente_tutor');//Orellana 	Ramos	Mary

        User::create([
            'name' => 'nsc.quinto.b',
            'email' => 'quinto.b@nsc.edu.ec',
            'password' => bcrypt('Nsc¿0928845072')
        ])->assignRole('docente_tutor');//Alvarado	Perez	María

        User::create([
            'name' => 'nsc.quinto.c',
            'email' => 'quinto.c@nsc.edu.ec',
            'password' => bcrypt('Nsc¿0940309511')
        ])->assignRole('docente_tutor');//Pinargote 	Pin	Mariana

        User::create([
            'name' => 'nsc.sexto.a',
            'email' => 'sexto.a@nsc.edu.ec',
            'password' => bcrypt('Nsc_0924040157')
        ])->assignRole('docente_tutor');//Morales	Ramírez	Maria

        User::create([
            'name' => 'nsc.sexto.b',
            'email' => 'sexto.b@nsc.edu.ec',
            'password' => bcrypt('Nsc-0940232622')
        ])->assignRole('docente_revisor');//Villón 	Gonzabay	Vanessa

        User::create([
            'name' => 'nsc.septimo.a',
            'email' => 'septimo.a@nsc.edu.ec',
            'password' => bcrypt('Nsc¿0915732598')
        ])->assignRole('docente_tutor');//Baque	Baque 	María

            User::create([
                'name' => 'nsc.septimo.b',
                'email' => 'septimo.b@nsc.edu.ec',
                'password' => bcrypt('Nsc-0925482465')
            ])->assignRole('docente_tutor');//Tabares 	Macías 	Ketty

        User::create([
            'name' => 'nsc.octavo.a',
            'email' => 'octavo.a@nsc.edu.ec',
            'password' => bcrypt('Nsc+0954183505')
        ])->assignRole('docente_tutor');//Mera	Naranjo	Tamara

        User::create([
            'name' => 'nsc.octavo.b',
            'email' => 'octavo.b@nsc.edu.ec',
            'password' => bcrypt('Nsc_0917375534')
        ])->assignRole('docente_tutor');//Perez	Guapacaza	Jesus

        User::create([
            'name' => 'nsc.noveno.a',
            'email' => 'noveno.a@nsc.edu.ec',
            'password' => bcrypt('Nsc¿0926281767')
        ])->assignRole('docente_tutor');//Román 	Macías 	Jairon

        User::create([
            'name' => 'nsc.noveno.b',
            'email' => 'noveno.b@nsc.edu.ec',
            'password' => bcrypt('Nsc+1207110162')
        ])->assignRole('docente_tutor');//Pacheco	Zuñiga 	Génesis 

        User::create([
            'name' => 'nsc.decimo.a',
            'email' => 'decimo.a@nsc.edu.ec',
            'password' => bcrypt('Nsc-0950098665')
        ])->assignRole('docente_tutor');//Peña	Criollo	Jacqueline

        User::create([
            'name' => 'nsc.decimo.b',
            'email' => 'decimo.b@nsc.edu.ec',
            'password' => bcrypt('Nsc¿0918755497')
        ])->assignRole('docente_tutor');//Hernández	Ramírez 	Martha 

        User::create([
            'name' => 'nsc.bachillerato.1.a',
            'email' => 'bachillerato.1.a@nsc.edu.ec',
            'password' => bcrypt('Nsc_0924678022')
        ])->assignRole('docente_tutor');//Arevalo	Altamirano	Julio

        User::create([
            'name' => 'nsc.bachillerato.1.b',
            'email' => 'bachillerato.1.b@nsc.edu.ec',
            'password' => bcrypt('Nsc+0924850928')
        ])->assignRole('docente_tutor');//Aviles	Chaguancallo	Arnald

        User::create([
            'name' => 'nsc.bachillerato.2.a',
            'email' => 'bachillerato.2.a@nsc.edu.ec',
            'password' => bcrypt('Nsc¿0911892503')
        ])->assignRole('docente_revisor');//Mejía	Ortega 	Alexia

        User::create([
            'name' => 'nsc.ingles.1',
            'email' => 'ingles.1@nsc.edu.ec',
            'password' => bcrypt('Nsc+0910486968')
        ])->assignRole('docente');//Espinosa	Navarro 	Giuseppe

        User::create([
            'name' => 'nsc.ingles.2',
            'email' => 'ingles.2@nsc.edu.ec',
            'password' => bcrypt('Nsc-2000086385')
        ])->assignRole('docente');//Mendieta		Pablo

        User::create([
            'name' => 'nsc.ingles.3',
            'email' => 'ingles.3@nsc.edu.ec',
            'password' => bcrypt('Nsc+0927235812')
        ])->assignRole('docente');//Cabrera	Quiñonez 	Erika

        User::create([
            'name' => 'nsc.ingles.4',
            'email' => 'ingles.4@nsc.edu.ec',
            'password' => bcrypt('Nsc-0911151314')
        ])->assignRole('docente');//Pruneda		Rosendo

        User::create([
            'name' => 'nsc.ingles.5',
            'email' => 'ingles.5@nsc.edu.ec',
            'password' => bcrypt('Nsc¿0954888764')
        ])->assignRole('docente');//Mota	Coronel	Andrea

        User::create([
            'name' => 'nsc.robotica',
            'email' => 'robotica@nsc.edu.ec',
            'password' => bcrypt('Nsc+0931658231')
        ])->assignRole('docente');//Yagual	Guevara	Erick

        User::create([
            'name' => 'nsc.eeff',
            'email' => 'eeff@nsc.edu.ec',
            'password' => bcrypt('Nsc_0931130207')
        ])->assignRole('docente');//Barrezueta	Guerrero	Joel

        User::create([
            'name' => 'nsc.eeff2',
            'email' => 'eeff2@nsc.edu.ec',
            'password' => bcrypt('Nsc-0918697707')
        ])->assignRole('docente');//Tamayo	Vivero	Mirella

        User::create([
            'name' => 'nsc.eeff3',
            'email' => 'eeff3@nsc.edu.ec',
            'password' => bcrypt('Nsc-0930776687')
        ])->assignRole('docente');//Vinueza	Castro	Monica

        User::create([
            'name' => 'colector.1',
            'email' => 'colecturia@nsc.edu.ec',
            'password' => bcrypt('Nsc0927340885')
        ])->assignRole('colector');

        // $usuario = User::latest('id')->first();

        // Persona::create([
        //     'identificacion' => '0955546601',
        //     'apellido_paterno' => 'Romero',
        //     'apellido_materno' => 'Sanchez',
        //     'primer_nombre' => 'John',
        //     'segundo_nombre' => 'jairo',
        //     'telefono_celular' => '0999999999',
        //     'correo' => 'antonioloor462@gmail.com' 
        // ]);

        // Persona::create([
        //     'identificacion' => '0955546602',
        //     'apellido_paterno' => 'Romero',
        //     'apellido_materno' => 'Sanchez',
        //     'primer_nombre' => 'Jose',
        //     'segundo_nombre' => 'Carlos',
        //     'sexo' => 'Masculino',
        //     'fecha_nacimiento' => '1999-04-28',
        //     'telefono_celular' => '0999999999',
        //     'correo' => 'antonioloor462@gmail.com' 
        // ]);

        // Persona::create([
        //     'identificacion' => '0955546603',
        //     'apellido_paterno' => 'Loor',
        //     'apellido_materno' => 'Anchundia',
        //     'primer_nombre' => 'Anthony',
        //     'segundo_nombre' => 'insrael',
        //     'sexo' => 'Masculino',
        //     'fecha_nacimiento' => '1999-04-28',
        //     'telefono_celular' => '0999999999',
        //     'correo' => 'antonioloor462@gmail.com' 
        // ]);

        // Persona::create([
        //     'identificacion' => '0955546604',
        //     'apellido_paterno' => 'Alberto',
        //     'apellido_materno' => 'ramirez',
        //     'primer_nombre' => 'Anthony',
        //     'primer_nombre' => 'Daniel',
        //     'sexo' => 'Masculino',
        //     'fecha_nacimiento' => '1999-04-28',
        //     'telefono_celular' => '0999999999',
        //     'correo' => 'antonioloor462@gmail.com' 
        // ]);
        // $persona = Persona::latest('id')->first();

        // Representante::create([
        //     'persona_id' => $persona->id
        // ]);
        
        // Persona::create([
        //     'cedula' => '1312049461',
        //     'apellido_paterno' => 'Loor',
        //     'apellido_materno' => 'Anchundia',
        //     'primer_nombre' => 'Anthony',
        //     'segundo_nombre' => 'Israel',
        //     'sexo' => 'Masculino',
        //     'fecha_nacimiento' => '1999-04-28',
        //     'lugar_nacimiento_id' => 138,
        //     'nacionalidad_id' => 11,
        //     'telefono_celular' => '0996627480',
        //     'correo' => 'anthonyloor462@gmail.com' 
        // ]);
        // $persona = Persona::latest('id')->first();

        // Representante::create([
        //     'persona_id' => $persona->id,
        //     'user_id' => $usuario->id
        // ]);


        // $representante = Representante::latest('id')->first();

        // Persona::create([
        //     'cedula' => '09122425601',
        //     'apellido_paterno' => 'Loor',
        //     'apellido_materno' => 'M',
        //     'primer_nombre' => 'Damian',
        //     'segundo_nombre' => 'D',
        //     'sexo' => 'Masculino',
        //     'fecha_nacimiento' => '2023-2024',
        //     'lugar_nacimiento_id' => 77,
        //     'nacionalidad_id' => 11
        // ]);
        // $persona = Persona::latest('id')->first();

        // Estudiante::create([
        //     'persona_id' => $persona->id
        // ]);

        // $estudiante = Estudiante::latest('id')->first();

        // EstudianteRepresentante::create([
        //     'estudiante_id' => $estudiante->id,
        //     'representante_id'=> $representante->id,
        //     'parentesco_id' => 1
        // ]);


        // Persona::create([
        //     'cedula' => '09336425690',
        //     'apellido_paterno' => 'Loor',
        //     'apellido_materno' => 'M',
        //     'primer_nombre' => 'Antonio',
        //     'segundo_nombre' => 'D',
        //     'sexo' => 'Masculino',
        //     'fecha_nacimiento' => '2023-2024',
        //     'lugar_nacimiento_id' => 77,
        //     'nacionalidad_id' => 11
        // ]);
        // $persona = Persona::latest('id')->first();
        // Estudiante::create([
        //     'persona_id' => $persona->id,
        // ]);

        // $estudiante = Estudiante::latest('id')->first();

        // EstudianteRepresentante::create([
        //     'estudiante_id' => $estudiante->id,
        //     'representante_id'=> $representante->id,
        //     'parentesco_id' => 1
        // ]);
    }
}