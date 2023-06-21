<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Tambah Mata Kuliah') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">
                <x-form-card>
                    <x-slot name="form_header">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Data Mata Kuliah
                        </h6>
                    </x-slot>

                    <form action="{{ route('makul.update', $makul->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-input-label for="code" :value="__('Kode Makul')" />
                                    <x-text-input id="code" name="code" type="text" class="mt-1 block w-full" value="{{ $makul->code }}" />
                                    @error('code')
                                    <p class="mt-2 text-sm text-red-600 space-y-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-input-label for="name" :value="__('Mata Kuliah')" />
                                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ $makul->name }}" />
                                    @error('name')
                                    <p class="mt-2 text-sm text-red-600 space-y-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-input-label for="prodi" :value="__('Prodi')" />
                                    <x-text-input id="prodi" name="prodi" type="text" class="mt-1 block w-full" value="{{ $makul->prodi }}" />
                                    @error('prodi')
                                    <p class="mt-2 text-sm text-red-600 space-y-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-input-label for="sks" :value="__('SKS')" />
                                    <x-text-input id="sks" name="sks" type="number" class="mt-1 block w-full" value="{{ $makul->sks }}" />
                                    @error('sks')
                                    <p class="mt-2 text-sm text-red-600 space-y-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="flex mt-6">
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-primary-link-button class="mr-2" href="{{ route('makul.index') }}">{{ __('Batal') }}</x-primary-link-button>
                                    <x-primary-button>{{ __('Simpan') }}</x-primary-button>
                                </div>
                            </div>
                        </div>
                    </form>
                </x-form-card>
            </div>
        </div>
    </div>
</x-app-layout>
