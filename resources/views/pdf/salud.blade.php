<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Informe de Matrícula</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 10px;
            padding: 10px;
            color: #333; /* Texto en gris oscuro */
            background-color: #f5f5f5; /* Fondo gris claro */
        }
        .container {
            background: #ffffff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 15px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .header img {
            width: 80px;
            height: auto;
            opacity: 0.8;
        }
        .header h1 {
            font-size: 22px;
            margin: 5px 0;
            color: #555;
        }
        .section {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 8px;
            background: #f8f9fa;
        }
        .section h3 {
            margin-bottom: 8px;
            color: #666;
            font-size: 18px;
            text-transform: uppercase;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
            font-size: 14px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th {
            background: #ececec; /* Color bajo solo en los encabezados */
            color: #444;
            font-weight: bold;
            padding: 8px;
            text-align: left;
        }
        td {
            padding: 8px;
            text-align: left;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            margin-top: 20px;
            padding-top: 10px;
            color: #777;
        }
    </style>
</head>
<body>

    <div class="container">

        <!-- Encabezado con Logo -->
        <div class="header">
            <img src="{{ $imageBase64 }}" style="width: 250px; height: auto;">
            <h1>Ficha de salud</h1>
        </div>

        <!-- Datos del Estudiante -->
        <div class="section">
            <h3>Datos del Estudiante</h3>
            <table>
                <tr>
                    <th>Cédula</th>
                    <td>{{ $salud->cedula_estudiante }}</td>
                </tr>
                <tr>
                    <th>Nombre Completo</th>
                    <td>{{ $salud->primer_nombre_estudiante }} {{ $salud->segundo_nombre_estudiante }} {{ $salud->apellido_paterno_estudiante }} {{ $salud->apellido_materno_estudiante }}</td>
                </tr>
                <tr>
                    <th>Año de básica</th>
                    <td>{{ $salud->ano_basica }}</td>
                </tr>
                <tr>
                    <th>Estatura</th>
                    <td>{{ $salud->estatura }} cm</td>
                </tr>
                <tr>
                    <th>Peso</th>
                    <td>{{ $salud->peso_libras }} kg</td>
                </tr>
                <tr>
                    <th>Discapacidad</th>
                    <td>{{ $salud->discapacidad_si_no }}</td>
                </tr>
                @if( $salud->discapacidad_si_no == 'Si' )
                    <tr>
                        <th>Discapacidad - Lenguaje</th>
                        <td>{{ $salud->discapacidad_lenguaje_si_no }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - Porcentaje</th>
                        <td>{{ $salud->discapacidad_lenguaje_porcentaje }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - Detalle</th>
                        <td>{{ $salud->discapacidad_lenguaje_detalle }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - Auditiva</th>
                        <td>{{ $salud->discapacidad_auditiva_si_no }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - Porcentaje</th>
                        <td>{{ $salud->	discapacidad_auditiva_porcentaje }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - Detalle</th>
                        <td>{{ $salud->discapacidad_auditiva_detalle }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - Visual</th>
                        <td>{{ $salud->discapacidad_visual_si_no }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - Porcentaje</th>
                        <td>{{ $salud->discapacidad_visual_porcentaje }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - Detalle</th>
                        <td>{{ $salud->discapacidad_visual_detalle }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - Fisica</th>
                        <td>{{ $salud->discapacidad_fisica_si_no }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - Porcentaje</th>
                        <td>{{ $salud->discapacidad_fisica_porcentaje }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - Detalle</th>
                        <td>{{ $salud->discapacidad_fisica_detalle }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - Intelectual</th>
                        <td>{{ $salud->discapacidad_intelectual_si_no }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - Porcentaje</th>
                        <td>{{ $salud->discapacidad_intelectual_porcentaje }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - Detalle</th>
                        <td>{{ $salud->discapacidad_intelectual_detalle }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - Catastroficas</th>
                        <td>{{ $salud->cronicas_catastroficas_si_no }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - Porcentaje</th>
                        <td>{{ $salud->cronicas_catastroficas_porcentaje }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - Detalle</th>
                        <td>{{ $salud->cronicas_catastroficas_detalle }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - Psicosocial </th>
                        <td>{{ $salud->psicosocial_si_no }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - Porcentaje </th>
                        <td>{{ $salud->psicosocial_porcentaje }}</td>
                    </tr>
                    <tr>
                        <th>Discapacidad - detalle </th>
                        <td>{{ $salud->psicosocial_detalle }}</td>
                    </tr>
                @endif
                <tr>
                    <th>¿ Utiliza aparatos de ayuda ?</th>
                    <td>{{ $salud->aparatos_ayuda }}</td>
                </tr>
                @if( $salud->aparatos_ayuda == "Si" )
                    <tr>
                        <th>Especifique con mas detalle sobre los aparatos de ayuda que usa el estudiante</th>
                        <td>{{ $salud->especifique_aparatos_ayuda }}</td>
                    </tr>
                @endif
                <tr>
                    <th>¿El estudiante posse carnet de discapacidad del conadis?</th>
                    <td>{{ $salud->carnet_conadis_si_no }}</td>
                </tr>
                @if( $salud->carnet_conadis_si_no == "Si" )
                    <tr>
                        <th>Número de carnet del conadis</th>
                        <td>{{ $salud->numero_carnet_conadis }}</td>
                    </tr>
                @endif
                <tr>
                    <th>¿El estudiante está medicado con algún medicamento?</th>
                    <td>{{ $salud->medicamento_si_no }}</td>
                </tr>
                @if( $salud->medicamento_si_no == "Si" )
                    <tr>
                        <th>En el caso de estar medicado con medicamentos especifique</th>
                        <td>{{ $salud->especifique_medicamentos }}</td>
                    </tr>
                @endif
                <tr>
                    <th>¿El estudiante posee algun alergia?</th>
                    <td>{{ $salud->alergia_estudiante_si_no }}</td>
                </tr>
                @if( $salud->alergia_estudiante_si_no == "Si" )
                    <tr>
                        <th>Alergias</th>
                        <td>{{ $salud->alergia_estudiante }}</td>
                    </tr>
                @endif
                <tr>
                    <th>Condiciones: Enfermedades / Accidentes</th>
                    <td>{{ $salud->enfermedades_accidentes }}</td>
                </tr>
                @if( $salud->enfermedades_accidentes != "Ninguna" )
                    <tr>
                        <th>Especifique otro accidente o enfermedad</th>
                        <td>{{ $salud->especifique_accidente_enfermedad }}</td>
                    </tr>
                @endif
                <tr>
                    <th>¿El estudiante ha pasado por alguna interveción quirúrgicas?</th>
                    <td>{{ $salud->intervencion_quirurgica_si_no }}</td>
                </tr>
                @if( $salud->intervencion_quirurgica_si_no == "Si" )
                    <tr>
                        <th>¿Cuántas intervenciones quirúrgicas ha tenido ?</th>
                        <td>{{ $salud->cantidad_intervencion_quirugicas }}</td>
                    </tr>
                    <tr>
                        <th>Fecha interveción quirurgica</th>
                        <td>{{ $salud->	tipo_intervencion_quirugica }}</td>
                    </tr>
                    <tr>
                        <th>Fecha interveción quirurgica</th>
                        <td>{{ $salud->fecha_intervencion_quirugica }}</td>
                    </tr>
                @endif
                <tr>
                    <th>Fecha de última desparasitación</th>
                    <td>{{ $salud->fecha_ultima_desparasitacion }}</td>
                </tr>
                <tr>
                    <th>¿El estudiante tiene algunas de estas vacuna?</th>
                    <td>{{ $salud->vacunas }}</td>
                </tr>
                @if( $salud->vacunas == "Otra" )
                    <tr>
                        <th>Especifique con detalle sobre alguna otra vacuna</th>
                        <td>{{ $salud->otra_vacuna }}</td>
                    </tr>
                @endif
                <tr>
                    <th>¿El estudiante presenta alguna dificultad para dormir?</th>
                    <td>{{ $salud->dificultad_dormir }}</td>
                </tr>

                @if( $salud->dificultad_dormir != "Ninguna" )
                    <tr>
                        <th>Especifique con mas detalle otra dificultad para dormir</th>
                        <td>{{ $salud->otra_dificultad_dormir }}</td>
                    </tr>
                @endif
                <tr>
                    <th>Antecedentes patológicos famiiares</th>
                    <td>{{ $salud->antecedentes_patologicos_famiiares }}</td>
                </tr>
                <tr>
                    <th>Especifique otro antecedentes patológicos famiiares</th>
                    <td>{{ $salud->especifique_antecedentes_patologicos_famiiares }}</td>
                </tr>
                <tr>
                    <th>¿El estudiante posse un Seguro Estudiantil?</th>
                    <td>{{ $salud->seguro_estudiante_si_no }}</td>
                </tr>
                @if($salud->seguro_estudiante_si_no == "Si")
                    <tr>
                        <th>Aseguradora - salud</th>
                        <td>{{ $salud->aseguradora_salud }}</td>
                    </tr>
                    <tr>
                        <th>Telefono</th>
                        <td>{{ $salud->	aseguradora_salud_telefono }}</td>
                    </tr>
                    <tr>
                        <th>En caso de emergencia derivar a</th>
                        <td>{{ $salud->aseguradora_salud_emergencia	}}</td>
                    </tr>
                    <tr>
                        <th>Aseguradora - Accidente</th>
                        <td>{{ $salud->aseguradora_accidente }}</td>
                    </tr>
                    <tr>
                        <th>Teléfono</th>
                        <td>{{ $salud->aseguradora_accidente_telefono }}</td>
                    </tr>
                    <tr>
                        <th>En caso de emergencia derivar a</th>
                        <td>{{ $salud->aseguradora_accidente_emergencia }}</td>
                    </tr>
                    <tr>
                        <th>Aseguradora - Otra</th>
                        <td>{{ $salud->aseguradora_otra }}</td>
                    </tr>
                    <tr>
                        <th>Teléfono</th>
                        <td>{{ $salud->aseguradora_otro_telefono }}</td>
                    </tr>
                    <tr>
                        <th>En caso de emergencia derivar a</th>
                        <td>{{ $salud->aseguradora_otro_emergencia }}</td>
                    </tr>
                @endif
            </table>
        </div>

        <!-- Pie de Página -->
        <div class="footer">
            <p>Unidad Educativa Nuestra Señora del Carmen - {{ date('Y') }}</p>
        </div>

    </div>

</body>
</html>

