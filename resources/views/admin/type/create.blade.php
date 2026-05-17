<x-dashboard-layout>
<main class="flex-1 bg-gray-50 min-h-screen p-8 overflow-auto">

    <div class="max-w-xl mx-auto">

        <div class="mb-6">
            <h2 class="text-xl font-bold text-gray-800">Tambah Type</h2>
            <p class="text-xs text-indigo-500 font-semibold mt-0.5">Data Type Kendaraan Baru</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
            <form id="typeForm">

                <div class="mb-8">
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Nama Type</label>
                    <input type="text" name="name" placeholder="Contoh: SUV"
                        class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-300 transition" />
                </div>

                <div class="border-t border-gray-100 mb-6"></div>

                <div class="flex items-center justify-end gap-3">
                    <a href="/admin/type"
                        class="px-5 py-2.5 rounded-xl border border-gray-200 text-sm font-semibold text-gray-500 hover:bg-gray-50 transition">
                        Batal
                    </a>
                    <button type="submit"
                        class="px-6 py-2.5 rounded-xl bg-indigo-600 text-white text-sm font-semibold hover:bg-indigo-700 transition shadow-sm">
                        Simpan Type
                    </button>
                </div>

            </form>
        </div>

    </div>

</main>
</x-dashboard-layout>