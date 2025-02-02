<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('product.update', $product->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mt-2">
                            <x-input-label for="name" :value="__('Nama Produk')" />
                            <x-text-input id="name" class="block mt-1 w-full p-2" type="text" name="name"
                                :value="$product->name" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <x-input-label for="stock" :value="__('Stok Produk')" />
                            <x-text-input id="stock" class="block mt-1 w-full p-2" type="number" name="stock"
                                :value="$product->stock" required autofocus />
                            <x-input-error :messages="$errors->get('stock')" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <x-input-label for="price" :value="__('Harga Produk')" />
                            <x-text-input id="price" class="block mt-1 w-full p-2" type="number" name="price"
                                :value="$product->price" required autofocus />
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <x-input-label for="barcode" :value="__('Barcode Produk')" />
                            <x-text-input id="barcode" class="block mt-1 w-full p-2" type="text" name="barcode"
                                :value="$product->barcode" required autofocus />
                            <x-input-error :messages="$errors->get('barcode')" class="mt-2" />
                        </div>
                        <x-primary-button class="mt-2">
                            {{ __('Simpan') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
