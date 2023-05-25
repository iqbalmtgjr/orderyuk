@extends('layouts.apps')

@section('content')
    <div class="container">
        <div class="row mb-5">
            <h1>AKUN SAYA</h1>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="post">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Your Name" value="{{ Auth::user()->user->getNickname() }}">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="email" id="email"
                                    placeholder="Your Name" value="{{ Auth::user()->email }}">
                                <label for="name">Your Email</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="">--Pilih Jenis Kelamin--</option>
                                    <option value="P">Laki-laki</option>
                                    <option value="L">Perempuan</option>
                                </select>
                                <label for="select1">Jenis Kelamin</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                <label for="message">Alamat</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Simpan Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
