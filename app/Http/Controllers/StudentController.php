<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nama = $request->nama ?: '';
        $prodi = $request->prodi ?: '';
        return view('students.index', [
            'search' => !($nama === '' && $prodi === ''),
            'students' => Student::where('nama', 'LIKE', '%' . $nama . '%')
                ->where('prodi', 'LIKE', '%' . $prodi . '%')
                ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        $validated_data = $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'prodi' => 'required',
            'semester' => ['required', 'numeric'],
            'kelas' => 'required',
            'tahun_angkatan' => ['required', 'numeric']
        ]);
        Student::create($validated_data);
        return redirect()->route('students.index')->with([
            'success' => 'Data mahasiswa berhasil disimpan.'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', [
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', [
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $validated_data = $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'prodi' => 'required',
            'semester' => ['required', 'numeric'],
            'kelas' => 'required',
            'tahun_angkatan' => ['required', 'numeric']
        ]);

        $student->update($validated_data);

        return redirect()->route('students.index')->with([
            'success' => 'Data mahasiswa berhasil diperbarui.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with([
            'success' => 'Data mahasiswa berhasil dihapus.'
        ]);
    }
}
