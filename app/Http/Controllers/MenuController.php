<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\Datatables;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = Menu::all();
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                // ->addColumn('pemilik', function ($row) {
                //     return $row->user->name;
                // })
                ->addColumn('aksi', function ($row) {
                    $actionBtn = '<button onclick="getdata(' . $row->id . ')" id="' . $row->id . '" class="btn btn-sm btn-clean btn-icon" title="Edit" data-toggle="modal" data-target="#edit"><i class="la la-edit"></i></button>';
                    $actionBtn .= '<button class="btn btn-sm btn-clean btn-icon delete" title="Hapus" data-nama="' . $row->nama_produk . '" data-id="' . $row->id . '"><i class="la la-trash"></i></button>';
                    return $actionBtn;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('dapur.menu.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required|max:50',
            'kategori' => 'required|max:50',
            'harga' => 'alpha_num|required',
            'qty' => 'alpha_num|required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput()
                ->with('gagal', 'Ada Kesalahan Saat Penginputan!');
        }

        Menu::create([
            'daftar_resto_id' => $request->daftar_resto_id,
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'qty' => $request->qty,
        ]);

        return redirect()->back()->with('sukses', 'Input menu berhasil!!!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required|max:50',
            'kategori' => 'required|max:50',
            'harga' => 'alpha_num|required',
            'qty' => 'alpha_num|required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput()
                ->with('gagal', 'Ada Kesalahan Saat Penginputan!');
        }

        $update = Menu::findOrFail($request->id)->update($request->except([$request->url_getdata]));

        return redirect()->back()->with('sukses', 'Data menu berhasil diupdate!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Menu::findOrFail($id)->delete();
        return redirect()->back()->with('sukses', 'Menu Berhasil Dihapus!!!');
    }

    public function getdata($id)
    {
        $data = Menu::find($id);
        return $data;
    }
}
