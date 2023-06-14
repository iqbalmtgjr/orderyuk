<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Resto;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\NotifPendaftaranAkun;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Resto::all();
        return view('super_admin.toko.index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            //user
            'name' => 'required|max:50',
            'nickname' => 'required|max:50',
            'email' => 'required|max:35|unique:users|email',
            'no_hp' => 'required',
            'alamat' => 'required',
            //resto
            'nama_resto' => 'required',
            'status' => 'required',
            'alamat_resto' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput()
                ->with('gagal', 'Ada Kesalahan Saat Penginputan!');
        }

        $user = new User;
        $user->role = $request->role;
        $user->name = $request->name;
        $user->nickname = $request->nickname;
        $user->email = $request->email;
        $user->no_hp = $request->no_hp;
        $user->alamat = $request->alamat;
        $make_password = Str::random(8);
        $user->password = Hash::make($make_password);
        $user->save();

        Mail::to($user->email)->send(new NotifPendaftaranAkun($user, $make_password));

        $resto = Resto::create([
            'user_id' => $user->id,
            'nama_resto' => $request->nama_resto,
            'status' => $request->status,
            'alamat' => $request->alamat_resto
        ]);

        return redirect()->back()->with('sukses', 'Resto/Cafe Berhasil Diinput!!!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            //resto
            'nama_resto' => 'required',
            'status' => 'required',
            'alamat_resto' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput()
                ->with('gagal', 'Ada Kesalahan Saat Penginputan!');
        }

        $data = Resto::findOrFail($request->id);
        $data->update($request->except([$request->url_getdata]));
        $data->save();

        return redirect()->back()->with('sukses', 'Anda Berhasil Update Resto/Cafe!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Resto::findOrFail($id)->delete();
        return redirect()->back()->with('sukses', 'Data Resto/Cafe Berhasil Dihapus!!!');
    }

    public function getdata($id)
    {
        $data = Resto::find($id);
        return $data;
    }
}
