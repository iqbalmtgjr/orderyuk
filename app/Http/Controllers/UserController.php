<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Dapur;
use App\Models\Kasir;
use App\Models\Pelanggan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\NotifPendaftaranAkun;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\Datatables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::where('role', '!=', 'super_admin')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('alamat', function ($row) {
                    return $row->pelanggan->alamat;
                })
                ->addColumn('no_hp', function ($row) {
                    return $row->pelanggan->no_hp;
                })
                ->addColumn('aksi', function ($row) {
                    $actionBtn = '<button onclick="getdata(id)" id="id" class="btn btn-sm btn-success font-weight-bold mr-2" data-toggle="modal" data-target="#edit"> <i class="flaticon-edit-1"></i></button> <a href="javascript:void(0)" class="btn btn-sm btn-danger font-weight-bold mr-2 delete" nama="name" id="id"><i class="flaticon2-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['no_hp', 'alamat', 'aksi'])
                ->make(true);
        }
        return view('super_admin.user.index');
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
            'username' => 'required|max:50',
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

        if ($request->role == 'admin') {
            //create_users
            $user = new User;
            $user->role = $request->role;
            $user->name = $request->name;
            $user->email = $request->email;
            // $make_password = Str::random(8);
            $make_password = 'qweasdzxc123';
            $user->password = Hash::make($make_password);
            $user->save();
            //create_admin
            $admin = new Admin;
            $admin->user_id = $user->id;
            $admin->no_hp = $request->no_hp;
            $admin->alamat = $request->alamat;
            $admin->username = $request->username;
            $admin->save();
        } elseif ($request->role == 'user') {
            //create_users
            $user = new User;
            $user->role = $request->role;
            $user->name = $request->name;
            $user->email = $request->email;
            // $make_password = Str::random(8);
            $make_password = 'qweasdzxc123';
            $user->password = Hash::make($make_password);
            $user->save();
            //create_pelanggan
            $pelanggan = new Pelanggan;
            $pelanggan->user_id = $user->id;
            $pelanggan->no_hp = $request->no_hp;
            $pelanggan->alamat = $request->alamat;
            $pelanggan->username = $request->username;
            $pelanggan->save();
        } elseif ($request->role == 'kasir') {
            //create_users
            $user = new User;
            $user->role = $request->role;
            $user->name = $request->name;
            $user->email = $request->email;
            // $make_password = Str::random(8);
            $make_password = 'qweasdzxc123';
            $user->password = Hash::make($make_password);
            $user->save();
            //create_kasir
            $kasir = new Kasir;
            $kasir->user_id = $user->id;
            $kasir->no_hp = $request->no_hp;
            $kasir->alamat = $request->alamat;
            $kasir->username = $request->username;
            $kasir->save();
        } else {
            //create_users
            $user = new User;
            $user->role = $request->role;
            $user->name = $request->name;
            $user->email = $request->email;
            // $make_password = Str::random(8);
            $make_password = 'qweasdzxc123';
            $user->password = Hash::make($make_password);
            $user->save();
            //create_dapur
            $dapur = new Dapur;
            $dapur->user_id = $user->id;
            $dapur->no_hp = $request->no_hp;
            $dapur->alamat = $request->alamat;
            $dapur->username = $request->username;
            $dapur->save();
        }

        Mail::to($user->email)->send(new NotifPendaftaranAkun($user, $make_password));

        return redirect()->back()->with('sukses', 'User Berhasil Diinput!!!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'username' => 'required|max:50',
            // 'email' => 'required|max:35|unique:users|email',
            'no_hp' => 'required',
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

        //update_user
        $user = User::findOrFail($request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        if ($request->role == 'admin') {
            $admin = Admin::where('user_id', $request->id)->update([
                'username' => $request->username,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
            ]);
        } elseif ($request->role == 'kasir') {
            $kasir = Kasir::where('user_id', $request->id)->update([
                'username' => $request->username,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
            ]);
        } elseif ($request->role == 'dapur') {
            $dapur = Dapur::where('user_id', $request->id)->update([
                'username' => $request->username,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
            ]);
        } else {
            $pelanggan = Pelanggan::where('user_id', $request->id)->update([
                'username' => $request->username,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
            ]);
        }

        return redirect()->back()->with('sukses', 'User Berhasil Diedit!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cari_role = User::find($id)->role;
        $data = User::findOrFail($id)->delete();
        if ($cari_role == 'admin') {
            $admin = Admin::where('user_id', $id)->delete();
        } elseif ($cari_role == 'kasir') {
            $kasir = Kasir::where('user_id', $id)->delete();
        } elseif ($cari_role == 'dapur') {
            $dapur = Dapur::where('user_id', $id)->delete();
        } else {
            $pelanggan = Pelanggan::where('user_id', $id)->delete();
        }

        return redirect()->back()->with('sukses', 'Data User Berhasil Dihapus!!!');
    }

    public function getdata($id)
    {
        $data = User::find($id);
        $data->pelanggan;
        $data->admin;
        $data->kasir;
        $data->dapur;
        return $data;
    }
}
