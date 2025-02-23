<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Te damos la bienvenida a un nuevo sistema') }}
    </h2>
</x-slot>

<div class="container mx-auto bg-white p-10 mt-5">
    {{-- <h1 class="mt-6 font-bold text-2xl"><i class="far fa-user"></i> Fichas Aspirantes</h1> --}}
    <form action="" method="POST" class="py-5">
        @csrf
        <ol class="flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4 rtl:space-x-reverse">
            <li class="flex items-center text-blue-600 dark:text-blue-500">
                <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    1
                </span>
                <span class="hidden sm:inline-flex sm:ms-2"><strong>Información del Estudiante</strong></span>
                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                </svg>
            </li>
            <li class="flex items-center">
                <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    2
                </span>
                <span class="hidden sm:inline-flex sm:ms-2"><strong>Información del Padre</strong></span>
                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                </svg>
            </li>
            <li class="flex items-center">
                <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    3
                </span>
                <strong>Información de la Madre</strong>
            </li>
        </ol>
        <div class="grid grid-cols-4 gap-4 mt-9">
            {{-- <div class="col-span-4 opacity-55">
                <label class="block" for="">Cédula</label>
                <input type="text" name="cedula" disabled value="{{ $persona->cedula }}" class="mt-1 block border-gray-300 w-full rounded-md">
            </div>
            <div class="opacity-55">
                <label class="block" for="">Primer Nombre</label>
                <input type="text" name="primer_nombre" disabled  value="{{ $persona->primer_nombre }}" class="mt-1 block border-gray-300 w-full rounded-md">
            </div>
            <div class="opacity-55">
                <label class="block" for="">Segundo Nombre</label>
                <input type="text" name="segundo_nombre" disabled  value="{{ $persona->segundo_nombre }}" class="mt-1 block border-gray-300 w-full rounded-md">
            </div>
            <div class="opacity-55">
                <label class="block" for="">Apellido Paterno</label>
                <input type="text" name="apellido_paterno" disabled value="{{ $persona->apellido_paterno }}" class="mt-1 block border-gray-300 w-full rounded-md">
            </div>
            <div class="opacity-55">
                <label class="block" for="">Apellido Materno</label>
                <input type="text" name="apellido_materno" disabled value="{{ $persona->apellido_materno }}" class="mt-1 block border-gray-300 w-full rounded-md">
            </div> --}}
            <div class="col-span-2">
                <label class="block" for="">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento" value="{{ $persona->fecha_nacimiento }}" class="mt-1 border-gray-300 block w-full rounded-md">
            </div>
            <div class="col-span-2">
                <label class="block" for="">Nacionalidad</label>
                <select type="select" name="nacionalidad" class="mt-1 block border-gray-300 w-full rounded-md">
                    @foreach ($nacionalidad as $nacionalidad)
                        <option value="{{ $nacionalidad->id }}">{{ $nacionalidad->nacionalidad }}</option> 
                    @endforeach
                </select>
            </div>
            <div class="col-span-3">
                <label class="block" for="">Dirección Domiciliaria</label>
                <input type="text" name="direccion_domiciliaria" value="" class="mt-1 border-gray-300 block w-full rounded-md">
            </div>
            <div class="col-span-1">
                <label class="block" for="">Sexo</label>
                <select type="select" name="sexo" class="mt-1 block border-gray-300 w-full rounded-md">
                    @foreach ($sexo as $sexo)
                        <option value="{{ $sexo->id }}">{{ $sexo->sexo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-span-2">
                <label class="block" for="">¿Está repitiendo el año lectivo?</label>
                <select type="select" name="" class="mt-1 block border-gray-300 w-full rounded-md">
                    <option value="">Si</option>
                    <option value="">No</option>
                </select>
            </div>
            <div class="col-span-2 opacity-55">
                <label class="block" for="">Año de básica en el que postula</label>
                <select type="select" name="" class="mt-1 block border-gray-300 w-full rounded-md">
                    @foreach ($anio_academico as $anio_academico)
                        <option value="">{{ $anio_academico->anio_basica }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-span-4">
                <label class="block" for="">¿Con quién vive el Estudiante?</label>
                <select type="select" name="" class="mt-1 block border-gray-300 w-full rounded-md">
                    <option value="">Padre</option>
                    <option value="">Madre</option>
                    <option value="">Abuelo</option>
                </select>
            </div>
            <div class="col-span-4">
                <label class="block" for="">Vivienda</label>
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white mt-1">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="vue-checkbox-list" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Propia</label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="react-checkbox-list" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alquilada</label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="angular-checkbox-list" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hipotecada</label>
                        </div>
                    </li>
                    <li class="w-full dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="laravel-checkbox-list" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otra</label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-span-4">
                <label class="block" for="">¿Años que vive en el domicilio?</label>
                <select type="select" name="" class="mt-1 block border-gray-300 w-full rounded-md">
                    <option value="">1</option>
                </select>
            </div>
            <div class="col-span-4">
                <label class="block" for="">¿Con quién vive le Estudiante?</label>
                <select type="select" name="" class="mt-1 block border-gray-300 w-full rounded-md">
                    <option value="">Padre</option>
                    <option value="">Madre</option>
                    <option value="">Hermanos</option>
                    <option value="">Tíos</option>
                    <option value="">Abuelos</option>
                </select>
            </div>
        </div>
        <div class="text-center">
            <button type="button" class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded">
                <i class="fas fa-arrow-circle-left"></i> Volver
            </button>
            <button type="submit" form="main-form" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded mt-4">
                Continuar <i class="fas fa-arrow-circle-right"></i>
            </button>
        </div>
    </form>
</div>
</x-app-layout>