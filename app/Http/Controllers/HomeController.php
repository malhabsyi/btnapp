<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\OutletBtn;
use App\Models\KantorCabang;
use App\Models\Items;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        //BUAT NAMPILIN JUMLAH USER DALAM KCB YANG SAMA

        $nkantorcabang = KantorCabang::count();
        $noutlet = OutletBtn::count();
        $nuseradmin = User::where('role','admin')->get();
        $nuseradmin = $nuseradmin->count();
        $nusersuperadmin = User::where('role','superadmin')->get();
        $nusersuperadmin = $nusersuperadmin->count();

        $alloutlet = OutletBtn::where('outlet_status','sewa')->get();
        $alloutlet = $alloutlet->sortBy('outlet_deadline')->values()->all();
        $nalloutlet = OutletBtn::where('outlet_status','sewa')->get();
        $nalloutlet = $nalloutlet->count();

        $persensewaoutlet = OutletBtn::where('outlet_status','sewa')->get();
        $persensewaoutlet = ($persensewaoutlet->count()/$noutlet)*100;
        $persenmilikoutlet = OutletBtn::where('outlet_status','milik perusahaan')->get();
        $persenmilikoutlet = ($persenmilikoutlet->count()/$noutlet)*100;

        $userlogin = Auth::user();
        $userkcb = User::where('kantor_cabang_id',$userlogin->kantor_cabang_id);

        $persenbelumdibayar = OutletBtn::where('outlet_deadline',$userlogin->last_login)->where('outlet_status', 'sewa');
        $persenbelumdibayar = ($persenbelumdibayar->count()/$nalloutlet)*100;

        $persensudahdibayar = 100-$persenbelumdibayar;

        
        return view ('homepage.index',compact('nalloutlet','persensudahdibayar','persenbelumdibayar','persensewaoutlet','persenmilikoutlet','alloutlet','nuseradmin','nusersuperadmin','noutlet','nkantorcabang','nuseradmin','userlogin','userkcb'));

    }
}
