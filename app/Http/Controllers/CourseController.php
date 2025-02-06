<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StoreCourse;
use App\Http\Requests\UpdateCourse;




class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Course::all();
            return DataTables::of($data)
                ->addColumn('actions', function ($data) {
                    return view('courses.actions', ['id' => $data->id]);
                })
                ->rawColumns(['actions'])
                ->make(true);
        }

        return view('courses.index');


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourse $request)
    {
        $data = $request->all();
        Course::create($data);
        return redirect()->route('courses.index')->with('success', 'Curso creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);

        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourse $request, string $id)
    {
        $course = Course::find($id);
        $course->description = $request->description;


        $course->save();

        return redirect()->route('courses.index')->with('success', 'Materia actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Course::find($id)->delete();
        return redirect()->route('courses.index')->with('success', 'Curso eliminado con exito');
    }
}
