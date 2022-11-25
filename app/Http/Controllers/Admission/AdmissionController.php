<?php

namespace App\Http\Controllers\Admission;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Alert;


use App\Models\Persona;
use App\Models\Representante;
use App\Models\Estudiante;
use App\Models\User;
use App\Models\UsrCodigoUsuario;
use App\Models\AyMContacto;
use App\Models\Role;
use App\Models\pasarelaPagos\nsc_estado_pasos_perfil;

use Validator, Input, Redirect; 
use Illuminate\Support\Facades\Mail;
use App\Mail\AdmisionCorreoUsername;
use App\Mail\AdmisionCorreoVerificacion;



class AdmissionController extends Controller
{
    
    public function index(){
        
        return view("admission.index");

    }
    public function createAdmission(Request $request){   
        
        
        $validator = Validator::make($request->all(), [
            'ci_representante' => 'required|numeric|digits:10',
            'rep_nombres'=> 'required|regex:/^[\pL\s\-]+$/u',
            'rep_apellidopaterno' => 'required|regex:/^[\pL\s\-]+$/u',
            'rep_apellidomaterno' => 'required|regex:/^[\pL\s\-]+$/u',
            'rep_celular' => 'required|numeric|digits:10',
            'rep_email' => 'required|email:rfc,dns',
        ]);
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        for ($i=0; $i < count($request->est_cedula); $i++) { 
            $roleid = Role::select('id')->where('name', 'representante_invitado')->get()->first();
            $tipo = 'A';
            $rol = $roleid->id;
            $exists_est = Persona::where('cedula', $request->est_cedula[$i])
            ->join('nsc_estudiante', 'nsc_persona.id', '=', 'nsc_estudiante.persona_id')->exists();
            //$exists_est = Estudiante::where('cedula', $request->est_cedula[$i])->exists();

                if ($exists_est) {
                    $roleid = Role::select('id')->where('name', 'representante')->get()->first();
                    $tipo = 'E';
                    $rol = $roleid->id;

                }
            $exists_est = AyMContacto::where('estudiante_ci', $request->est_cedula[$i])->exists();
            
            if($exists_est){
                $datos = AyMContacto::select('aym_contactos.representante_nombres','aym_contactos.representante_apellidos', 'aym_contactos.representante_email', 'usr_codigo_usuario.codigo')
                ->join('usr_codigo_usuario', 'aym_contactos.representante_ci', '=', 'usr_codigo_usuario.representante_ci')
                ->where('usr_codigo_usuario.representante_ci', $request->ci_representante)->get()->first();
                
                $name = $datos->representante_nombres;
                $lastname = $datos->representante_apellidos;
                $email = $datos->representante_email;
                $code = $datos->codigo;
                
                Mail::to($email)->send(new AdmisionCorreoVerificacion($name, $lastname, $code));
                $message = $request->rep_nombres.', El estudiante: '.$request->est_apellidopaterno[$i].' '.$request->est_primernombre[$i].'. Por favor Revise su Correo Electronico.';
                Alert::info('Actualmente ya lleva un proceso de admision', $message);
                return view("admission.index");
            }
            $nuevoEstudiante=AyMContacto::create([
                'representante_ci' => $request->ci_representante,
                'representante_nombres' => $request->rep_nombres,
                'representante_apellidos' => $request->rep_apellidopaterno.' '.$request->rep_apellidomaterno, 
                'representante_celular'  => $request->rep_celular,
                'representante_email' => $request->rep_email,
                'estudiante_ci' => $request->est_cedula[$i],
                'estudiante_apellido_paterno' => $request->est_apellidopaterno[$i],
                'estudiante_apellido_materno' => $request->est_apellidomaterno[$i],
                'estudiante_primer_nombre' => $request->est_primernombre[$i],
                'estudiante_segundo_nombre' => $request->est_segundonombre[$i],
                'anio_academico' => $request->est_anio_academico[$i],
                'fecha_nacimiento' => $request->est_fechanacimiento[$i],
                'tipo' => $tipo,
                'estado' => '0',
            ]);

            // generar_codigo($nuevoEstudiante->id,$nuevoEstudiante->representante_ci);

        }

        $exists_rep = Persona::where('cedula', $request->ci_representante)
        ->join('nsc_representante', 'nsc_persona.id', '=', 'nsc_representante.persona_id')
        ->whereNotNull('nsc_representante.user_id')->exists();
        
        if ($exists_rep){
            $rep_userid = Persona::select('nsc_representante.user_id as user_id', 'nsc_persona.primer_nombre as nombres', 'nsc_persona.primer_nombre as apellidos')
            ->join('nsc_representante', 'nsc_persona.id', '=', 'nsc_representante.persona_id')
            ->where('cedula', $request->ci_representante)->get()->first();
           
            //$rep_userid = Representante::select('user_id', 'nombres', 'apellidos')->where('cedula', $request->ci_representante)->get()->first();

            $user = User::select('name', 'email')->where('id', $rep_userid->user_id)->get()->first();
            $name = $rep_userid->nombres;
            $lastname = $rep_userid->apellidos;
            $email = $user->email;
            $username = $user->name;
            Mail::to($email)->send(new AdmisionCorreoUsername($name, $lastname, $username));
            $message = $request->rep_nombres.', Por favor Revise su Correo Electrónico';
            Alert::info('Puede continuar con su proceso de Admisión y Matriculación en nuestra plataforma', $message);
            return view("admission.index");
        }

//Preguntar si ya esta en UsrCodigoUsuario
        $exists_rep = UsrCodigoUsuario::where('representante_ci', $request->ci_representante)->exists();
//Si esta reguresa un mensaje de advertencia
        if ($exists_rep) {
            $datos_rep = UsrCodigoUsuario::select('nombres', 'apellidos', 'email', 'codigo')->where('representante_ci', $request->ci_representante)->get()->first();
            $name = $datos_rep->nombres;
            $lastname = $datos_rep->apellidos;
            $email = $datos_rep->email;
            $code = $datos_rep->codigo;
            Mail::to($email)->send(new AdmisionCorreoVerificacion($name, $lastname, $code));
            $message = $request->rep_nombres.', Por favor Revise su Correo Electronico';
            Alert::success('Su solicitud ha sido ingresada con éxito', $message);
            return view("admission.index");   
        }
//
        if (!$exists_rep) {
            $mailerliteClient = new \MailerLiteApi\MailerLite(env('MAILERLITE_API_KEY'));
            $subscribersApi = $mailerliteClient->subscribers();
            
            $codigo_rep = Str::random();
            $email_rep = $request->rep_email;
            $nombres_rep = $request->rep_nombres;
            $apellidos_rep = $request->rep_apellidopaterno.' '.$request->rep_apellidomaterno;
            $name = $nombres_rep;
            $lastname = $apellidos_rep;
            $code = $codigo_rep;
            $nuevoUsuario = UsrCodigoUsuario::create([
                'representante_ci' => $request->ci_representante,
                'rol' => $rol,
                'email' => $email_rep,
                'nombres' => $nombres_rep,
                'apellidos' => $apellidos_rep,
                'codigo' => $codigo_rep,
                
            ]);
            //$nuevoUsuario = UsrCodigoUsuario::latest('id')->first();
            

            for ($i=0; $i < count($request->est_cedula); $i++) {
                /*$nuevoEstudiante=AyMContacto::create([
                    'representante_ci' => $request->ci_representante,
                    'representante_nombres' => $request->rep_nombres,
                    'representante_apellidos' => $request->rep_apellidopaterno.' '.$request->rep_apellidomaterno, 
                    'representante_email' => $request->rep_email,
                    'estudiante_ci' => $request->est_cedula[$i],
                    'estudiante_apellido_paterno' => $request->est_apellidopaterno[$i],
                    'estudiante_apellido_materno' => $request->est_apellidomaterno[$i],
                    'estudiante_primer_nombre' => $request->est_primernombre[$i],
                    'estudiante_segundo_nombre' => $request->est_segundonombre[$i],
                    'anio_academico' => $request->est_anio_academico[$i],
                    'fecha_nacimiento' => $request->est_fechanacimiento[$i],
                    'tipo' => $tipo,
                    'estado' => '0',
                ]);*/
                
                $cedulaest = 'cedula_est'.$i;
                $nombres_est = 'nombres_est'.$i;
                $apellidos_est = 'apellidos_est'.$i; 
                $anio_academico_est = 'anio_academico_est'.$i;
                $subscriber = [
                    'email' => $request->rep_email,
                    'name' => $request->rep_nombres,
                    'fields' => [
                        'ci_representante' => $request->ci_representante,
                        'last_name' => $request->rep_apellidopaterno,
                        'apellido_paterno_r' => $request->rep_apellidopaterno,
                        'apellido_materno_r' => $request->rep_apellidomaterno,
                        'tipo' => $tipo,
                        'phone' => $request->rep_celular,
                        $cedulaest => $request->est_cedula[$i],
                        $nombres_est => $request->est_primernombre[$i].' '.$request->est_segundonombre[$i],
                        $apellidos_est => $request->est_apellidopaterno[$i].' '.$request->est_apellidomaterno[$i],
                        $anio_academico_est => $request->est_anio_academico[$i],
                        ]
                ];
                $subscribersApi = $mailerliteClient->subscribers();
                $addedSubscriber = $subscribersApi->create($subscriber); 
            }
            $groupsApi = $mailerliteClient->groups();
            $addedSubscriber = $groupsApi->addSubscriber( '111507477', $addedSubscriber);

            Mail::to($email_rep)->send(new AdmisionCorreoVerificacion($name, $lastname, $code));
            
            $message = $request->rep_nombres.', Por favor Revise su Correo Electronico';
            Alert::success('Su solicitud ha sido ingresada con exito', $message);
            return view("admission.index");   
        }
            /*$datos = UsrCodigoUsuario::select('nombres','apellidos', 'email', 'codigo')->where('representante_ci', $request->ci_representante)->get()->first();

            $name = $datos->nombres;
            $lastname = $datos->apellidos;
            $email = $datos->email;
            $code = $datos->codigo;

            Mail::to($email)->send(new AdmisionCorreoVerificacion($name, $lastname, $code));

            $message = $request->rep_nombres.', Por favor Revise su Correo Electronico';
            Alert::warning('Usted ya ha ingresado una Solicitud', $message);
            return view("admission.index");*/
    }
}
