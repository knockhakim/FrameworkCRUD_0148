<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Selamat Datang!') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-center">
                    <img src="{{ asset('images/universitas-semarang-logo.png') }}" alt="Logo Universitas Semarang" class="mx-auto mb-4" style="max-width: 200px;">
                    <h3 class="text-2xl font-bold mb-4">Profil Universitas Semarang</h3>
                    <p class="text-gray-700 mb-4">
                        Universitas Semarang adalah salah satu perguruan tinggi terkemuka di Indonesia yang berfokus pada pendidikan berkualitas tinggi dan pengembangan potensi mahasiswa. Dengan kurikulum yang relevan, fasilitas modern, dan dosen berpengalaman, Universitas Semarang siap memberikan pengalaman belajar terbaik bagi para mahasiswa.
                    </p>
                    <p class="text-gray-700 mb-4">
                        Visi Universitas Semarang adalah menjadi perguruan tinggi unggul dalam bidang akademik dan penelitian, serta berperan aktif dalam pengembangan masyarakat. Misi kami adalah memberikan pendidikan yang berkualitas, menghasilkan lulusan yang kompeten, dan berkontribusi pada peningkatan kualitas sumber daya manusia Indonesia.
                    </p>
                    <p class="text-gray-700 mb-4">
                        Dengan berbagai fakultas dan program studi yang tersedia, Universitas Semarang memberikan kesempatan kepada para mahasiswa untuk mengembangkan potensi mereka, menjalin hubungan sosial, dan menjadi bagian dari komunitas akademik yang dinamis.
                    </p>
                    <h3 class="text-2xl font-bold mb-4">Fakultas dan Jurusan di Universitas Semarang</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <h4 class="text-xl font-bold mb-2">Fakultas Hukum</h4>
                            <ul class="list-disc text-left">
                                <li class="text-gray-700">Program Studi S1 Hukum</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Fakultas Ekonomi</h4>
                            <ul class="list-disc text-left">
                                <li class="text-gray-700">Program Studi S1 Manajemen</li>
                                <li class="text-gray-700">S1 Akuntansi </li>
                                <li class="text-gray-700">DIII Manajemen Perusahaan </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Fakultas Teknik</h4>
                            <ul class="list-disc text-left">
                                <li class="text-gray-700">Program Studi S1 Teknik Sipil</li>
                                <li class="text-gray-700">S1 Teknik Elektro</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Fakultas Psikologi</h4>
                            <ul class="list-disc text-left">
                                <li class="text-gray-700">Program Studi S1 Psikologi</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Fakultas Pertanian</h4>
                            <ul class="list-disc text-left">
                                <li class="text-gray-700">Program Studi S1 Pertanian</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Fakultas Teknologi Informasi dan Komunikasi</h4>
                            <ul class="list-disc text-left">
                                <li class="text-gray-700">Program Studi S1 Teknik Informatika</li>
                                <li class="text-gray-700">S1 Sistem Informasi</li>
                                <li class="text-gray-700">S1 Ilmu Komunikasi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
