<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majestic Custom Jewelers</title>
    
    <!-- Fuentes de Google -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F1E9D9] flex justify-center min-h-screen">
    <div class="container">
        <div class="bg-[#037B75] flex flex-col items-center justify-center p-4 shadow-lg rounded-lg">
            <img src="{{ asset('storage/template/img/logogoldensand.png') }}" alt="Logo" class="" width="150px">
            <h1 class="text-golden-sand text-xl font-bold mb-1 font-cinzel">Majestic</h1>
            <h2 class="text-golden-sand text-lg font-cinzel">Custom Jewelers</h2>
        </div>
        <nav class="bg-[#037B75] p-4">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Ícono de hamburguesa para móvil -->
                <button id="mobile-menu-button" class="md:hidden text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>

                <!-- Menú para desktop -->
                <div class="hidden md:flex space-x-6 justify-center flex-1">
                    <a href="#" class="text-white hover:font-bold hover:text-shadow hover:bg-opacity-20 hover:bg-white hover:px-2 hover:py-1 hover:rounded transition-all duration-300">
                        Nosotros
                    </a>
                    <div class="relative">
                        <button id="categories-button" class="text-white hover:font-bold hover:text-shadow hover:bg-opacity-20 hover:bg-white hover:px-2 hover:py-1 hover:rounded transition-all duration-300">
                            Categorías
                        </button>
                        <div id="categories-dropdown" class="hidden absolute bg-white mt-2 py-2 w-48 rounded shadow-lg">
                            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Anillos</a>
                            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Collares</a>
                            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Zarcillos</a>
                        </div>
                    </div>
                    <a href="#" class="text-white hover:font-bold hover:text-shadow hover:bg-opacity-20 hover:bg-white hover:px-2 hover:py-1 hover:rounded transition-all duration-300">
                        Contacto
                    </a>
                </div>
            </div>

            <!-- Menú para móvil (colapsado por defecto) -->
            <div id="mobile-menu" class="md:hidden hidden mt-4">
                <a href="#" class="block text-white py-2 hover:font-bold hover:text-shadow hover:bg-opacity-20 hover:bg-white hover:px-2 hover:rounded transition-all duration-300">
                    Nosotros
                </a>
                <div>
                    <button id="categories-button-mobile" class="w-full text-left text-white py-2 hover:font-bold hover:text-shadow hover:bg-opacity-20 hover:bg-white hover:px-2 hover:rounded transition-all duration-300">
                        Categorías
                    </button>
                    <div id="categories-dropdown-mobile" class="hidden pl-4">
                        <a href="#" class="block text-white py-2 hover:font-bold hover:text-shadow hover:bg-opacity-20 hover:bg-white hover:px-2 hover:rounded transition-all duration-300">Anillos</a>
                        <a href="#" class="block text-white py-2 hover:font-bold hover:text-shadow hover:bg-opacity-20 hover:bg-white hover:px-2 hover:rounded transition-all duration-300">Collares</a>
                        <a href="#" class="block text-white py-2 hover:font-bold hover:text-shadow hover:bg-opacity-20 hover:bg-white hover:px-2 hover:rounded transition-all duration-300">Zarcillos</a>
                    </div>
                </div>
                <a href="#" class="block text-white py-2 hover:font-bold hover:text-shadow hover:bg-opacity-20 hover:bg-white hover:px-2 hover:rounded transition-all duration-300">
                    Contacto
                </a>
            </div>
        </nav>
    </div>
    
</body>
</html>