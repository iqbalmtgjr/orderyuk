@extends('layouts.apps')

@section('content')
    <div class="container g-5">
        <div class="row">
            <h1>AKUN SAYA</h1>
        </div>
        <div class="row col-12 mb-5">
            <div class="form-floating text-center">
                <img style="border-radius: 100%" width="15%" src="{{ Auth::user()->avatar }}" alt="Foto Profil">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="{{ url('/profile/input') }}" method="post">
                    @csrf
                    <div class="row g-3">
                        <h3>Data Lengkap</h3>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Nama Lengkap" value="{{ Auth::user()->name }}">
                                <label for="name">Nama Lengkap</label>
                                @error('name')
                                    <div class="text-danger ml-3 mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email"
                                    value="{{ Auth::user()->email }}">
                                <label for="name">Email</label>
                                @error('email')
                                    <div class="text-danger ml-3 mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="no_hp" id="no_hp"
                                    placeholder="No Handphone" value="{{ Auth::user()->no_hp }}">
                                <label for="name">No Handphone</label>
                                @error('no_hp')
                                    <div class="text-danger ml-3 mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir"
                                    placeholder="No Handphone" value="{{ Auth::user()->tgl_lahir }}">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                @error('tgl_lahir')
                                    <div class="text-danger ml-3 mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                                    @if (Auth::user()->jenis_kelamin == 'L')
                                        <option value="">--Pilih Jenis Kelamin--</option>
                                        <option value="L" selected>Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    @elseif(Auth::user()->jenis_kelamin == 'P')
                                        <option value="">--Pilih Jenis Kelamin--</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P" selected>Perempuan</option>
                                    @else
                                        <option value="">--Pilih Jenis Kelamin--</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    @endif
                                </select>
                                <label for="select1">Jenis Kelamin</label>
                                @error('jenis_kelamin')
                                    <div class="text-danger ml-3 mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="alamat" class="form-control" placeholder="Special Request" id="message" style="height: 100px">{{ Auth::user()->alamat }}</textarea>
                                <label for="alamat">Alamat</label>
                                @error('alamat')
                                    <div class="text-danger ml-3 mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Simpan Data</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <form action="{{ url('/profile/update-password') }}" method="post">
                    @csrf
                    <div class="row g-3">
                        <h3>Ubah Password</h3>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="password" class="form-control" name="password_lama" id="password_lama"
                                    placeholder="Password Lama" value="">
                                <label for="password_lama">Password Lama</label>
                                @error('password_lama')
                                    <div class="text-danger ml-3 mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="password" class="form-control" name="password_baru" id="password_baru"
                                    placeholder="Password Baru" value="">
                                <label for="password_baru">Password Baru</label>
                                @error('password_baru')
                                    <div class="text-danger ml-3 mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="password" class="form-control" name="konfirmasi_password"
                                    id="konfirmasi_password" placeholder="Konfirmasi Password" value="">
                                <label for="konfirmasi_password">Konfirmasi Password</label>
                                @error('konfirmasi_password')
                                    <div class="text-danger ml-3 mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Ubah Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
