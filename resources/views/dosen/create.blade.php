<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Tambah Dosen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">
                <x-form-card>
                    <x-slot name="form_header">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Data Dosen
                        </h6>
                    </x-slot>

                    <form action="{{ route('dosen.store') }}" method="POST" class="row" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-input-label for="nid" :value="__('Nomor Induk Dosen')" />
                                    <x-text-input id="nid" name="nid" type="text" class="mt-1 block w-full" value="{{ old('nid') }}" />
                                    @error('nid')
                                    <p class="mt-2 text-sm text-red-600 space-y-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-input-label for="nama" :value="__('Nama')" />
                                    <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full" value="{{ old('nama') }}" />
                                    @error('nama')
                                    <p class="mt-2 text-sm text-red-600 space-y-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-3/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-input-label for="umur" :value="__('Umur')" />
                                    <x-text-input id="umur" name="umur" type="number" class="mt-1 block w-full" value="{{ old('umur') }}" />
                                    @error('umur')
                                    <p class="mt-2 text-sm text-red-600 space-y-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full lg:w-3/12 px-4">
                                <div class="relative w-full mb-3">
                                    <div class="relative w-full mb-3">
                                        <x-input-label for="telepon" :value="__('Nomor Telepon')" />
                                        <x-text-input id="telepon" name="telepon" type="text" class="mt-1 block w-full" value="{{ old('telepon') }}" />
                                        @error('telepon')
                                        <p class="mt-2 text-sm text-red-600 space-y-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-3/12 px-4">
                                <div class="relative w-full mb-3">
                                    <div class="relative w-full mb-3">
                                        <x-input-label for="golongan" :value="__('Golongan')" />
                                        <x-text-input id="golongan" name="golongan" type="text" class="mt-1 block w-full" value="{{ old('golongan') }}" />
                                        @error('golongan')
                                        <p class="mt-2 text-sm text-red-600 space-y-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-3/12 px-4">
                                <div class="relative w-full mb-3">
                                    <div class="relative w-full mb-3">
                                        <x-input-label for="jenis_kelamin" :value="__('Jenis Kelamin')" />
                                        <div class="flex flex-row justify-between py-3">
                                            <div>
                                                <input class="form-checkbox" type="checkbox" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki">
                                                <label class="ml-1" for="jenis_kelamin">Laki-laki</label>
                                            </div>
                                            <div>
                                                <input class="form-checkbox" type="checkbox" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan">
                                                <label class="ml-1" for="jenis_kelamin">Perempuan</label>
                                            </div>
                                        </div>
                                        @error('jenis_kelamin')
                                        <p class="mt-2 text-sm text-red-600 space-y-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-input-label for="alamat" :value="__('Alamat')" />
                                    <x-text-input id="alamat" name="alamat" type="text" class="mt-1 block w-full" value="{{ old('alamat') }}" />
                                    @error('alamat')
                                    <p class="mt-2 text-sm text-red-600 space-y-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-input-label for="photo" :value="__('Photo')" />
                                    <x-text-input id="photo" name="photo" type="file" class="mt-1 block w-full" />
                                </div>
                            </div>
                        </div>

                        <div class="flex mt-6">
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-primary-link-button class="mr-2" href="{{ route('dosen.index') }}">{{ __('Batal') }}</x-primary-link-button>
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
