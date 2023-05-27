<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profil.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            // 'email' => 'required|max:35|unique:users|email',
            'no_hp' => 'numeric',
            'tgl_lahir' => 'date',
            'jenis_kelamin' => 'required|max:10',
        ]);

        // $newUser = User::updateOrCreate([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'no_hp' => $request->no_hp,
        //     'tgl_lahir' => $request->tgl_lahir,
        //     'jenis_kelamin' => $request->tgl_lahir,
        //     'alamat' => $request->alamat,
        // ]);
        $newUser = User::find(Auth::user()->id)->update($request->except([$request->url_getdata]));
        // dd($newUser);

        return redirect('profile')->with('sukses', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'password_lama' => ['required', 'min:8'],
            'password_baru' => ['required', 'min:8'],
            'konfirmasi_password' => ['required', 'min:8', 'same:password_baru']
        ]);

        $currentPasswordStatus = Hash::check($request->password_lama, auth()->user()->password);
        if ($currentPasswordStatus) {

            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->password_baru),
            ]);

            return redirect()->back()->with('sukses', 'Password Berhasil Diubah!');
        } else {
            return redirect()->back()->with('gagal', 'Password Tidak Sama Dengan Password Lama!');
        }
        // return redirect()->back()->with('sukses', 'Password Berhasil di Ubah!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
