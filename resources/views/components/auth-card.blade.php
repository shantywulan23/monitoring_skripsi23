<div class="min-h-screen flex flex-col sm:justify-center items-center bg-gradient-to-r from-blue-900 to-blue-800 p-6">
    <!-- Logo -->
    <div class="mb-6">
        <div
            class="flex justify-center items-center h-35 w-35 bg-white rounded-full shadow-lg hover:scale-105 transition transform duration-300">
            {{ $logo }}
        </div>
    </div>

    <!-- Card Container -->
    <div
        class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white/90 backdrop-blur-md shadow-xl rounded-lg border border-gray-200 transition hover:scale-105 hover:shadow-2xl">
        {{ $slot }}
    </div>
</div>
