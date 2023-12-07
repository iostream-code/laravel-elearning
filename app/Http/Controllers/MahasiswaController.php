<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Mahasiswa::all();

        return view('admin.mahasiswa.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'user_id' => 'required',
            'nim' => 'required|min:10',
            'nama' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors(), 422);
        }

        // NIM 3120600016
        Mahasiswa::create([
            'user_id' => $request->user_id,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'tgl_lahir' => $request->tgl_lahir,
            'asal' => $request->asal,
        ]);

        return redirect()->route('mahasiswa_index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('admin.mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validation = Validator::make($request->all(), [
            'nim' => 'required|min:10',
            'nama' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors(), 422);
        }

        // NIM 3120600016
        $mahasiswa->update([
            'nip' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'tgl_lahir' => $request->tgl_lahir,
            'asal' => $request->asal,
        ]);

        return redirect()->route('mahasiswa_index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Mahasiswa $mahasiswa)
    {
        $user = User::where('id', $mahasiswa->user_id);

        if ($mahasiswa->delete())
            $user->delete();

        return redirect()->route('mahasiswa_index');
    }
}
