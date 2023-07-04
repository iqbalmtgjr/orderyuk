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
                ->addColumn('foto', function ($row) {
                    if ($row->foto == null) {
                        return '<p style="color:red">Foto Toko Belum Ada</p>';
                    }
                    return '<img class="card-img-top" style="height: 120px; width: 180px; object-fit: cover; object-position: center;" src="assets/img/resto/' . $row->foto . '" alt="foto-toko">';
                })
                ->addColumn('pemilik', function ($row) {
                    return $row->user->name;
                })
                ->addColumn('aksi', function ($row) {
                    $actionBtn = '<button onclick="getdata(' . $row->id . ')" id="' . $row->id . '" class="btn btn-sm btn-clean btn-icon" title="Edit" data-toggle="modal" data-target="#edit"><i class="la la-edit"></i></button>';
                    $actionBtn .= '<button class="btn btn-sm btn-clean btn-icon delete" title="Hapus" data-nama="' . $row->nama_resto . '" data-id="' . $row->id . '"><i class="la la-trash"></i></button>';
                    return $actionBtn;
                })
                ->rawColumns(['foto', 'pemilik', 'aksi'])
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
        // $make_password = Str::random(8);
        $user = User::updateOrCreate([
            'role' => 'admin',
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($make_password)
        ]);

        //create_admin
        $admin = Admin::updateOrCreate([
            'user_id' => $user->id,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'username' => $request->username,
        ]);

        // Mail::to($user->email)->send(new NotifPendaftaranAkun($user, $make_password));

        if ($request->file('foto')) {
            $nama_foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('foto')->getClientOriginalName());
            $request->file('foto')->move(public_path('assets/img/resto/'), $nama_foto);
            $resto = Resto::create([
                'user_id' => $user->id,
                'nama_resto' => $request->nama_resto,
                'alamat' => $request->alamat_resto,
                'status' => $request->status,
                'foto' => $nama_foto,
                'operasional' => 0
            ]);
        } else {
            $resto = Resto::create([
                'user_id' => $user->id,
                'nama_resto' => $request->nama_resto,
                'status' => $request->status,
                'alamat' => $request->alamat_resto,
                'operasional' => 0
            ]);
        }

        return redirect()->back()->with('sukses', 'Resto/Cafe Berhasil Diinput!!!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // dd($request->foto);
        $validator = Validator::make($request->all(), [
            //resto
            'nama_resto' => 'required',
            'status' => 'required',
            'alamat_resto' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png|max:5000'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput()
                ->with('gagal', 'Ada Kesalahan Saat Penginputan!');
        }

        $data = Resto::findOrFail($request->id);

        if ($request->file('foto')) {
            // Hapus Foto Lama
            $path = public_path('assets/img/resto/' . $data->foto);
            if (file_exists($path)) {
                @unlink($path);
            }

            $nama_foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('foto')->getClientOriginalName());
            // dd($foto);
            $request->file('foto')->move(public_path('assets/img/resto/'), $nama_foto);
            $data->update([
                'nama_resto' => $request->nama_resto,
                'alamat' => $request->alamat_resto,
                'status' => $request->status,
                'foto' => $nama_foto,
            ]);
        } else {
            $data->update($request->except([$request->url_getdata]));
        }



        return redirect()->back()->with('sukses', 'Anda Berhasil Update Resto/Cafe!!!');
    }

    function changeOperasional(Request $request)
    {
        $data = Resto::find($request->resto_id);
        if ($data->operasional == 1) {
            $data->operasional = 0;
        } else {
            $data->operasional = 1;
        }
        $data->save();
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
