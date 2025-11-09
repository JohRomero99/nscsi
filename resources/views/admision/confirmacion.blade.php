<x-setup colorFondo="bg-[#89462a]" icono="fa-solid fa-check text-white" colorFondoTres="bg-[#89462a]" iconoTres="fa-solid fa-check text-white">


<div class="container mt-2 mb-50">
    <div class="block lg:hidden p-5">
        <x-setupmobil textoTres="text-green-900" textoDos="text-green-900" borderTres="border-green-600" borderDos="border-green-600"></x-setupmobil>
    </div>
    <div class="flex justify-center">
        <img 
            src="{{ asset('imagenes/sendEmail.png') }}"
            class="mt-3"
            alt="send"
            width="40%"
            height="40%"
        >
    </div>
    <p class="text-3xl text-center text-green-900 mb-3 mt-3">¡Muchas gracias por tu registro, {{ $primerNombre }}!</p>
    <p class="text-center text-green-900">Revisa tu baneja de entrada para continuar con el proceso de admision.</p>
    <p class="text-center text-green-900">¿El correo no llegó?</p>
    <form 
        
    >
        
        <div class="text-center mt-4 pl-3 pr-3 pb-6 mb-10">
            <button 
                type="submit" 
                class="bg-[#89462a] text-white font-bold p-3 px-4 rounded" 
                id="reenviarEmail"
            >
                Reenviar email <i class="fa-solid fa-arrows-rotate"></i>
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