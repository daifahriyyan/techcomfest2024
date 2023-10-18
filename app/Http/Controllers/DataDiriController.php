<?php

namespace App\Http\Controllers;

use App\Models\DataDiri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DataDiriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datadirisendiri = DataDiri::where('userid' , Auth::user()->id)->get();

        return view('datadiri.index' , compact('datadirisendiri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datadiri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi format .zip
        $this->validate($request, [
			'file' => 'mimes:zip',
		]);

        $file = $request->file;

        $lokasi_file = time()."-".$file->getClientOriginalName();
        $nama_file = $file->getClientOriginalName();

        $tujuan_upload = 'DataDiri';
		$file->move($tujuan_upload,$lokasi_file);
        
        $DataDiri = new DataDiri;
        $DataDiri->file = $nama_file;
        $DataDiri->userid = Auth::user()->id;
        $DataDiri->lokasi = $lokasi_file;
        $DataDiri->save();
        // dd($DataDiri);

        return redirect(route('DataDiriIndex'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function update(Request $request, $id)
    {
        $updatedatadiri = DataDiri::find($id);
        $updatedatadiri->status = $request->status;
        $updatedatadiri->keterangan = $request->keterangan;
        $updatedatadiri->update();
        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('data_diris')->where('id', '=', $id)->delete();

        return redirect(route('DataDiriIndex'));
    }

    public function download($id)
    {
        $pathToFile = 'DataDiri/' . $id;
        return response()->download($pathToFile);
    }
}
