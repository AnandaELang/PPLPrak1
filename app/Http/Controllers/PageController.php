<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Matakuliah;

use Illuminate\Support\Facades\Auth;
use \DateTime;
use Illuminate\Support\Facades\File;


class PageController extends Controller
{

    



    //ELANG
    public function editMatakuliah()
    {
        
        $matakuliahs = MataKuliah::all();

        return view('pages.edit-matakuliah',compact('matakuliahs'));

    }
    public function updateMatakuliah(Request $request,$id)
    {   

        $matakuliah = MataKuliah::find($id);
        $keys = [
            'matakuliah_bk1',
            'matakuliah_bk2',
            'matakuliah_bk3',
            'matakuliah_bk4',
            'matakuliah_bk5',
            'matakuliah_bk6',
            'matakuliah_bk7',
            'matakuliah_bk8',
            'matakuliah_bk9',
            'matakuliah_bk10',
            'matakuliah_bk11',
            'matakuliah_bk12',
            'matakuliah_bk13',
            'matakuliah_bk14',
            'matakuliah_bk15',
            'matakuliah_bk16',
            'matakuliah_bk17',
            'matakuliah_bk18',
            'matakuliah_bk19',
        ];

        foreach ($keys as $key) {
            $value = $request->input($key);
            if ($value !== null) {
                $matakuliah->$key = $value;
            }
        }

        $matakuliah->save();

        return redirect()->back()->with('success', 'Data barang berhasil diubah');
    }
    public function destroyMatakuliah($id)
    {
        $entity = MataKuliah::find($id);
        $entity->delete();
        return redirect()->back()->with('success', 'Entity deleted successfully.');
    }
    
    public function storeMatakuliah(Request $request)
    {

        $request->validate([
            'matakuliah_kodemk' => 'required',
            'matakuliah_nama' => 'required',
        ]);
        $matakuliah = new MataKuliah;
        $matakuliah-> matakuliah_nama = $request->input('matakuliah_nama');
        $matakuliah-> matakuliah_kodemk = $request->input('matakuliah_kodemk');

        $keys = [
            'matakuliah_bk1',
            'matakuliah_bk2',
            'matakuliah_bk3',
            'matakuliah_bk4',
            'matakuliah_bk5',
            'matakuliah_bk6',
            'matakuliah_bk7',
            'matakuliah_bk8',
            'matakuliah_bk9',
            'matakuliah_bk10',
            'matakuliah_bk11',
            'matakuliah_bk12',
            'matakuliah_bk13',
            'matakuliah_bk14',
            'matakuliah_bk15',
            'matakuliah_bk16',
            'matakuliah_bk17',
            'matakuliah_bk18',
            'matakuliah_bk19',
        ];

        foreach ($keys as $key) {
            $value = $request->input($key);
            if ($value !== null) {
                $matakuliah->$key = $value;
            }
        }

        
        $matakuliah->save();



        return redirect()->back()->with('success', 'Barang baru berhasil ditambahkan');
    }






}





