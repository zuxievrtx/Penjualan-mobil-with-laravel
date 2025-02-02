<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <a href="/product/create">
                        <x-primary-button>Tambah Produk</x-primary-button>
                    </a>
                    <table class="w-full text-gray-500 mt-4">
                        <thead class="bg-gray-50">
                            <tr>
                                <td scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    No</td>
                                <td scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nama Produk</td>
                                <td scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Stok</td>
                                <td scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Harga</td>
                                <td scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Barcode</td>
                                <td scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Aksi</td>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $p)
                                <tr class="border-b">
                                    <td class="px-6 py-4">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-4">{{ $p->name }}</td>
                                    <td class="px-6 py-4">{{ $p->stock }}</td>
                                    <td class="px-6 py-4">{{ $p->price }}</td>
                                    <td class="px-6 py-4">{{ $p->barcode }}</td>
                                    <td class="py-4 whitespace-nowrap text-sm font-medium flex items-center">
                                        <!-- Tombol Edit -->
                                        <a class="px-6" href="/product/{{ $p->id }}/edit">
                                            <x-primary-button
                                                class="flex items-center px-3 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md shadow-sm transition duration-150 ease-in-out">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path
                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                    <path fill-rule="evenodd"
                                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                EDIT
                                            </x-primary-button>
                                        </a>

                                        <!-- Tombol Hapus -->
                                        <form action="/product/{{ $p->id }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button
                                                class="flex items-center px-3 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md shadow-sm transition duration-150 ease-in-out">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.618L9.894 2.553A1 1 0 009 2zm0 8a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                HAPUS
                                            </x-danger-button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
