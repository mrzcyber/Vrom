<x-dashboard-layout>
<main class="flex-1 bg-gray-50 min-h-screen p-8 overflow-auto">

    <div class="max-w-3xl mx-auto">

        <div class="mb-6">
            <h2 class="text-xl font-bold text-gray-800">Edit Item</h2>
            <p class="text-xs text-indigo-500 font-semibold mt-0.5">{{ $data->name }}</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
            <form id="itemForm" action="{{ route('admin.item.update',$data->slug) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Nama --}}
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Nama Kendaraan</label>
                    <input type="text" name="name" value="{{ $data->name }}"
                        class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-300 transition" />
                </div>

                {{-- Brand & Type --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Brand</label>
                        <select name="brand_id"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-300 transition appearance-none cursor-pointer">
                             <option value="{{ $data->brand->id }}" >{{ $data->brand->name }}</option>
                           @foreach ($brand as $brand)
                           <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                           @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Type</label>
                        <select name="type_id"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-300 transition appearance-none cursor-pointer">
                              <option value="{{ $data->type->id }}" >{{ $data->type->name }}</option>
                           @foreach ($type as $type)
                           <option value="{{ $type->id }}">{{ $type->name }}</option>
                           @endforeach
                        </select>
                    </div>
                </div>

                {{-- Features --}}
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Fitur</label>
                    <textarea name="features" rows="3"
                        class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-300 transition resize-none">{{ $data->features }}</textarea>
                    <p class="text-xs text-gray-400 mt-1.5">Fitur ditulis dengan cara <span class="font-mono text-indigo-400">fitur1,fitur2,fitur3</span></p>
                </div>

                {{-- Price & Star & Review --}}
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Harga / Hari</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-4 flex items-center text-gray-400 text-sm font-medium pointer-events-none">Rp</span>
                            <input type="number" name="price" value="{{ $data->price }}"
                                class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-300 transition" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Rating (Star)</label>
                        <input type="number" name="star" step="0.1" min="0" max="5" value="{{ $data->star }}"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-300 transition" />
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Review</label>
                        <input type="number" name="review" value="{{ $data->review }}"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-300 transition" />
                    </div>
                </div>

                {{-- Existing Images --}}
                @if($data->image->count())
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Gambar Saat Ini</label>
                    <div class="grid grid-cols-4 gap-3">
                        @foreach($data->image as $index => $img)
                        <div class="relative rounded-xl overflow-hidden border border-gray-200 aspect-square bg-gray-100">
                            <img src="{{ Storage::url($img->path) }}" class="w-full h-full object-cover" />
                            @if($index === 0)
                            <div class="absolute bottom-1.5 left-1.5 bg-indigo-600 text-white text-[10px] font-semibold px-2 py-0.5 rounded-full">
                                Thumbnail
                            </div>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- Replace Images --}}
                <div class="mb-8">
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Ganti Gambar <span class="text-gray-400 font-normal">(opsional)</span></label>
                    <label for="imageInput"
                        class="flex flex-col items-center justify-center w-full h-32 rounded-xl border-2 border-dashed border-gray-200 bg-gray-50 cursor-pointer hover:border-indigo-300 hover:bg-indigo-50/40 transition group">
                        <svg class="w-7 h-7 text-gray-300 group-hover:text-indigo-400 transition mb-1.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                        </svg>
                        <p class="text-sm text-gray-400 group-hover:text-indigo-400 transition font-medium">Klik untuk upload gambar baru</p>
                        <p class="text-xs text-gray-300 mt-0.5">PNG, JPG, WEBP — maksimal 4 gambar</p>
                        <input id="imageInput" type="file" name="image[]" multiple accept="image/*" class="hidden" />
                    </label>
                    <p class="text-xs text-gray-400 mt-1.5">Gambar yang dipilih <span class="font-semibold text-indigo-400">pertama</span> akan menjadi thumbnail produk</p>
                    <p id="imageError" class="text-xs text-red-400 mt-1.5 hidden">Maksimal 4 gambar yang dapat dipilih.</p>
                    <div id="imagePreview" class="grid grid-cols-4 gap-3 mt-4 hidden"></div>
                </div>

                <div class="border-t border-gray-100 mb-6"></div>

                <div class="flex items-center justify-end gap-3">
                    <a href="#"
                        class="px-5 py-2.5 rounded-xl border border-gray-200 text-sm font-semibold text-gray-500 hover:bg-gray-50 transition">
                        Batal
                    </a>
                    <button type="submit"
                        class="px-6 py-2.5 rounded-xl bg-indigo-600 text-white text-sm font-semibold hover:bg-indigo-700 transition shadow-sm">
                        Simpan Perubahan
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