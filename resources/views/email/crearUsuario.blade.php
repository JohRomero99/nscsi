<x-mail::message>
# Nuestra Señora del Carmen te da la bienvenida.

Estimado/a {{$user->name}}, <br>

Nos complace informarte que tu cuenta ha sido creada exitosamente. A continuación, encontrarás tus credenciales de acceso: <br>

<x-mail::panel>
<strong>Usuario:</strong> {{$user->email}} <br>
<strong>Contraseña:</strong> {{$randomContrasena}} <br>
</x-mail::panel>

<x-mail::button :url="route('welcome')">
Click para continuar con el proceso
</x-mail::button>

Te recomendamos cambiar tu contraseña al iniciar sesión por primera vez para garantizar la seguridad de tu cuenta. <br>
Si tienes alguna pregunta o necesitas asistencia, no dudes en contactarnos.

</x-mail::message>
