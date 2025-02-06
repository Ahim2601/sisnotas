<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StoreSubject;
use App\Http\Requests\UpdateSubject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Subject::all();
            return DataTables::of($data)
                ->addColumn('actions', function ($data) {
                    return view('subjects.actions', ['id' => $data->id]);
                })
                ->rawColumns(['actions'])
                ->make(true);
        }

        return view('subjects.index');


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubject $request)
    {
        $data = $request->all();
        Subject::create($data);
        return redirect()->route('subjects.index')->with('success', 'Materia creada con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subject = Subject::find($id);

        return view('subjects.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubject $request, string $id)
    {
        $subject = Subject::find($id);
        $subject->description = $request->description;


        $subject->save();

        return redirect()->route('subjects.index')->with('success', 'Materia actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Subject::find($id)->delete();
        return redirect()->route('subjects.index')->with('success', 'Materia eliminado con exito');
    }
}
