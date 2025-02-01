<?php

namespace App\Http\Controllers;

use App\Models\Staf;
use Illuminate\Http\Request;

class StafController extends Controller
{
    function tampil() {
        $staf = Staf::get();
        return view('staf.tampil' ,compact('staf'));
    }

    function tambah() {
        return view('staf.tambah');
    }

    public function submit(Request $request) {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'hobi' => 'required',
        ]);
        
        Staf::create($request->all());
        return redirect()->route('staf.tampil');
    
    }
    

    function edit($id) {
        $staf = Staf::find($id);
        return view('staf.edit' , compact('staf'));
    }

    function update(Request $request, $id) {
        $staf = Staf::find($id);
        $staf->nama = $request->nama; 
        $staf->alamat = $request->alamat; 
        $staf->no_hp = $request->no_hp; 
        $staf->jenis_kelamin = $request->jenis_kelamin; 
        $staf->hobi = $request->hobi;
        $staf->update();
        
        return redirect()->route('staf.tampil');
    }

    function delete($id) {
        $staf = Staf::find($id);
        $staf->delete();
        return redirect()->route('staf.tampil');
    }
}
