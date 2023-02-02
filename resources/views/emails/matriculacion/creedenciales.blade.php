@component('mail::message')
# Hola, <br>

Para continuar con el proceso de matriculacion te proporcionamos las siguientes creednciales. <br>

**Usuario:** {{ $usuario }} <br>
**Contraseña:** {{ $nuevoUsuarioContrasena }} <br>

@component('mail::button', ['url' => 'http://localhost/nscsi/public/'])
Ir a sitio web
@endcomponent

Si tienes problemas al momento de ingresar comúnicate con soporte técnico. <br>
Correo: **soporte.tecnico@nsc.edu.ec** <br>
Teléfono: **09986986244** <br>
<!-- {{ config('app.name') }} -->
@endcomponent
