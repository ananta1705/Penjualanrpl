<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {

        $barang = Barang::all();
        return view('barang.barang',compact('barang'));
    }

    public function insert(Request $request){
        // post
    
        $crud = Barang::create([
            'namabarang'=>$request->namabarang,
            'hargabarang'=>$request->hargabarang,
            'jumalahbarang'=>$request->jumalahbarang,
          
            
        ]);
        $crud->save();
        return redirect('barang');
    }
    public function tambah()
    {
        // get
        $crud = Barang::all();
    
        return view('barang.tambah', compact('crud'));
    }

     public function edit($id)
     {
         $crud = Barang::find($id);
         return view('barang.edit', compact('crud'));
     }
 
      public function update($id, Request $request)
      {   
  
          $crud= Barang::where('idbarang',$id);
              $crud->update([
              'namabarang' => $request['namabarang'],
              'hargabarang' => $request['hargabarang'],        
              'jumalahbarang' => $request['jumalahbarang'],
  
             ]);
  
          session()->flash('success','update data Successfully!');
  
          return redirect('barang');
      }

      public function destroy($id){
        $crud = Barang::where('idbarang', $id)
        ->delete();
        session()->flash('success, delete data');
        return redirect('barang');
     }

}
