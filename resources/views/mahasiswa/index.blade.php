<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Mahasiswa') }}
        </h2>
    </x-slot>

    <x-auth-session-status :status="session('message')" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="flex justify-between w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-lg text-blueGray-700">
                                Card Tables
                            </h3>
                            <x-primary-link-button href="/mahasiswa/create">
                                Tambah Data
                            </x-primary-link-button>
                        </div>
                    </div>
                </div>
                <div class="block w-full overflow-x-auto">
                    <!-- Projects table -->
                    <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                        <tr>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                            >
                                Photo
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                            >
                                NIM
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                            >
                                Nama
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                            >
                                Jenis Kelamin
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                            >
                                Alamat
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                            >
                                Kota
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                            >
                                Jurusan
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                            ></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($mahasiswas as $mahasiswa)
                            <tr>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <img class="w-12 h-12 mx-auto"
                                         src="{{$mahasiswa->photo ? asset('storage/' . $mahasiswa->photo) : asset('assets/img/no-image.png')}}"
                                         alt="photo_dosen">
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    {{ $mahasiswa->nim }}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    {{ $mahasiswa->nama }}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    {{ $mahasiswa->jenis_kelamin }}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    {{ $mahasiswa->alamat }}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    {{ $mahasiswa->kota }}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    {{ $mahasiswa->jurusan }}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                    <div class="flex justify-around">
                                        <x-primary-link-button href="{{ route('mahasiswa.edit', $mahasiswa->id) }}">Edit</x-primary-link-button>
                                        <form method="POST" action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button type="submit">
                                                {{ __('Hapus') }}
                                            </x-danger-button>
                                        </form>
                                    </div>
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
