<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Level;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::with('level')->get();
        return view('pengguna.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $level = Level::all();
        $usertype = User::with('level')->get();
        return view('pengguna.create', compact('usertype', 'level'));
    }
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->to('pengguna');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function edit(string $id)
    {
        $level = Level::all();
        $usertype = User::get();
        $edit = User::find($id);
        return view('pengguna.edit', compact('edit', 'usertype', 'level'));
    }
    public function update(Request $request, string $id)
    {
        User::where('id', $id)->update([
            "name" => $request->name,
            "email" => $request->email,
            "id_level" => $request->id_level,
            "password" => bcrypt($request->password)
        ]);
        return redirect()->to('pengguna');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        return redirect()->to('pengguna');
    }
}
