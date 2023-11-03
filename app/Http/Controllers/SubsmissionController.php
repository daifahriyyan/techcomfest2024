<?php

namespace App\Http\Controllers;

use App\Models\smulmed;
use App\Models\snetwork;
use App\Models\ssoftware;
use App\Models\Teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubsmissionController extends Controller
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

    //  Looping Berkas Team Dashboard
    public function indexmulmed()
    {
        $teams = Teams::where('userid' , Auth::user()->id)->first();
        return view('submission.mulmed' , compact('teams'));
    }

    public function indexsoftware()
    {
        $teams = Teams::where('userid' , Auth::user()->id)->first();
        return view('submission.software' , compact('teams'));
    }

    public function indexnetwork()
    {
        $teams = Teams::where('userid' , Auth::user()->id)->first();
        return view('submission.network' , compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storemulmed(Request $request)
    {
        // validasi format .pdf
        $this->validate($request, [
            'lorisinil'         => 'mimes:pdf',
            'hasilkaryalomba'   => 'mimes:pdf'
        ]);

        // dd($request);
        $tujuan_upload = 'SubsmissionMultiMedia';
        
        $lorisinil = $request->lorisinil;
        $lokasi_lorisinil = time()."-".$lorisinil->getClientOriginalName();
		$lorisinil->move($tujuan_upload,$lokasi_lorisinil);
        
        $hasilkaryalomba = $request->hasilkaryalomba;
        $lokasi_hasilkaryalomba = time()."-".$hasilkaryalomba->getClientOriginalName();
		$hasilkaryalomba->move($tujuan_upload,$lokasi_hasilkaryalomba);

        $mulmed = new smulmed();
        $mulmed->idteam = $request->idteam;
        $mulmed->lorisinil = $lokasi_lorisinil;
        $mulmed->hasilkaryalomba = $lokasi_hasilkaryalomba;
        $mulmed->save();

        return redirect(Route('dashboard'));
    }

    public function storesoftware(Request $request)
    {
        //validasi URL
        $this->validate($request, [
            'linkgd'    => 'url:http,https',
            'linkhost'  => 'url:http,https'
        ]);

        $software = new ssoftware();
        $software->idteam = $request->idteam;
        $software->linkgd = $request->linkdrive;
        $software->linkhost = $request->linkhosting;
        $software->save();

        return redirect(Route('dashboard'));
    }

    public function storenetwork(Request $request)
    {
        // validasi format .zip
        $this->validate($request, [
            'filerar' => 'mimes:zip'
        ]);

        $lokasi_Upload = 'SubsmissionNetwork';

        $filerar = $request->filerar;
        $nama_filerar = time().'-'.$filerar->getClientOriginalName();
		$filerar->move($lokasi_Upload,$nama_filerar);

        $network = new snetwork();
        $network->idteam = $request->idteam;
        $network->filerar = $nama_filerar;
        $network->save();

        return redirect(Route('dashboard'));
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
        //
    }

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

    public function berkasMulmed($id)
    {
        $pathToFile = 'SubsmissionMultiMedia/' . $id;
        return response()->download($pathToFile);
    }
    
    public function berkasNetwork($id)
    {
        $pathToFile = 'SubsmissionNetwork/' . $id;
        return response()->download($pathToFile);
    }
}
