<x-template>
    <div class="mb-5">
        <h1 class="fw-bold">Tambah Mahasiswa</h1>
        <h5>Masukkan data-data berikut untuk menambahkan mahasiswa.</h5>
    </div>
    <div class="mb-5">
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <x-floating-input label="Nama" name="nama" />
            <x-floating-input label="NIM" name="nim" />
            <x-floating-input label="Program Studi" name="prodi" />
            <x-floating-input type="number" label="Semester" name="semester" />
            <x-floating-input label="Kelas" name="kelas" />
            <x-floating-input type="number" label="Tahun Angkatan" name="tahun_angkatan" />

            <button type="submit" class="btn btn-primary text-white">Simpan Data</button>
        </form>
    </div>
</x-template>
