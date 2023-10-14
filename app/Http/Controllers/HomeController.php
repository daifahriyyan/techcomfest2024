<?php

namespace App\Http\Controllers;

use App\Models\DataDiri;
use App\Models\Peserta;
use App\Models\User;
use App\Models\smulmed;
use App\Models\snetwork;
use App\Models\ssoftware;
use App\Models\Teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Dd;

class HomeController extends Controller
{   
    public function index()
    {
        // data user side
        $teams = Teams::where('userid' , Auth::user()->id)->first();
   
        $datadiri = DataDiri::where('userid' , Auth::user()->id)->get();

        if (Auth::user()->kategori == 'NULL') {
            $subsmission = 'tdkada';
        }elseif (Auth::user()->kategori == 'Software') {
            $subsmission = ssoftware::where('idteam' , $teams->id)->get();
        }elseif (Auth::user()->kategori == 'Multimedia') {
            $subsmission = smulmed::where('idteam' , $teams->id)->get();
        }elseif (Auth::user()->kategori == 'Network') {
            $subsmission = snetwork::where('idteam', $teams->id)->get();
        }elseif (Auth::user()->kategori == 'Admin') {
            $subsmission = smulmed::where('idteam' , $teams->id)->get();
        }

        // data admin side
        if (Auth::user()->role == 'IndependenM') {
            $datadiriadmin = User::where('kategori' , 'Multimedia')->get();
        }elseif ( Auth::user()->role == 'IndependenS') {
            $datadiriadmin = User::where('kategori' , 'Software')->get();
        }elseif (Auth::user()->role == 'IndependenN') {
            $datadiriadmin = User::where('kategori' , 'Network')->get();
        }elseif (Auth::user()->role == 'Admin') {
            $datadiriadmin = User::where('kategori', 'Admin')->get();
        } else{
            $datadiriadmin = "tidak ada";
        }
        

        return view('dashboard' , compact('teams' , 'datadiri' , 'subsmission' , 'datadiriadmin'));
    }
}
