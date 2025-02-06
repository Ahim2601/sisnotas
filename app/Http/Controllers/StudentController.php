<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\UpdateStudent;
use App\Http\Requests\StoreStudent;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

                if ($request->ajax()) {
                    $data = Student::all();
                    return DataTables::of($data)
                        ->addColumn('actions', function ($data) {
                            return view('students.actions', ['id' => $data->id]);
                        })
                        ->rawColumns(['actions'])
                        ->make(true);
                }

                return view('students.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudent $request)

    {

        $data = $request->all();
        Student::create($data);
        return redirect()->route('students.index')->with('success', 'estudiante creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);

        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudent $request, string $id)
    {
        $student = Student::find($id);
        $student->dni = $request->dni;
        $student->name = $request->name;
        $student->lastname = $request->lastname;

        $student->save();

        return redirect()->route('students.index')->with('success', 'Estudiante actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::find($id)->delete();
        return redirect()->route('students.index')->with('success', 'Estudiante eliminado con exito');
    }
}
