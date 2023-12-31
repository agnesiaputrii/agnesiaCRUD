<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSiswa;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $DataSiswa = DataSiswa::all();
        return view ('datasiswa.index', compact('DataSiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('DataSiswa.create');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate
            (
                [
                    'nama' => 'required',
                    'jurusan' => 'required',
                    'kelas' =>'required',
                ]);

       $DataSiswa =  DataSiswa::create($request->all());
       return redirect()->route('datasiswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $DataSiswa = DataSiswa::findOrFail($id);

        return view('DataSiswa.show', compact('DataSiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $DataSiswa = DataSiswa::findOrFail($id);

        return view('DataSiswa.edit', compact('DataSiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $DataSiswa = DataSiswa::findOrFail($id);
        $DataSiswa->update($request->all());

        return redirect()->route('datasiswa.index')->with('success', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $DataSiswa = DataSiswa::findOrFail($id);
        $DataSiswa->delete();

        return redirect()->route('datasiswa.index')->with('success', 'product updated successfully');
    }
}
