<?php

namespace App\Http\Controllers;

use App\Models\arsip;
use Illuminate\Http\Request;

class arsipController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $arsips = Arsip::where('judul','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $arsips = Arsip::paginate(10);
           
        }
        
        return view('arsip.index', compact('arsips'));
    }
    public function create()
    {
        return view('arsip.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nomorSurat' => 'required|string|max:155',
            'kategori' => 'required',
            'judul' => 'required',
            'upload' => 'required|mimes:pdf|max:2048'
        ]);
        $fileName = time() . '.' . $request->upload->extension();

        $request->upload->move(public_path('file'), $fileName);

        $arsip = Arsip::create([
            'nomorSurat' => $request->nomorSurat,
            'kategori' => $request->kategori,
            'judul' => $request->judul,
            'upload' => $fileName
        ]);

        if ($arsip) {
            return redirect()
                ->route('arsip.index')->with(['success' => 'Data berhasil disimpan']);
        } else {
            return redirect()->back()->with(['error' => 'Data gagal disimpan']);
        }
    }
    public function showArsip($nomorSurat)
    {
        $arsips = Arsip::where('nomorSurat', $nomorSurat)->first();
        return view('arsip.show', compact('arsips'));
    }
    public function edit(Request $request, $nomorSurat)
    {
        $arsips = Arsip::where('nomorSurat', $nomorSurat);
        $arsips->update($request->all());
        return redirect()>back()->with(['success' => 'Arsip berhasil diupdate']);
    }
    public function download($upload)
    {
        return response()->download(public_path('file/' . $upload));
    }
    public function destroy($nomorSurat)
    {
        $arsip = Arsip::where('nomorSurat', $nomorSurat);
        $arsip->delete();
        return redirect()->back()->with(['success' => 'Arsip sudah dihapus']);
    }
    
}
