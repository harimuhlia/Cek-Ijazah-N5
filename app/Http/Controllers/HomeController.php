<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')
        ->with('success', 'Your Login successfully.');
    }

    public function userProfile(){
        $user = User::findOrFail(Auth::user()->id);
        return view("profil.index_profil", compact("user"));
    }

    public function editUserProfile($id) {
        $user = User::findOrFail($id);
        return view('profil.edit_profil', compact('user'));
    }

    public function updateUserProfile(Request $request, $id) {
        $this->validate($request, [
            "name" => "required|string",
            "email" => "required|email|unique:users,id," . $id,
            // "password" => "required",
        ]);
        $user = User::find($id);
        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            // "password" => bcrypt($request->password),
            "jbtn_pelatih" => $request->ekskul,
            "alamat" => $request->alamat
        ]);
        if($request->hasFile('foto_profil'))
        {
            $destination = 'fotoprofil/'.$user->foto_profil;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('foto_profil');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('fotoprofil/', $filename);
            $user->foto_profil = $filename;

            // Jika user mengganti passwornya password 

            if ($user->password != $request->password) {
                $user->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    // "password" => Hash::make($request->password),
                    "foto_profil" => $filename,
                    "jbtn_pelatih" => $request->ekskul,
                    "alamat" => $request->alamat
                ]);
            } else {
                // Jika user tidak mengganti passwordnya

                $user->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    // "password" => $request->password,
                    "foto_profil" => $filename,
                    "jbtn_pelatih" => $request->ekskul,
                    "alamat" => $request->alamat
                ]);

            }
        }

        return redirect(route("user.profile", $user->id))->with(["success" => "User berhasil diupdate!"]);
    }
    
}
