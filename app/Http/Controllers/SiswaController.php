<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(){
        $siswa = siswa::all();
        return view('home', compact('siswa'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'nama' => 'required',
            'kelas' => 'required'
        ]);
        $siswa = siswa::create($data);
        return redirect('/');
    }

    public function edit(Request $request, $id){
        $siswa = siswa::findOrFail($id);
        return view('edit', compact('siswa'));
    }

    public function update(Request $request, $id){
        $siswa = siswa::findOrFail($id);
        $data = $request->validate([
            'nama'=> 'required',
            'kelas' => 'required'
        ]);
        $siswa->update($data);
        return redirect('/');

    }


}
