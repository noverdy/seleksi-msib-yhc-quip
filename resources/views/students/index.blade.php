<x-template>
    <div class="mb-5">
        <h1 class="fw-bold">Data Mahasiswa</h1>
        <a href="{{ route('students.create') }}" class="btn btn-primary text-white mb-3">+ Tambah Mahasiswa</a>
        @if (Session::has('success'))
            <div class="alert alert-success text-center" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
    </div>
    <div class="mb-5">
        <form class="row g-3 mb-4" action="{{ route('students.index') }}">
            <div class="col-auto d-flex align-items-center">
                <span>Cari Mahasiswa</span>
            </div>
            <div class="col-auto">
                <input type="text" id="search" class="form-control d-inline" name="nama" placeholder="Nama"
                    value="{{ request()->nama }}">
            </div>
            <div class="col-auto">
                <input type="text" id="search" class="form-control d-inline" name="prodi"
                    placeholder="Program Studi" value="{{ request()->prodi }}">
            </div>
            <div class="col-auto">
                <button class="btn btn-primary text-white" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i> Cari
                </button>
            </div>
        </form>
        <table class="table table-striped" id="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col" class="w-25">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                    <tr>
                        <th scope="row" class="align-middle">{{ $loop->iteration }}</th>
                        <td class="align-middle">{{ $student->nama }}</td>
                        <td class="align-middle">{{ $student->nim }}</td>
                        <td class="align-middle">{{ $student->prodi }}</td>
                        <td>
                            <a href="{{ route('students.show', $student) }}" class="btn btn-info"><i
                                    class="fa-solid fa-eye"></i> Detail</a>
                            <a href="{{ route('students.edit', $student) }}" class="btn btn-warning"><i
                                    class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <form action="{{ route('students.destroy', $student) }}" method="POST" class="d-inline">
                                @method('delete') @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan=5 class="text-center">
                            {{ $search ? 'Data tidak ditemukan.' : 'Belum ada data mahasiswa yang dimasukkan.' }}
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <link rel="stylesheet" type="text/css" href="{{ asset('dist/jstable.css') }}">
    <script type="text/javascript" src="{{ asset('/dist/jstable.min.js') }}"></script>
    <script>
        const table = new JSTable('#table', {
            searchable: false,
        })
    </script>
</x-template>
