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
            <h1>Ficha de Matrícula</h1>
        </div>

        <!-- Datos del Estudiante -->
        <div class="section">
            <h3>Datos del Estudiante</h3>
            <table>
                <tr>
                    <th>Cédula</th>
                    <td>{{ $matriculacion->cedula_estudiante }}</td>
                </tr>
                <tr>
                    <th>Nombre Completo</th>
                    <td>{{ $matriculacion->primer_nombre_estudiante }} {{ $matriculacion->segundo_nombre_estudiante }} {{ $matriculacion->apellido_paterno_estudiante }} {{ $matriculacion->apellido_materno_estudiante }}</td>
                </tr>
                <tr>
                    <th>Fecha de Nacimiento</th>
                    <td>{{ $matriculacion->fecha_nacimiento_estudiante }}</td>
                </tr>
                <tr>
                    <th>Año de básica</th>
                    <td>{{ $matriculacion->ano_basica }}</td>
                </tr>
                <tr>
                    <th>¿Estudiante nuevo o antiguo?</th>
                    <td>{{ $matriculacion->nuevo_nsc }}</td>
                </tr>
                <tr>
                    <th>Código único electrico</th>
                    <td>{{ $matriculacion->codigo_unico_electrico }}</td>
                </tr>
                <tr>
                    <th>Genero estudiante</th>
                    <td>{{ $matriculacion->genero_estudiante }}</td>
                </tr>
                <tr>
                    <th>Transporte Escolar</th>
                    <td>{{ $matriculacion->transporte_escolar }}</td>
                </tr>
                <tr>
                    <th>Ruta Escolar</th>
                    <td>{{ $matriculacion->ruta_escolar }}</td>
                </tr>
            </table>
        </div>

        <!-- Datos de la Madre -->
        <div class="section">
            <h3>Representante Número Uno</h3>
            <table>
                <tr>
                    <th>Cédula</th>
                    <td>{{ $matriculacion->cedula_madre }}</td>
                </tr>
                <tr>
                    <th>Nombre Completo</th>
                    <td>{{ $matriculacion->primer_nombre_madre }} {{ $matriculacion->segundo_nombre_madre }} {{ $matriculacion->apellido_paterno_madre }} {{ $matriculacion->apellido_materno_madre }}</td>
                </tr>
                <tr>
                    <th>Dirección</th>
                    <td>{{ $matriculacion->direccion_madre }}</td>
                </tr>
                <tr>
                    <th>Correo</th>
                    <td>{{ $matriculacion->correo_madre }}</td>
                </tr>
                <tr>
                    <th>Teléfono</th>
                    <td>{{ $matriculacion->telefono_madre }}</td>
                </tr>
                <tr>
                    <th>Relación con el estudiante</th>
                    <td>{{ $matriculacion->relacion_representante_uno }}</td>
                </tr>
            </table>
        </div>

        <!-- Datos del Padre -->
        <div class="section">
            <h3>Representante Número Dos</h3>
            <table>
                <tr>
                    <th>Cédula</th>
                    <td>{{ $matriculacion->cedula_padre }}</td>
                </tr>
                <tr>
                    <th>Nombre Completo</th>
                    <td>{{ $matriculacion->primer_nombre_padre }} {{ $matriculacion->segundo_nombre_padre }} {{ $matriculacion->apellido_paterno_padre }} {{ $matriculacion->apellido_materno_padre }}</td>
                </tr>
                <tr>
                    <th>Dirección</th>
                    <td>{{ $matriculacion->direccion_padre }}</td>
                </tr>
                <tr>
                    <th>Correo</th>
                    <td>{{ $matriculacion->correo_padre }}</td>
                </tr>
                <tr>
                    <th>Teléfono</th>
                    <td>{{ $matriculacion->telefono_padre }}</td>
                </tr>
                <tr>
                    <th>Relación con el estudiante</th>
                    <td>{{ $matriculacion->relacion_representante_uno }}</td>
                </tr>
            </table>
        </div>

        <!-- Pago de pensiones -->
        <div class="section">
            <h3>Pago de Pensiones</h3>
            <table>
                <tr>
                    <th>Forma de Pago</th>
                    <td>{{ $matriculacion->forma_pago_pensiones }}</td>
                </tr>
                <tr>
                    <th>¿Desea que la factura sea emitida con otros datos diferentes a los del Representante?</th>
                    <td>{{ $matriculacion->facturacion }}</td>
                </tr>
                <tr>
                    <th>Cédula</th>
                    <td>{{ $matriculacion->cedula_ruc }}</td>
                </tr>
                <tr>
                    <th>Razón Social</th>
                    <td>{{ $matriculacion->razon_social }}</td>
                </tr>
                <tr>
                    <th>Dirección</th>
                    <td>{{ $matriculacion->direccion_facturacion }}</td>
                </tr>
                <tr>
                    <th>Correo</th>
                    <td>{{ $matriculacion->correo_facturacion }}</td>
                </tr>
                <tr>
                    <th>Teléfono</th>
                    <td>{{ $matriculacion->telefono_facturacion }}</td>
                </tr>
            </table>
        </div>


        <!-- Referencia Familiar Uno -->
        <div class="section">
            <h3>Primera Referencia Familiar</h3>
            <table>
                <tr>
                    <th>Nombres</th>
                    <td>{{ $matriculacion->primera_referencia_familiar_nombres }}</td>
                </tr>
                <tr>
                    <th>Cédula</th>
                    <td>{{ $matriculacion->primera_referencia_familiar_cedula }}</td>
                </tr>
                <tr>
                    <th>Teléfono</th>
                    <td>{{ $matriculacion->primera_referencia_familiar_telefono }}</td>
                </tr>
                <tr>
                    <th>Modalidad</th>
                    <td>{{ $matriculacion->primera_referencia_familiar_modalidad }}</td>
                </tr>
            </table>
        </div>

        <!-- Referencia Familiar Dos -->
        <div class="section">
            <h3>Segunda Referencia Familiar</h3>
            <table>
                <tr>
                    <th>Nombres</th>
                    <td>{{ $matriculacion->segunda_referencia_familiar_nombres }}</td>
                </tr>
                <tr>
                    <th>Cédula</th>
                    <td>{{ $matriculacion->segunda_referencia_familiar_cedula }}</td>
                </tr>
                <tr>
                    <th>Teléfono</th>
                    <td>{{ $matriculacion->segunda_referencia_familiar_telefono }}</td>
                </tr>
                <tr>
                    <th>Modalidad</th>
                    <td>{{ $matriculacion->segunda_referencia_familiar_modalidad }}</td>
                </tr>
            </table>
        </div>

        <!-- Referencia Familiar Tres -->
        <div class="section">
            <h3>Tercera Referencia Familiar</h3>
            <table>
                <tr>
                    <th>Nombres</th>
                    <td>{{ $matriculacion->tercera_referencia_familiar_nombres }}</td>
                </tr>
                <tr>
                    <th>Cédula</th>
                    <td>{{ $matriculacion->tercera_referencia_familiar_cedula }}</td>
                </tr>
                <tr>
                    <th>Teléfono</th>
                    <td>{{ $matriculacion->tercera_referencia_familiar_telefono }}</td>
                </tr>
                <tr>
                    <th>Modalidad</th>
                    <td>{{ $matriculacion->tercera_referencia_familiar_modalidad }}</td>
                </tr>
            </table>
        </div>

        <!-- Referencia Familiar Tres -->
        <div class="section">
            <h3>Informacion adicional</h3>
            <table>
                <tr>
                    <th>¿Autoriza el uso de su imagen para fines publicitarios de la escuela?</th>
                    @if( $matriculacion->imagen_estudiante == 'on' )
                        <td> Sí, autorizo el uso de mi imagen en material publicitario escolar. </td>
                    @else
                        <td> No, autorizo el uso de mi imagen en material publicitario escolar. </td>
                    @endif
                </tr>
                <tr>
                <th>Declaro que toda la información proporcionada en este formulario es verídica y correcta, y certifico que los datos ingresados corresponden a mi representado y a mí como representante legal.
                    Acepto que cualquier inconsistencia o falsedad en la información suministrada será mi responsabilidad, eximiendo a la Unidad Educativa Nuestra Señora del Carmen de cualquier perjuicio derivado de ello.</th>
                    <td> Certifico que toda la información ingresada es correcta </td>
                </tr>
            </table>
        </div>

        <!-- Pie de Página -->
        <div class="footer">
            <p>Unidad Educativa Nuestra Señora del Carmen - {{ date('Y') }}</p>
        </div>

    </div>

</body>
</html>

