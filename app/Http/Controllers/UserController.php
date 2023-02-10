<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\OutletBtn;
use App\Models\KantorCabang;
use App\Models\Items;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //
    public function index(){
        $kantorcabang = KantorCabang::all();
        $user = User::all();
        return view('user.index',compact('user'));
    }
    public function create(){
    
        $kantorcabang = KantorCabang::all();
        return view('user.create');
    }
    public function store(Request $request){

        $currentDateTime = Carbon::now();

        // Get the month of the current date and time
        $currentMonth = $currentDateTime->month;
        $currentYear = $currentDateTime->year;
        
        $last_login_bulan = (int) $currentMonth;
        $last_login_tahun = (int) $currentYear;
        
        $validated=$request->validate([
            'user_name' => 'required',
            'user_email' => 'required',
            'password' => 'required',
            'user_telp' => 'required',
            'kantor_cabang_id' => 'required',
            'role' => 'required',
        ]);
        $data=[
            'user_name' => $validated['user_name'],
            'user_email' => $validated['user_email'],
            'password' => $validated['password'],
            'role' => $validated['role'],
            'user_telp' => $validated['user_telp'],
            'last_login_tahun' => $last_login_tahun,
            'last_login_bulan' => $last_login_bulan,
            'kantor_cabang_id' => $validated['kantor_cabang_id'],
            
            'user_image'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/2048px-Circle-icons-profile.svg.png'
            
        ];
        $data['password'] = bcrypt($data['password']);


        
        User::create($data);
        //$request->session()-  >flash('success', 'Registration Successfull! Please Login');
 
        return redirect('/akun');
    }
    public function edit($id){
        if (Auth::user()->role == 'superadmin') {
            $user = User::find($id);
            return view('user.edit',compact('user'));
        } else {
            return view('user.index');
        }
    }
    public function update(Request $request,$id){
        $user = User::find($id);
        $user-> user_name = $request->input('user_name');
        $user-> user_email = $request->input('user_email');
        $user-> password = $request->input('password');
        $user-> role = $request->input('role');
        $user-> kantor_cabang_id = $request->input('kantor_cabang_id');;
        if ($request->hasfile('image')){
            $destination = 'uploads/user/'.$user->image;
            if (File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file-> move('uploads/user/',$filename);
            $user->image = $filename;
        }
        $user->save();
        return redirect('/akun');
    }
    public function destroy($id)
    {
        $userdestroy = User::find($id);
    
        $userdestroy->delete();

        return redirect('/akun');
    }
}