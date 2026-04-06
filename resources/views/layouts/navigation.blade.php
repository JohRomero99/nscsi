<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-100 dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <img 
                        src="{{ asset('imagenes/LogoPlataforma.png') }}" 
                        alt="LogoPlataforma"
                        width="100%"
                        height="100%"
                    >
                </a>
            </li>

            @hasanyrole('representante')
                <li>
                    <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <i class="fa-solid fa-house"></i>
                        <span class="ms-3">Incio</span>
                    </x-responsive-nav-link>
                </li>
            @endhasanyrole

            @hasanyrole('representante')
                <li>
                    <x-responsive-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                        <i class="fa-solid fa-user"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Perfil</span>
                    </x-responsive-nav-link>    
                </li>
            @endhasanyrole

            @hasanyrole('admin')
                <li>
                    <x-responsive-nav-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">
                        <i class="fa-solid fa-user-gear"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Usuarios</span>
                    </x-responsive-nav-link>    
                </li>
            @endhasanyrole

            @hasanyrole('recursosHumanos')
                <li>
                    <x-responsive-nav-link :href="route('rrhh.index')" :active="request()->routeIs('rrhh.index')">
                        <i class="fa-solid fa-user-gear"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Reportes</span>
                    </x-responsive-nav-link>    
                </li>
            @endhasanyrole

            @hasanyrole('colector')
                <li>
                    <x-responsive-nav-link :href="route('colector.index')" :active="request()->routeIs('colector.index')">
                        <i class="fa-solid fa-user-gear"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Home</span>
                    </x-responsive-nav-link>    
                </li>
            @endhasanyrole

            @hasanyrole('colector')
                <li>
                    <x-responsive-nav-link :href="route('colector.show')" :active="request()->routeIs('colector.show')">
                        <i class="fa-solid fa-chart-pie"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Estado de Cuenta</span>
                    </x-responsive-nav-link>    
                </li>
            @endhasanyrole

            @hasanyrole('colector')
                <li>
                    <x-responsive-nav-link :href="route('colector.show')" :active="request()->routeIs('colector.show')">
                        <i class="fa-solid fa-circle-dollar-to-slot"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Deudores</span>
                    </x-responsive-nav-link>    
                </li>
            @endhasanyrole

            @hasanyrole('colector')
                <li>
                    <x-responsive-nav-link :href="route('colector.create')" :active="request()->routeIs('colector.create')">
                        <i class="fa-solid fa-user-gear"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Nuevo Estudiante</span>
                    </x-responsive-nav-link>    
                </li>
            @endhasanyrole

            <li>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="route('logout')" onclick="event.preventDefault();this.closest('form').submit(); "class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                </form>
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Cerrar Sesión</span>
                </a>
            </li>

        </ul>
    </div>
</aside>
