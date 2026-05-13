<x-dashboard-layout>
<main class="flex-1 pl-72 bg-gray-50 min-h-screen p-8 overflow-auto">

    {{-- Greeting --}}
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-2xl font-bold text-gray-800">Manajemen Item 🚗</h1>
        <div class="relative">
            <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z" />
                </svg>
            </span>
            <input type="text" placeholder="Search..." class="pl-9 pr-4 py-2 rounded-xl bg-white border border-gray-200 text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-300 w-56 shadow-sm" />
        </div>
    </div>

    {{-- Stats Cards --}}
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-8">

        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="w-14 h-14 rounded-xl bg-indigo-50 flex items-center justify-center flex-shrink-0">
                <svg class="w-7 h-7 text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
            </div>
            <div>
                <p class="text-xs text-gray-400 font-medium mb-0.5">Total Kendaraan</p>
                <p class="text-2xl font-bold text-gray-800">24</p>
                <p class="text-xs text-emerald-500 font-semibold mt-0.5">Semua unit terdaftar</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="w-14 h-14 rounded-xl bg-emerald-50 flex items-center justify-center flex-shrink-0">
                <svg class="w-7 h-7 text-emerald-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div>
                <p class="text-xs text-gray-400 font-medium mb-0.5">Kendaraan Tersedia</p>
                <p class="text-2xl font-bold text-gray-800">18</p>
                <p class="text-xs text-emerald-500 font-semibold mt-0.5">Siap disewa</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="w-14 h-14 rounded-xl bg-amber-50 flex items-center justify-center flex-shrink-0">
                <svg class="w-7 h-7 text-amber-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div>
                <p class="text-xs text-gray-400 font-medium mb-0.5">Kendaraan Terboking</p>
                <p class="text-2xl font-bold text-gray-800">6</p>
                <p class="text-xs text-amber-500 font-semibold mt-0.5">Sedang disewa</p>
            </div>
        </div>

    </div>

    {{-- Table --}}
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

        <div class="px-6 py-5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 border-b border-gray-100">
            <div>
                <h2 class="text-lg font-bold text-gray-800">Semua Item</h2>
                <p class="text-xs text-indigo-500 font-semibold mt-0.5">Data Kendaraan</p>
            </div>
            <div class="flex items-center gap-3">
                {{-- Filter --}}
                <div class="flex rounded-xl overflow-hidden border border-gray-200 text-xs font-semibold">
                    <button class="px-4 py-2 bg-indigo-600 text-white transition-colors">Semua</button>
                    <button class="px-4 py-2 text-gray-500 hover:bg-gray-50 transition-colors border-l border-gray-200">Tersedia</button>
                    <button class="px-4 py-2 text-gray-500 hover:bg-gray-50 transition-colors border-l border-gray-200">Terboking</button>
                </div>
                {{-- Add Button --}}
                <a href="/admin/items/create" class="flex items-center gap-2 px-4 py-2 rounded-xl bg-indigo-600 text-white text-xs font-semibold hover:bg-indigo-700 transition-colors shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Item
                </a>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="text-xs text-gray-400 font-semibold uppercase tracking-wide border-b border-gray-100">
                        <th class="text-left px-6 py-4 font-medium">Kendaraan</th>
                        <th class="text-left px-4 py-4 font-medium">Brand / Type</th>
                        <th class="text-left px-4 py-4 font-medium">Harga / Hari</th>
                        <th class="text-left px-4 py-4 font-medium">Rating</th>
                        <th class="text-left px-4 py-4 font-medium">Fitur</th>
                        <th class="text-center px-4 py-4 font-medium">Status</th>
                        <th class="text-center px-6 py-4 font-medium">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">

                    {{-- Row 1 --}}
                    <tr class="hover:bg-gray-50/60 transition-colors duration-150">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <img src="/img/bg-car.jpg" alt="Toyota Avanza" class="w-16 h-12 rounded-lg object-cover flex-shrink-0 border border-gray-100" />
                                <div>
                                    <p class="font-semibold text-gray-800">Toyota Avanza</p>
                                    <p class="text-xs text-gray-400 font-mono">toyota-avanza</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <p class="font-medium text-gray-700">Toyota</p>
                            <p class="text-xs text-gray-400">MPV</p>
                        </td>
                        <td class="px-4 py-4 font-semibold text-gray-800">Rp 350.000</td>
                        <td class="px-4 py-4">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-amber-400 fill-amber-400" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                <span class="text-sm font-semibold text-gray-700">4.8</span>
                                <span class="text-xs text-gray-400">(124)</span>
                            </div>
                        </td>
                        <td class="px-4 py-4 text-gray-500 text-xs max-w-[160px] truncate">AC, GPS, Bluetooth, Kursi Kulit</td>
                        <td class="px-4 py-4 text-center">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-600 border border-emerald-100">Tersedia</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex items-center justify-center gap-2">
                                <a href="/admin/items/1/edit" class="w-8 h-8 flex items-center justify-center rounded-lg bg-indigo-50 text-indigo-500 hover:bg-indigo-100 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                                <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-red-50 text-red-400 hover:bg-red-100 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    {{-- Row 2 --}}
                    <tr class="hover:bg-gray-50/60 transition-colors duration-150">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <img src="/img/bg-car.jpg" alt="Honda Jazz" class="w-16 h-12 rounded-lg object-cover flex-shrink-0 border border-gray-100" />
                                <div>
                                    <p class="font-semibold text-gray-800">Honda Jazz</p>
                                    <p class="text-xs text-gray-400 font-mono">honda-jazz</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <p class="font-medium text-gray-700">Honda</p>
                            <p class="text-xs text-gray-400">Hatchback</p>
                        </td>
                        <td class="px-4 py-4 font-semibold text-gray-800">Rp 280.000</td>
                        <td class="px-4 py-4">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-amber-400 fill-amber-400" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                <span class="text-sm font-semibold text-gray-700">4.5</span>
                                <span class="text-xs text-gray-400">(89)</span>
                            </div>
                        </td>
                        <td class="px-4 py-4 text-gray-500 text-xs max-w-[160px] truncate">AC, USB Charger, Kamera Mundur</td>
                        <td class="px-4 py-4 text-center">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-amber-50 text-amber-600 border border-amber-100">Terboking</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex items-center justify-center gap-2">
                                <a href="/admin/items/2/edit" class="w-8 h-8 flex items-center justify-center rounded-lg bg-indigo-50 text-indigo-500 hover:bg-indigo-100 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                                <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-red-50 text-red-400 hover:bg-red-100 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    {{-- Row 3 --}}
                    <tr class="hover:bg-gray-50/60 transition-colors duration-150">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <img src="/img/bg-car.jpg" alt="Mitsubishi Xpander" class="w-16 h-12 rounded-lg object-cover flex-shrink-0 border border-gray-100" />
                                <div>
                                    <p class="font-semibold text-gray-800">Mitsubishi Xpander</p>
                                    <p class="text-xs text-gray-400 font-mono">mitsubishi-xpander</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <p class="font-medium text-gray-700">Mitsubishi</p>
                            <p class="text-xs text-gray-400">MPV</p>
                        </td>
                        <td class="px-4 py-4 font-semibold text-gray-800">Rp 420.000</td>
                        <td class="px-4 py-4">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-amber-400 fill-amber-400" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                <span class="text-sm font-semibold text-gray-700">4.9</span>
                                <span class="text-xs text-gray-400">(210)</span>
                            </div>
                        </td>
                        <td class="px-4 py-4 text-gray-500 text-xs max-w-[160px] truncate">AC, GPS, Sunroof, 7 Kursi</td>
                        <td class="px-4 py-4 text-center">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-600 border border-emerald-100">Tersedia</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex items-center justify-center gap-2">
                                <a href="/admin/items/3/edit" class="w-8 h-8 flex items-center justify-center rounded-lg bg-indigo-50 text-indigo-500 hover:bg-indigo-100 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                                <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-red-50 text-red-400 hover:bg-red-100 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    {{-- Row 4 --}}
                    <tr class="hover:bg-gray-50/60 transition-colors duration-150">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <img src="/img/bg-car.jpg" alt="Suzuki Ertiga" class="w-16 h-12 rounded-lg object-cover flex-shrink-0 border border-gray-100" />
                                <div>
                                    <p class="font-semibold text-gray-800">Suzuki Ertiga</p>
                                    <p class="text-xs text-gray-400 font-mono">suzuki-ertiga</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <p class="font-medium text-gray-700">Suzuki</p>
                            <p class="text-xs text-gray-400">MPV</p>
                        </td>
                        <td class="px-4 py-4 font-semibold text-gray-800">Rp 300.000</td>
                        <td class="px-4 py-4">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-amber-400 fill-amber-400" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                <span class="text-sm font-semibold text-gray-700">4.6</span>
                                <span class="text-xs text-gray-400">(76)</span>
                            </div>
                        </td>
                        <td class="px-4 py-4 text-gray-500 text-xs max-w-[160px] truncate">AC, Bluetooth, 7 Kursi</td>
                        <td class="px-4 py-4 text-center">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-amber-50 text-amber-600 border border-amber-100">Terboking</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex items-center justify-center gap-2">
                                <a href="/admin/items/4/edit" class="w-8 h-8 flex items-center justify-center rounded-lg bg-indigo-50 text-indigo-500 hover:bg-indigo-100 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                                <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-red-50 text-red-400 hover:bg-red-100 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    {{-- Row 5 --}}
                    <tr class="hover:bg-gray-50/60 transition-colors duration-150">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <img src="/img/bg-car.jpg" alt="Daihatsu Xenia" class="w-16 h-12 rounded-lg object-cover flex-shrink-0 border border-gray-100" />
                                <div>
                                    <p class="font-semibold text-gray-800">Daihatsu Xenia</p>
                                    <p class="text-xs text-gray-400 font-mono">daihatsu-xenia</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <p class="font-medium text-gray-700">Daihatsu</p>
                            <p class="text-xs text-gray-400">MPV</p>
                        </td>
                        <td class="px-4 py-4 font-semibold text-gray-800">Rp 270.000</td>
                        <td class="px-4 py-4">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-amber-400 fill-amber-400" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                <span class="text-sm font-semibold text-gray-700">4.4</span>
                                <span class="text-xs text-gray-400">(58)</span>
                            </div>
                        </td>
                        <td class="px-4 py-4 text-gray-500 text-xs max-w-[160px] truncate">AC, USB Charger, 7 Kursi</td>
                        <td class="px-4 py-4 text-center">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-600 border border-emerald-100">Tersedia</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex items-center justify-center gap-2">
                                <a href="/admin/items/5/edit" class="w-8 h-8 flex items-center justify-center rounded-lg bg-indigo-50 text-indigo-500 hover:bg-indigo-100 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                                <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-red-50 text-red-400 hover:bg-red-100 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        <div class="px-6 py-4 border-t border-gray-100 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <p class="text-xs text-gray-400">Menampilkan 1 hingga 5 dari 24 data</p>
            <div class="flex items-center gap-1">
                <button class="w-8 h-8 flex items-center justify-center rounded-lg text-gray-400 hover:bg-gray-100 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-indigo-600 text-white text-xs font-semibold">1</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg text-gray-500 hover:bg-gray-100 text-xs font-semibold transition-colors">2</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg text-gray-500 hover:bg-gray-100 text-xs font-semibold transition-colors">3</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg text-gray-400 hover:bg-gray-100 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

    </div>

</main>
</x-dashboard-layout>