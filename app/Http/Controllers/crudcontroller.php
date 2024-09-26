<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\mobil;



class crudcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function input()
    {
        
        return view('form.formmobil');
    }
    public function ubah($id_mobil)
    {
        $mobil = mobil::where('id_mobil','=',$id_mobil) ->first();
       // dd($mobil);
        return view('form.ubah')
        ->with('mobil_data',$mobil);
    }
    
    public function home()
    {
        
        $mobil = mobil::all();
        return view('index')
        ->with('mobil',$mobil)
        ->with('no',1);
    }


    public function insert(Request $request)
    {
            $mobil = new mobil;
            $mobil->nama_mobil     = $request->nama_mobil;
            $mobil->merek          = $request->merek;
            $mobil->kategori    = $request->kategori;
            $mobil->Harga          = $request->harga;
            $mobil->Tahun          = $request->tahun;
            $mobil ->save();
        return redirect('/index');
    }
    public function update(Request $request , $id_mobil)
    {
            $mobil = mobil::find($id_mobil);
            $mobil->nama_mobil     = $request->nama_mobil;
            $mobil->merek          = $request->merek;
            $mobil->kategori    = $request->kategori;
            $mobil->Harga          = $request->harga;
            $mobil->Tahun          = $request->tahun;
            $mobil ->save();
        return redirect('/index');
    }
     function delete($id_mobil){

        $mobil = mobil::find($id_mobil);
        $mobil->delete();
          return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
	
 
    /*public function ubah($id_mobil)     
	{         
		//$mobil = mobil::find($id_mobil); // Query ke database untuk mengambil data dengan id yang diterima
        //return view('form.formubahmobil', compact('mobil'));   
	}*/
	
	public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
