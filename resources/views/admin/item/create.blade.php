<x-dashboard-layout>
<main class="flex-1 bg-gray-50 pl-72 min-h-screen p-8 overflow-auto">

    <div class="max-w-3xl mx-auto">

        {{-- Page Title --}}
        <div class="mb-6">
            <h2 class="text-xl font-bold text-gray-800">Tambah Item</h2>
            <p class="text-xs text-indigo-500 font-semibold mt-0.5">Data Kendaraan Baru</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
            <form action="{{ route('admin.item.store') }}" id="itemForm" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Nama --}}
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Nama Kendaraan</label>
                    <input type="text" name="name" placeholder="Contoh: Toyota Avanza"
                        class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-300 transition" />
                </div>

                {{-- Brand & Type --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Brand</label>
                        <select name="brand_id"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-300 transition appearance-none cursor-pointer">
                            <option value="" disabled selected>Pilih Brand</option>
                           @foreach ($brand as $brand)
                           <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                           @endforeach
                           
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Type</label>
                        <select name="type_id"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-300 transition appearance-none cursor-pointer">
                            <option value="" disabled selected>Pilih Type</option>
                            @foreach ($type as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Features --}}
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Fitur</label>
                    <textarea name="features" rows="3" placeholder="AC, GPS, Bluetooth, Kursi Kulit"
                        class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-300 transition resize-none"></textarea>
                    <p class="text-xs text-gray-400 mt-1.5">Fitur dipisah menggunakan tanda koma contoh <span class="font-mono text-indigo-400">Fitur1,Fitur2,Fitur3</span></p>
                </div>

                {{-- Price & Star & Review --}}
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Harga / Hari</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-4 flex items-center text-gray-400 text-sm font-medium pointer-events-none">Rp</span>
                            <input type="number" min="0" name="price" placeholder="300000"
                                class="no-spinner w-full pl-10 pr-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-300 transition" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Rating (Star)</label>
                        <input type="number" name="star" step="0.1" min="0" max="5" placeholder="4.5"
                            class="no-spinner w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-300 transition" />
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Review</label>
                        <input type="number" min="0" name="review" placeholder="100"
                            class="w-full no-spinner px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-300 transition" />
                    </div>
                </div>

                {{-- Image Upload --}}
                <div class="mb-8">
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Gambar Kendaraan</label>

                    {{-- Drop Zone --}}
                    <label for="imageInput"
                        class="flex flex-col items-center justify-center w-full h-36 rounded-xl border-2 border-dashed border-gray-200 bg-gray-50 cursor-pointer hover:border-indigo-300 hover:bg-indigo-50/40 transition group">
                        <svg class="w-8 h-8 text-gray-300 group-hover:text-indigo-400 transition mb-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                        </svg>
                        <p class="text-sm text-gray-400 group-hover:text-indigo-400 transition font-medium">Klik untuk upload gambar</p>
                        <p class="text-xs text-gray-300 mt-0.5">PNG, JPG, WEBP — maksimal 4 gambar</p>
                        <input id="imageInput" type="file" name="image[]" multiple accept="image/*" class="hidden" />
                    </label>
                    <p class="text-xs text-gray-400 mt-1.5">Masukan  <span class="font-semibold text-indigo-400">Satu Gambar</span> Terlebih Dahulu Agar Menjadi Thumbnail Kemudian Masukan Gambar Lagi Untuk Gambar Tambahan</p>

                    {{-- Preview Grid --}}
                    <div id="imagePreview" class="grid grid-cols-4 gap-3 mt-4 hidden"></div>
                    <p id="imageError" class="text-xs text-red-400 mt-1.5 hidden">Maksimal 4 gambar yang dapat dipilih.</p>
                </div>

                {{-- Divider --}}
                <div class="border-t border-gray-100 mb-6"></div>

                {{-- Actions --}}
                <div class="flex items-center justify-end gap-3">
                    <a href="/admin/item"
                        class="px-5 py-2.5 rounded-xl border border-gray-200 text-sm font-semibold text-gray-500 hover:bg-gray-50 transition">
                        Batal
                    </a>
                    <button type="submit"
                        class="px-6 py-2.5 rounded-xl bg-indigo-600 text-white text-sm font-semibold hover:bg-indigo-700 transition shadow-sm">
                        Simpan Item
                    </button>
                </div>

            </form>
        </div>

    </div>

</main>
@push('script')
    @vite(['resources/js/form.js'])
@endpush
</x-dashboard-layout>