<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::where('role', '!=', 'super_admin')->get();
        return view('super_admin.user.index', compact('data'));
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
            'nickname' => 'required|max:50',
            'email' => 'required|max:35|unique:users|email',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'role' => 'required',
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

        return redirect()->back()->with('sukses', 'User Berhasil Diinput!!!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'nickname' => 'required|max:50',
            // 'email' => 'required|max:35|unique:users|email',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput()
                ->with('gagal', 'Ada Kesalahan Saat Penginputan!');
        }

        $data = User::findOrFail($request->id);
        $data->update($request->except([$request->url_getdata]));
        $data->save();

        return redirect()->back()->with('sukses', 'User Berhasil Diedit!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = User::findOrFail($id)->delete();
        return redirect()->back()->with('sukses', 'Data User Berhasil Dihapus!!!');
    }

    public function getdata($id)
    {
        $data = User::find($id);
        return $data;
    }
}
