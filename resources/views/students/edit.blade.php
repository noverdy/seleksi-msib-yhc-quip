<x-template>
    <div class="mb-5">
        <h1 class="fw-bold">Edit Mahasiswa</h1>
        <h5>Ubah data-data berikut untuk memperbarui data mahasiswa.</h5>
    </div>
    <div class="mb-5">
        <form action="{{ route('students.update', $student) }}" method="POST">
            @method('put') @csrf
            <x-floating-input label="Nama" name="nama" value="{{ $student->nama }}" />
            <x-floating-input label="NIM" name="nim" value="{{ $student->nim }}" />
            <x-floating-input label="Program Studi" name="prodi" value="{{ $student->prodi }}" />
            <x-floating-input type="number" label="Semester" name="semester" value="{{ $student->semester }}" />
            <x-floating-input label="Kelas" name="kelas" value="{{ $student->kelas }}" />
            <x-floating-input type="number" label="Tahun Angkatan" name="tahun_angkatan"
                value="{{ $student->tahun_angkatan }}" />

            <button type="submit" class="btn btn-primary text-white">Perbarui Data</button>
        </form>
    </div>
</x-template>
