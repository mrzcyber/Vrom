<x-dashboard-layout>
<main class="flex-1 pl-72 bg-gray-50 min-h-screen p-8 overflow-auto">

    {{-- Greeting --}}
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-2xl font-bold text-gray-800">
            Hello, Admin 👋,
        </h1>
        <div class="relative">
            <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z" />
                </svg>
            </span>
            <input type="text" placeholder="Search..."
                class="pl-9 pr-4 py-2 rounded-xl bg-white border border-gray-200 text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-300 w-56 shadow-sm" />
        </div>
    </div>

    {{-- Stats Cards --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-8">

        {{-- Total Revenue --}}
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="w-14 h-14 rounded-xl bg-indigo-50 flex items-center justify-center flex-shrink-0">
                <svg class="w-7 h-7 text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.8"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm0 0v20M7 7h10M7 17h10" />
                </svg>
            </div>
            <div>
                <p class="text-xs text-gray-400 font-medium mb-0.5">Total Pendapatan</p>
                <p class="text-xl font-bold text-gray-800">Rp 24.500.000</p>
                <p class="text-xs text-emerald-500 font-semibold flex items-center gap-1 mt-0.5">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                    </svg>
                    12% bulan ini
                </p>
            </div>
        </div>

        {{-- Success --}}
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="w-14 h-14 rounded-xl bg-emerald-50 flex items-center justify-center flex-shrink-0">
                <svg class="w-7 h-7 text-emerald-500" fill="none" stroke="currentColor" stroke-width="1.8"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                </svg>
            </div>
            <div>
                <p class="text-xs text-gray-400 font-medium mb-0.5">Pembayaran Berhasil</p>
                <p class="text-xl font-bold text-gray-800">38</p>
                <p class="text-xs text-emerald-500 font-semibold flex items-center gap-1 mt-0.5">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                    </svg>
                    8% bulan ini
                </p>
            </div>
        </div>

        {{-- Pending --}}
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="w-14 h-14 rounded-xl bg-amber-50 flex items-center justify-center flex-shrink-0">
                <svg class="w-7 h-7 text-amber-500" fill="none" stroke="currentColor" stroke-width="1.8"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div>
                <p class="text-xs text-gray-400 font-medium mb-0.5">Menunggu Pembayaran</p>
                <p class="text-xl font-bold text-gray-800">12</p>
                <p class="text-xs text-amber-500 font-semibold flex items-center gap-1 mt-0.5">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                    3% bulan ini
                </p>
            </div>
        </div>

        {{-- Failed --}}
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="w-14 h-14 rounded-xl bg-red-50 flex items-center justify-center flex-shrink-0">
                <svg class="w-7 h-7 text-red-400" fill="none" stroke="currentColor" stroke-width="1.8"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div>
                <p class="text-xs text-gray-400 font-medium mb-0.5">Pembayaran Gagal</p>
                <p class="text-xl font-bold text-gray-800">5</p>
                <p class="text-xs text-red-400 font-semibold flex items-center gap-1 mt-0.5">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                    1% bulan ini
                </p>
            </div>
        </div>

    </div>

    {{-- Bookings Table --}}
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

        {{-- Table Header --}}
        <div class="px-6 py-5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 border-b border-gray-100">
            <div>
                <h2 class="text-lg font-bold text-gray-800">Semua Pemesanan</h2>
                <p class="text-xs text-indigo-500 font-semibold mt-0.5">Data Terbaru</p>
            </div>
            <div class="flex items-center gap-3">
                <div class="relative">
                    <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z" />
                        </svg>
                    </span>
                    <input type="text" placeholder="Cari pemesanan..."
                        class="pl-9 pr-4 py-2 rounded-xl bg-gray-50 border border-gray-200 text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-300 w-52" />
                </div>
                <div class="relative">
                    <select
                        class="appearance-none pl-3 pr-8 py-2 rounded-xl bg-gray-50 border border-gray-200 text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-300 cursor-pointer">
                        <option>Terbaru</option>
                        <option>Terlama</option>
                        <option>Harga Tertinggi</option>
                    </select>
                    <span class="absolute inset-y-0 right-2 flex items-center pointer-events-none text-gray-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </div>
            </div>
        </div>

        {{-- Table --}}
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="text-xs text-gray-400 font-semibold uppercase tracking-wide border-b border-gray-100">
                        <th class="text-left px-6 py-4 font-medium">Order ID</th>
                        <th class="text-left px-4 py-4 font-medium">Nama Pemesan</th>
                        <th class="text-left px-4 py-4 font-medium">Tanggal Sewa</th>
                        <th class="text-left px-4 py-4 font-medium">Durasi</th>
                        <th class="text-left px-4 py-4 font-medium">Kota</th>
                        <th class="text-left px-4 py-4 font-medium">Bank</th>
                        <th class="text-left px-4 py-4 font-medium">Jenis Pembayaran</th>
                        <th class="text-right px-4 py-4 font-medium">Total Harga</th>
                        <th class="text-center px-6 py-4 font-medium">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">

                    {{-- Row 1: success --}}
                    <tr class="hover:bg-gray-50/60 transition-colors duration-150">
                        <td class="px-6 py-4 text-gray-500 text-xs font-mono">ORD-20240001</td>
                        <td class="px-4 py-4 font-semibold text-gray-800">Budi Santoso</td>
                        <td class="px-4 py-4 text-gray-500 text-xs">
                            <span class="block">01 Jan 2025</span>
                            <span class="block text-gray-400">– 05 Jan 2025</span>
                        </td>
                        <td class="px-4 py-4 text-gray-600">4 Hari</td>
                        <td class="px-4 py-4 text-gray-600">Jakarta</td>
                        <td class="px-4 py-4 text-gray-600">BCA</td>
                        <td class="px-4 py-4 text-gray-600">Transfer Bank</td>
                        <td class="px-4 py-4 text-right font-semibold text-gray-800">Rp 1.200.000</td>
                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-600 border border-emerald-100">
                                Berhasil
                            </span>
                        </td>
                    </tr>

                    {{-- Row 2: pending --}}
                    <tr class="hover:bg-gray-50/60 transition-colors duration-150">
                        <td class="px-6 py-4 text-gray-500 text-xs font-mono">ORD-20240002</td>
                        <td class="px-4 py-4 font-semibold text-gray-800">Siti Rahayu</td>
                        <td class="px-4 py-4 text-gray-500 text-xs">
                            <span class="block">10 Jan 2025</span>
                            <span class="block text-gray-400">– 12 Jan 2025</span>
                        </td>
                        <td class="px-4 py-4 text-gray-600">2 Hari</td>
                        <td class="px-4 py-4 text-gray-600">Bandung</td>
                        <td class="px-4 py-4 text-gray-600">Mandiri</td>
                        <td class="px-4 py-4 text-gray-600">Transfer Bank</td>
                        <td class="px-4 py-4 text-right font-semibold text-gray-800">Rp 600.000</td>
                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-amber-50 text-amber-600 border border-amber-100">
                                Pending
                            </span>
                        </td>
                    </tr>

                    {{-- Row 3: failed --}}
                    <tr class="hover:bg-gray-50/60 transition-colors duration-150">
                        <td class="px-6 py-4 text-gray-500 text-xs font-mono">ORD-20240003</td>
                        <td class="px-4 py-4 font-semibold text-gray-800">Andi Wijaya</td>
                        <td class="px-4 py-4 text-gray-500 text-xs">
                            <span class="block">15 Jan 2025</span>
                            <span class="block text-gray-400">– 20 Jan 2025</span>
                        </td>
                        <td class="px-4 py-4 text-gray-600">5 Hari</td>
                        <td class="px-4 py-4 text-gray-600">Surabaya</td>
                        <td class="px-4 py-4 text-gray-600">BNI</td>
                        <td class="px-4 py-4 text-gray-600">Transfer Bank</td>
                        <td class="px-4 py-4 text-right font-semibold text-gray-800">Rp 1.500.000</td>
                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-red-50 text-red-500 border border-red-100">
                                Gagal
                            </span>
                        </td>
                    </tr>

                    {{-- Row 4: success --}}
                    <tr class="hover:bg-gray-50/60 transition-colors duration-150">
                        <td class="px-6 py-4 text-gray-500 text-xs font-mono">ORD-20240004</td>
                        <td class="px-4 py-4 font-semibold text-gray-800">Dewi Lestari</td>
                        <td class="px-4 py-4 text-gray-500 text-xs">
                            <span class="block">22 Jan 2025</span>
                            <span class="block text-gray-400">– 24 Jan 2025</span>
                        </td>
                        <td class="px-4 py-4 text-gray-600">2 Hari</td>
                        <td class="px-4 py-4 text-gray-600">Yogyakarta</td>
                        <td class="px-4 py-4 text-gray-600">BRI</td>
                        <td class="px-4 py-4 text-gray-600">QRIS</td>
                        <td class="px-4 py-4 text-right font-semibold text-gray-800">Rp 750.000</td>
                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-600 border border-emerald-100">
                                Berhasil
                            </span>
                        </td>
                    </tr>

                    {{-- Row 5: pending --}}
                    <tr class="hover:bg-gray-50/60 transition-colors duration-150">
                        <td class="px-6 py-4 text-gray-500 text-xs font-mono">ORD-20240005</td>
                        <td class="px-4 py-4 font-semibold text-gray-800">Rudi Hermawan</td>
                        <td class="px-4 py-4 text-gray-500 text-xs">
                            <span class="block">28 Jan 2025</span>
                            <span class="block text-gray-400">– 02 Feb 2025</span>
                        </td>
                        <td class="px-4 py-4 text-gray-600">5 Hari</td>
                        <td class="px-4 py-4 text-gray-600">Medan</td>
                        <td class="px-4 py-4 text-gray-600">BCA</td>
                        <td class="px-4 py-4 text-gray-600">Transfer Bank</td>
                        <td class="px-4 py-4 text-right font-semibold text-gray-800">Rp 2.000.000</td>
                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-amber-50 text-amber-600 border border-amber-100">
                                Pending
                            </span>
                        </td>
                    </tr>

                    {{-- Row 6: success --}}
                    <tr class="hover:bg-gray-50/60 transition-colors duration-150">
                        <td class="px-6 py-4 text-gray-500 text-xs font-mono">ORD-20240006</td>
                        <td class="px-4 py-4 font-semibold text-gray-800">Nina Kusuma</td>
                        <td class="px-4 py-4 text-gray-500 text-xs">
                            <span class="block">05 Feb 2025</span>
                            <span class="block text-gray-400">– 07 Feb 2025</span>
                        </td>
                        <td class="px-4 py-4 text-gray-600">2 Hari</td>
                        <td class="px-4 py-4 text-gray-600">Bali</td>
                        <td class="px-4 py-4 text-gray-600">BNI</td>
                        <td class="px-4 py-4 text-gray-600">QRIS</td>
                        <td class="px-4 py-4 text-right font-semibold text-gray-800">Rp 900.000</td>
                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-600 border border-emerald-100">
                                Berhasil
                            </span>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        <div class="px-6 py-4 border-t border-gray-100 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <p class="text-xs text-gray-400">Menampilkan 1 hingga 6 dari 256 data</p>
            <div class="flex items-center gap-1">
                <button class="w-8 h-8 flex items-center justify-center rounded-lg text-gray-400 hover:bg-gray-100 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-indigo-600 text-white text-xs font-semibold">1</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg text-gray-500 hover:bg-gray-100 text-xs font-semibold transition-colors">2</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg text-gray-500 hover:bg-gray-100 text-xs font-semibold transition-colors">3</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg text-gray-500 hover:bg-gray-100 text-xs font-semibold transition-colors">4</button>
                <span class="text-gray-400 text-xs px-1">...</span>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg text-gray-500 hover:bg-gray-100 text-xs font-semibold transition-colors">40</button>
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