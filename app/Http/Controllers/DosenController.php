<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Dosen::all();

        return view('admin.dosen.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'user_id' => 'required',
            'nip' => 'required|min:16',
            'nama' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors(), 422);
        }
        // NIP 1998091220151001
        Dosen::create([
            'user_id' => $request->user_id,
            'nip' => $request->nip,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'usia' => $request->usia,
            'asal' => $request->asal,
        ]);

        return redirect()->route('dosen_index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        //
    }
}
