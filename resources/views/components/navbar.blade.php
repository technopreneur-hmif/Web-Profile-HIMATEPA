<nav class="bg-gray-800 text-white px-8 py-4">
    <div class="flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center space-x-4">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-12 h-12">
            <span class="text-2xl font-bold text-yellow-500">HIMATEPA ITERA</span>
        </div>

        <!-- Navbar Links -->
        <div class="hidden md:flex space-x-6">
            <a href="#" class="text-lg hover:text-yellow-500">Beranda</a>
            <div class="relative">
                <button class="text-lg hover:text-yellow-500">Tentang</button>
                <div class="absolute left-0 hidden mt-2 space-y-2 bg-gray-800 text-white p-2 rounded-md">
                    <a href="#" class="block px-4 py-2">Sub Menu 1</a>
                    <a href="#" class="block px-4 py-2">Sub Menu 2</a>
                </div>
            </div>
            <div class="relative">
                <button class="text-lg hover:text-yellow-500">Berita</button>
                <div class="absolute left-0 hidden mt-2 space-y-2 bg-gray-800 text-white p-2 rounded-md">
                    <a href="#" class="block px-4 py-2">Sub Menu 1</a>
                    <a href="#" class="block px-4 py-2">Sub Menu 2</a>
                </div>
            </div>
            <a href="#contact" class="text-lg px-4 py-2 bg-yellow-500 text-black rounded-lg hover:bg-yellow-600">Kontak</a>
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="md:hidden">
            <button class="text-yellow-500">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
</nav>
