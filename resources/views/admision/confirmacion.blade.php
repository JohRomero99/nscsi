<x-setup colorFondo="bg-green-500" icono="fa-solid fa-check text-white" colorFondoTres="bg-green-500" iconoTres="fa-solid fa-check text-white">

<div class="container mt-2 mb-50">
    <div class="flex justify-center">
        <img 
            src="{{ asset('imagenes/LogoNSCFinalNegro.png') }}"
            class="mt-1"
            alt="send"
            width="40%"
            height="40%"
        >
    </div>
    <h2 class="text-4xl mt-2 text-center text-green-500 dark:text-white">¡Datos guardados correctamente!</h2>
    <div class="flex justify-center">
        <img 
            src="{{ asset('imagenes/send.png') }}"
            class="mt-3"
            alt="send"
            width="40%"
            height="40%"
        >
    </div>
    <p class="text-3xl text-center text-green-900 mb-3">¡Muchas gracias por tu registro, {{ $primerNombre }}!</p>
    <p class="text-center text-green-900">Revisa tu baneja de entrada para continuar con el proceso de admision</p>
    <p class="text-center text-green-900">¿El correo no llegó?</p>
    <form 
        
    >
        
        <div class="text-center mt-4 pl-3 pr-3 pb-6 mb-10">
            <button 
                type="submit" 
                class="bg-green-500 hover:bg-green-400 text-white font-bold p-3 px-4 rounded" 
                id="reenviarEmail"
            >
                Reenviar email
            </button>
        </div>
    </form>
</div>

<script>
    @if (session('estudiante'))
        Swal.fire({
            title: "¡Exito!",
            text: "Datos Guardados con éxito por favor revise su bandeja de entrada",
            icon: "success"
        });
    @endif
    @if (session('email'))
        Swal.fire({
            title: "¡Exito!",
            text: "Por favor, revisa tu bandeja de entrada y verifica si el correo ya te llegó. Si no lo ves, revisa también la carpeta de spam o correo no deseado.",
            icon: "success"
        });
    @endif
</script>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#mi-formulario').submit(function(e) {
                e.preventDefault(); // Evita que el formulario se envíe de forma tradicional.

                $.ajax({
                    type: 'POST',
                    url: "{{ route('admision.representante.reenviar.email', ['userId' => $userId]) }}", // Usa la función route() para obtener la URL.
                    data: $(this).serialize(), // Serializa los datos del formulario.
                    success: function(response) {
                        // Haz algo con la respuesta, como mostrar un mensaje.
                        console.log(response);
                        alert('¡Datos enviados correctamente!');
                    },
                    error: function(error) {
                        // Maneja los errores
                        console.error(error);
                        alert('Ocurrió un error al procesar la solicitud.');
                    }
                });
            });
        });
    </script>
@endpush

</x-setup>