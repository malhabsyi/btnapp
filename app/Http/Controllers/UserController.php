<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\OutletBtn;
use App\Models\KantorCabang;
use App\Models\Items;


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

        
        $validated=$request->validate([
            'user_name' => 'required',
            'user_email' => 'required',
            'password' => 'required',
            'kantor_cabang_id' => 'required',
            'role' => 'required',
        ]);
        $data=[
            'user_name' => $validated['user_name'],
            'user_email' => $validated['user_email'],
            'password' => $validated['password'],
            'role' => $validated['role'],
            'kantor_cabang_id' => $validated['kantor_cabang_id'],
            'last_login'=> Carbon::now()->toDateTimeString()
        ];
        $data['password'] = bcrypt($data['password']);
        
        User::create($data);
        //$request->session()->flash('success', 'Registration Successfull! Please Login');
 
        return redirect('/home')->with('success', 'Registration Successfull! Please Login');
    }
    public function edit($id){
        $user = User::find($id);
        return view('user.edit',compact('user'));
    }
    public function update(Request $request,$id){
        $user = User::find($id);
        $user-> user_name = $request->input('user_name');
        $user-> user_email = $request->input('user_email');
        $user-> password = $request->input('password');
        $user-> role = $request->input('role');
        $user-> kantor_cabang_id = $request->input('kantor_cabang_id');;
        // if ($request->hasfile('image')){
        //     $destination = 'uploads/user/'.$user->image;
        //     if (File::exists($destination)){
        //         File::delete($destination);
        //     }
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extension;
        //     $file-> move('uploads/user/',$filename);
        //     $user->image = $filename;
        // }
        $user->save();
        return redirect()->back()->with('status','Pesan : User telah diperbarui');
    }
}