<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Teams;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $teams = DB::table('teams')
        //             ->where('userid', '=', Auth::user()->id)
        //             ->first();
        $teams = Teams::where('userid' , Auth::user()->id)->first();

        $teamsearch = DB::table('teams')
                    ->where('userid', '=', Auth::user()->id)
                    ->pluck('id');
        $array = array("[" , "]");
        $teamid = str_replace($array , "" , $teamsearch);
        $peserta = Peserta::where('idteam', 'LIKE', "$teamid")->get();

        if(isset($teams)){
            return view('teams.index' , compact('teams', 'peserta'));       
        }else{
            return view('teams.index' , compact('peserta'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');
    }

    public function tambah()
    {
        $kategori = Auth::user()->kategori;
        $teams = Teams::where('userid' , Auth::user()->id)->first();
        $teamsearch = DB::table('teams')
                    ->where('userid', '=', Auth::user()->id)
                    ->pluck('id');
        $array = array("[" , "]");
        $teamid = str_replace($array , "" , $teamsearch);
        $peserta = Peserta::where('idteam', 'LIKE', "$teamid")->get();
        return view('teams.tambah', compact('peserta', 'teams', 'kategori'));
    }

    public function add(Request $request, $id){
        $updateTeams = Peserta::where('idteam', 'LIKE', "$id")->get();

        $teamsearch = DB::table('teams')
                    ->where('userid', '=', Auth::user()->id)
                    ->pluck('id');
        $array = array("[" , "]");
        $teamid = str_replace($array , "" , $teamsearch);
        
        if(count($updateTeams) < 3){
            $peserta1 = new Peserta;
            $peserta1->namapeserta = $request->namapeserta;
            $peserta1->namapembina = $request->namapembina;
            $peserta1->asalsekolah = $request->asalsekolah;
            $peserta1->nik = $request->nik;
            $peserta1->email = $request->email;
            $peserta1->tanggallahir = $request->tanggallahir;
            $peserta1->idteam = $request->idteams;
            $peserta1->save();
        }
            return redirect(Route('TeamsIndex'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teams = new Teams;
        $teams->namateam = $request->namateam;
        $teams->userid = Auth::user()->id;
        $teams->save();

        $teamsearch = DB::table('teams')
                    ->where('userid', '=', Auth::user()->id)
                    ->pluck('id');
        $array = array("[" , "]");
        $teamid = str_replace($array , "" , $teamsearch);

        if (isset($request->peserta1)) {
        $peserta1 = new Peserta;
        $peserta1->namapeserta = $request->peserta1;
        $peserta1->namapembina = $request->dosen;
        $peserta1->asalsekolah = $request->sekolah;
        $peserta1->nik = $request->nikpeserta1;
        $peserta1->email = $request->email1;
        $peserta1->tanggallahir = $request->tgllahir1;
        $peserta1->idteam = $teamid;
        $peserta1->save();
        }
        if (isset($request->peserta2)) {
            $peserta2 = new Peserta;
            $peserta2->namapeserta = $request->peserta2;
            $peserta2->namapembina = $request->dosen;
            $peserta2->asalsekolah = $request->sekolah;
            $peserta2->nik = $request->nikpeserta2;
            $peserta2->email = $request->email2;
            $peserta2->tanggallahir = $request->tgllahir2;
            $peserta2->idteam = $teamid;
            $peserta2->save();
        }
        if (isset($request->peserta3)) {
            $peserta3 = new Peserta;
            $peserta3->namapeserta = $request->peserta3;
            $peserta3->namapembina = $request->dosen;
            $peserta3->asalsekolah = $request->sekolah;
            $peserta3->nik = $request->nikpeserta3;
            $peserta3->email = $request->email3;
            $peserta3->tanggallahir = $request->tgllahir3;
            $peserta3->idteam = $teamid;
            $peserta3->save();
        }
        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['kategori' => $request->kategori]);
        
        return redirect(Route('TeamsIndex'));
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
        $updateTeams = Peserta::where('idteam', 'LIKE', "$id")->get();
$i = 1;
            foreach ($updateTeams as $updateTeam) {
            $namapeserta = "namapeserta$i";
            $nik = "nik$i";
            $email = "email$i";
            $tanggallahir = "tanggallahir$i";

            $updateTeams[$i-1]->namapeserta    = $request[$namapeserta];
            $updateTeams[$i-1]->nik            = $request[$nik];
            $updateTeams[$i-1]->email          = $request[$email];
            $updateTeams[$i-1]->tanggallahir   = $request[$tanggallahir];
            $updateTeams[$i-1]->namapembina    = $request['namapembina'];
            $updateTeams[$i-1]->asalsekolah    = $request['asalsekolah'];
            $i++;
            }

            // $updateTeams[1]->namapeserta    = $request->namapeserta2;
            // $updateTeams[1]->nik            = $request->nik2;
            // $updateTeams[1]->email          = $request->email2;
            // $updateTeams[1]->tanggallahir   = $request->tanggallahir2;
            // $updateTeams[1]->namapembina    = $request->namapembina;
            // $updateTeams[1]->asalsekolah    = $request->asalsekolah;

            // $updateTeams[2]->namapeserta    = $request->namapeserta3;
            // $updateTeams[2]->nik            = $request->nik3;
            // $updateTeams[2]->email          = $request->email3;
            // $updateTeams[2]->tanggallahir   = $request->tanggallahir3;
            // $updateTeams[2]->namapembina    = $request->namapembina;
            // $updateTeams[2]->asalsekolah    = $request->asalsekolah;
            foreach ($updateTeams as $updateTeam) {
                $updateTeam->save();
            }
            return redirect(Route('TeamsIndex'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('peserta')->where('idteam', '=', $id)->delete();
        
        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['kategori' => "NULL"]);

        DB::table('teams')->where('id', '=', $id)->delete();

        return redirect(route('TeamsIndex'));
    }
}
