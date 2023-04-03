<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userAll = User::all();
        return view('user.index',[
            'title' => 'List Data User'
        ],compact('userAll'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create',[
            'title' => 'User Baru'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->to('/user')->with('success','Berhasil Menambah Data User');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('user.edit',[
            'title' => 'Edit User'
        ])->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        User::where('id',$id)->update([
            'name' => $request->name,
        ]);
        return redirect()->to('/user')->with('success','Berhasil Update Data User');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return redirect()->to('/user')->with('success','Berhasil Hapus Data User');
    }

    public function changePasswordView($id){
        $user = User::where('id',$id)->first();
        return view('user.change-password',[
            'title' => 'Change Password'
        ])->with('user',$user);
    }

    public function changePasswordPost(Request $request){
        $request->validate([
            'password' => 'required',
            'new_password' => 'required|confirmed',
        ]);
        if(User::where('id',auth()->user()->id)->where('password',bcrypt($request->password))->first()){
            User::query()->where('id', auth()->user()->id)->update([
                'password' => Hash::make($request->new_password),
            ]);

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->to('login')->with('success', 'Password Berhasil Diubah, Silahkan Login Kembali');
        }
        else{
            return back()->with('failed', 'Password lama yang dimasukkan salah');
        }
    }
}
