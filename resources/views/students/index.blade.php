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
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col" class="w-25">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                    <tr>
                        <th scope="row" class="align-middle">{{ $loop->iteration }}</th>
                        <td class="align-middle">{{ $student->nama }}</td>
                        <td class="align-middle">{{ $student->nim }}</td>
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
                        <td colspan=4 class="text-center">Belum ada data mahasiswa yang dimasukkan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>
</x-template>
