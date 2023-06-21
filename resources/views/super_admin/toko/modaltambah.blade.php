<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Resto/Cafe</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/resto/input') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ms-auto">
                                <h5>Tambah Pemilik</h5>
                                <input type="hidden" id="role" name="role" value="admin">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ old('name') }}" placeholder="Nama Lengkap ...">
                                    @error('name')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Nama Panggilan</label>
                                    <input type="text" class="form-control" name="username"
                                        value="{{ old('username') }}" placeholder="Nama Panggilan ...">
                                    @error('username')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">E-mail</label>
                                    <input type="email" class="form-control" name="email"
                                        value="{{ old('email') }}" placeholder="E-mail ...">
                                    @error('email')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">No Whatsapp</label>
                                    <input type="number" class="form-control" name="no_hp"
                                        value="{{ old('no_hp') }}" placeholder="No Whatsapp ...">
                                    @error('no_hp')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Alamat Pemilik</label>
                                    <textarea class="form-control" name="alamat" cols="30" rows="5" placeholder="Alamat Pemilik ...">{{ old('alamat') }}</textarea>
                                    @error('alamat')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 ms-auto">
                                <h5>Tambah Data Resto/Cafe</h5>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nama Resto/Cafe</label>
                                    <input type="text" class="form-control" name="nama_resto"
                                        value="{{ old('nama_resto') }}" placeholder="Nama Resto ...">
                                    @error('nama_resto')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="">-- Pilih Status --</option>
                                        <option value="Aktif" @selected(old('status') == 'Aktif')>Aktif</option>
                                        <option value="Tidak Aktif" @selected(old('status') == 'Tidak Aktif')>Tidak Aktif
                                        </option>
                                    </select>
                                    @error('status')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Alamat Resto/Cafe</label>
                                    <textarea class="form-control" name="alamat_resto" cols="30" rows="5" placeholder="Alamat ...">{{ old('alamat_resto') }}</textarea>
                                    @error('alamat_resto')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
