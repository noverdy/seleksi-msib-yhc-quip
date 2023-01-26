<x-template>
    <div class="mb-5">
        <h1 class="fw-bold">Detail Mahasiswa</h1>
        <form action="{{ route('students.edit', $student) }}" class="d-inline">
            <button type="submit" class="btn btn-warning">
                <i class="fa-solid fa-pen-to-square"></i> Edit Data Mahasiswa
            </button>
        </form>
        <form action="{{ route('students.destroy', $student) }}" method="POST" class="d-inline">
            @method('delete') @csrf
            <button type="submit" class="btn btn-danger">
                <i class="fa-solid fa-trash"></i> Hapus Data Mahasiswa
            </button>
        </form>
    </div>
    <div class="mb-5">
        <table>
            <tbody>
                @foreach ($student->getAttributes() as $key => $value)
                    <tr class="fs-5">
                        <td scope="row" class="fw-bold">
                            <span class="me-3">{{ ucwords(str_replace('_', ' ', $key)) }}</span>
                        </td>
                        <td>{{ $value }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-template>
