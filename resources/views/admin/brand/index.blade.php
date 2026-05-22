<x-dashboard-layout>
<main class="flex-1 bg-gray-50 pl-72 min-h-screen p-8 overflow-auto">

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

        <div class="px-6 py-5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 border-b border-gray-100">
            <div>
                <h2 class="text-lg font-bold text-gray-800">Semua Brand</h2>
                <p class="text-xs text-indigo-500 font-semibold mt-0.5">Data Brand Kendaraan</p>
            </div>
            <div class="flex items-center gap-3">
                <div class="relative">
                    <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z" />
                        </svg>
                    </span>
          <form action="{{ route('admin.brand.index') }}" method="get">
                @csrf
                <input type="text" name="q" placeholder="Search..." class="pl-9 pr-4 py-2 rounded-xl bg-white border border-gray-200 text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-300 w-56 shadow-sm" />
                <button type="submit" class="hidden"></button>
            </form>
                </div>
                <a href="/admin/brand/create" class="flex items-center gap-2 px-4 py-2 rounded-xl bg-indigo-600 text-white text-xs font-semibold hover:bg-indigo-700 transition-colors shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Brand
                </a>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="text-xs text-gray-400 font-semibold uppercase tracking-wide border-b border-gray-100">
                        <th class="text-left px-6 py-4 font-medium">No</th>
                        <th class="text-left px-4 py-4 font-medium">Nama Brand</th>
                        <th class="text-center px-6 py-4 font-medium">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                        @foreach ($data as $index => $item)
                            
                        <tr class="hover:bg-gray-50/60 transition-colors duration-150">
                            <td class="px-6 py-4 text-gray-400 text-xs">{{ $index +1 }}</td>
                            <td class="px-4 py-4 font-semibold text-gray-800">{{ $item->name }}</td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('admin.brand.edit',$item->slug) }}" class="w-8 h-8 flex items-center justify-center rounded-lg bg-indigo-50 text-indigo-500 hover:bg-indigo-100 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                                <form action="{{ route('admin.brand.destroy',$item->slug) }}" method="post">
                                    @csrf @method('delete')
                                    <button type="submit" onclick="return confirm('apakah anda yakin ingin menghapusnya?')" class="w-8 h-8 flex items-center justify-center rounded-lg bg-red-50 text-red-400 hover:bg-red-100 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

{{ $data->links('components.pagination') }}


    </div>

</main>
</x-dashboard-layout>