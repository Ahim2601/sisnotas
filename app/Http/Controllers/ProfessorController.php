<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StoreProfessor;
use App\Http\Requests\UpdateProfessor;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

            if ($request->ajax()) {
                $data = Professor::all();
                return DataTables::of($data)
                    ->addColumn('actions', function ($data) {
                        return view('professors.actions', ['id' => $data->id]);
                    })
                    ->rawColumns(['actions'])
                    ->make(true);
            }

            return view('professors.index');


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('professors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfessor $request)

        {

            $data = $request->all();
            Professor::create($data);
            return redirect()->route('professors.index')->with('success', 'profesor creado con exito');
        }


    /**
     * Display the specified resource.
     */
    public function show(Professor $professor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $professor = Professor::find($id);

        return view('professors.edit', compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfessor $request, string $id)
    {
        $professor = Professor::find($id);
        $professor->dni = $request->dni;
        $professor->name = $request->name;
        $professor->lastname = $request->lastname;

        $professor->save();

        return redirect()->route('professors.index')->with('success', 'Profesors actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        Professor::find($id)->delete();
        return redirect()->route('professors.index')->with('success', 'Profesor eliminado con exito');
    }
}
