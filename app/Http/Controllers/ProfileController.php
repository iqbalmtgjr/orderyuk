<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Uploads;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view('user.profil.index');
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            // 'email' => 'required|max:35|unique:users|email',
            'no_hp' => 'required',
            // 'tgl_lahir' => 'date',
            'jenis_kelamin' => 'required|max:10',
        ]);

        if ($validator->fails()) {
            return redirect('profile')
                ->withErrors($validator)
                ->withInput()
                ->with('gagal', 'Ada Kesalahan Saat Penginputan!');
        }

        // Retrieve the validated input...
        $validated = $validator->validated();


        try {
            $newUser = User::find(Auth::user()->id)->update($request->except([$request->url_getdata]));
            return redirect('profile')->with('sukses', 'Data Berhasil Disimpan!');
        } catch (Exception $e) {
            return redirect('profile')->with('gagal', $e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password_lama' => ['required', 'min:8'],
            'password_baru' => ['required', 'min:8'],
            'konfirmasi_password' => ['required', 'min:8', 'same:password_baru']
        ]);

        if ($validator->fails()) {
            return redirect('profile')
                ->withErrors($validator)
                ->withInput()
                ->with('gagal', 'Ada Kesalahan Saat Penginputan!');
        }

        $currentPasswordStatus = Hash::check($request->password_lama, auth()->user()->password);
        if ($currentPasswordStatus) {

            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->password_baru),
            ]);

            return redirect()->back()->with('sukses', 'Password Berhasil Diubah!');
        } else {
            return redirect()->back()->with('gagal', 'Password Tidak Sama Dengan Password Lama!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function updateAvatar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'avatar' => 'required',
            'avatar.*' => 'mimes:jpg,jpeg,png|max:5000'
        ]);

        if ($validator->fails()) {
            return redirect('profile')
                ->withErrors($validator)
                ->withInput()
                ->with('gagal', 'Ada Kesalahan Saat Penginputan!');
        }

        // Hapus Avatar Lama
        $path = public_path('assets/img/' . Auth::user()->avatar);
        if (file_exists($path)) {
            @unlink($path);
        }
        $avatar = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('avatar')->getClientOriginalName());
        $request->file('avatar')->move(public_path('assets/img/'), $avatar);
        User::findOrFail(Auth::user()->id)->update(['avatar' => $avatar]);


        return redirect()->back()->with('sukses', 'Berhasil Ganti Foto Profile');
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
