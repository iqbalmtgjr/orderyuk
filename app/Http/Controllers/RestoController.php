<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Resto;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\NotifPendaftaranAkun;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\Datatables;

class RestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = Resto::all();
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('pemilik', function ($row) {
                    return $row->user->name;
                })
                ->addColumn('aksi', function ($row) {
                    $actionBtn = '<button onclick="getdata(' . $row->id . ')" id="' . $row->id . '" class="btn btn-sm btn-clean btn-icon" title="Edit" data-toggle="modal" data-target="#edit"><i class="la la-edit"></i></button>';
                    $actionBtn .= '<button class="btn btn-sm btn-clean btn-icon delete" title="Hapus" data-nama="' . $row->nama_resto . '" data-id="' . $row->id . '"><i class="la la-trash"></i></button>';
                    return $actionBtn;
                })
                ->rawColumns(['pemilik', 'aksi'])
                ->make(true);
        }
        return view('super_admin.toko.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            //user
            'name' => 'required|max:50',
            'username' => 'required|max:50',
            // 'email' => 'required|max:35|unique:users|email',
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

        //create_user
        $data_user = User::all();
        foreach ($data_user as $d) {
            if ($request->email == $d->email) {
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('peringatan', 'Data dengan email ini sudah ada!!!')
                    ->with('gagal', 'Wahh');
            }
        }
        $make_password = 'qweasdzxc123';
        $user = User::updateOrCreate([
            'role' => 'admin',
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($make_password)
        ]);
        // $user = new User;
        // $user->role = 'admin';
        // $user->name = $request->name;
        // $user->email = $request->email;
        // // $make_password = Str::random(8);
        // $make_password = 'qweasdzxc123';
        // $user->password = Hash::make($make_password);
        // $user->save();

        //create_admin
        $admin = Admin::updateOrCreate([
            'user_id' => $user->id,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'username' => $request->username,
        ]);
        // $admin = new Admin;
        // $admin->user_id = $user->id;
        // $admin->no_hp = $request->no_hp;
        // $admin->alamat = $request->alamat;
        // $admin->username = $request->username;
        // $admin->save();

        Mail::to($user->email)->send(new NotifPendaftaranAkun($user, $make_password));

        $resto = Resto::create([
            'user_id' => $user->id,
            'nama_resto' => $request->nama_resto,
            'status' => $request->status,
            'alamat' => $request->alamat_resto,
            'operasional' => 'tutup'
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
