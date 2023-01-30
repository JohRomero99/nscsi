@component('mail::message')
# Hola,

<center>
    John Jairo Romero Sanchez, <br>
</center>
Para continuar con el proceso de matriculacion te proporcionamos las siguientes creednciales. <br>
<center>
**Usuario:** 0955546601 <br>
**Contraseña:** wofwoiefw <br>
</center>

@component('mail::button', ['url' => 'http://localhost/nscsi/public/'])
Ir a sitio web
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
