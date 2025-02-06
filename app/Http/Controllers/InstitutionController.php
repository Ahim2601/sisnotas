<?php

namespace App\Http\Controllers;
use App\Models\Institution;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StoreInstitution;
use App\Http\Requests\UpdateInstitution;
class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Institution::all();
            return DataTables::of($data)
                ->addColumn('actions', function ($data) {
                    return view('institutions.actions', ['id' => $data->id]);
                })
                ->rawColumns(['actions'])
                ->make(true);
        }

        return view('institutions.index');


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('institutions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInstitution $request)
    {
        $data = $request->all();
        Institution::create($data);
        return redirect()->route('institutions.index')->with('success', 'Institucion creada con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Institution $institution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        $institution = Institution::find($id);

        return view('institutions.edit', compact('institution'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInstitution $request, string $id)
    {
        $institution = Institution::find($id);
        $institution->description = $request->description;


        $institution->save();

        return redirect()->route('institutions.index')->with('success', 'Institucion actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Institution::find($id)->delete();
        return redirect()->route('institutions.index')->with('success', 'Institucion eliminado con exito');
    }
}
